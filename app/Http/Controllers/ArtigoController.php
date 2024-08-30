<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use App\Models\Imagem_artigo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ArtigoController extends Controller
{
    public function create(Request $req)
    {

        $req->merge(['val' => str_replace(',', '.', $req->input('val'))]);

        $validator = Validator::make($req->all(), [
            'nome_art' => 'required|string|max:100',
            'val' => 'nullable|numeric',
            'pref' => 'nullable|string|max:50',
            'catepropo' => 'required|string|max:10',
            'condpropo' => 'required|string|max:8',
            'uso_art' => 'required|string|max:25',
            'img_principal' => 'required|image|max:10240',
            'img' => 'max:10240'
        ], [
            'nome_art.required' => 'O campo nome do artigo é obrigatório.',
            'catepropo.required' => 'O campo categoria é obrigatório.',
            'condpropo.required' => 'O campo condição é obrigatório.',
            'uso_art.required' => 'O campo tempo de uso é obrigatório.',

            'nome_art.string' => 'O campo nome deve conter apenas texto.',
            'val.numeric' => 'O campo valor sugerido deve conter apenas números.',
            'pref.string' => 'O campo preferência de troca deve conter apenas texto.',
            'catepropo.string' => 'O campo categoria deve conter apenas texto.',
            'condpropo.string' => 'O campo condição deve conter apenas texto.',
            'uso_art.string' => 'O campo tempo de uso deve conter apenas texto.',
            'img_principal.image' => 'Tipo de arquivo incorreto inserido no campo da imagem.',

            'nome_art.max' => 'O campo nome deve conter no maximo 100 caracteres.',
            'pref.max' => 'O campo preferência de troca deve conter no maximo 50 caracteres.',
            'catepropo.max' => 'O campo categoria deve conter no maximo 10 caracteres.',
            'condpropo.max' => 'O campo condição deve conter no maximo 8 caracteres.',
            'uso_art.max' => 'O campo tempo de uso deve conter no maximo 25 caracteres.',
            'img_principal.max' => 'O arquivo da imagem é muito pesado.',
            'img.max' => 'Um arquivo das imagens é muito pesado.',

        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

        $artg = new Artigo;
        $artg->nome_artigo = $req->nome_art;
        $artg->valor_sugerido_artigo = $req->val;
        $artg->preferencia_troca_artigo = $req->pref;
        $artg->categoria_artigo = $req->catepropo;
        $artg->condicao_artigo = $req->condpropo;
        $artg->status_artigo = 1;
        $artg->id_usuario_ofertante = $req->user()->id;
        $artg->tempo_uso_artigo = $req->uso_art;

        $artg->save();

        $img = new Imagem_artigo;

        $img->imagem_principal = 1;

        $imagem = "image/users-img/" . uniqid("", true) . "." . pathinfo($_FILES['img_principal']['name'], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['img_principal']["tmp_name"], $imagem);
        $img->endereco_imagem = $imagem;

        $img->id_artigo = $artg->id;

        $img->save();

        if ($req->img) {
            foreach ($_FILES['img']['name'] as $key => $name) {
                if ($name != "") {
                    $img = new Imagem_artigo;
                    $img->imagem_principal = 0;

                    $imagem = "image/users-img/" . uniqid("", true) . "." . pathinfo($name, PATHINFO_EXTENSION);
                    move_uploaded_file($_FILES['img']["tmp_name"][$key], $imagem);
                    $img->endereco_imagem = $imagem;

                    $img->id_artigo = $artg->id;
                    $img->save();
                }
            }
        }

        return redirect()->to('/meusartigos');
    }

    public function select(Request $req) //apresentar meus próprios anúncios
    {
        $artigo = Artigo::where('id_usuario_ofertante', $req->user()->id)
            ->whereDoesntHave('proposta', function ($query) {
                $query->whereHas('acordos', function ($query) {
                    $query->where('status_acordo', 4); // Excluir artigos com acordos bem-sucedidos
                });
            })->with('imagens')->get();
        $artigo_sucedido = Artigo::where('id_usuario_ofertante', $req->user()->id)
        ->whereHas('proposta', function ($query) {
            $query->whereHas('acordos', function ($query) {
                $query->where('status_acordo', 4); // Excluir artigos com acordos bem-sucedidos
            });
        })->with('imagens')->get();
        return view('meusartigos', compact('artigo', 'artigo_sucedido'));
    }

    public function search(Request $req)
    {
        // Subconsulta para contar acordos bem-sucedidos por usuário
        $subQuery = DB::table('acordos')
            ->join('propostas', 'acordos.id_proposta', '=', 'propostas.id')
            ->where('acordos.status_acordo', 4)
            ->select('propostas.id_usuario_int', DB::raw('COUNT(*) as trocas_bem_sucedidas'))
            ->groupBy('propostas.id_usuario_int');
    
        // Consulta principal
        $artg = Artigo::where('nome_artigo', 'LIKE', $req->search . '%')
            ->where('status_artigo', '!=', '0')
            ->whereHas('user', function ($query) {
                $query->whereNull('estado_conta'); // Apenas usuários com estado da conta como null
            })
            ->whereDoesntHave('proposta', function ($query) {
                $query->whereHas('acordos', function ($query) {
                    $query->where('status_acordo', 4); // Excluir artigos com acordos bem-sucedidos
                });
            })
            ->with(['imagens', 'user'])
            ->leftJoinSub($subQuery, 'acordos_count', function ($join) {
                $join->on('artigos.id_usuario_ofertante', '=', 'acordos_count.id_usuario_int');
            })
            ->orderByDesc('acordos_count.trocas_bem_sucedidas') // Ordenar pela quantidade de trocas bem-sucedidas
            ->orderByDesc('artigos.created_at') // Ordenar por data de criação
            ->get();
    
    return view('announcements', [
        'artigo' => $artg,
        'searchTerm' => $req->search // Passa o termo de pesquisa para a view
    ]);
    }

    public function list()
{
    // Subconsulta para contar acordos bem-sucedidos por usuário
    $subQuery = DB::table('acordos')
        ->join('propostas', 'acordos.id_proposta', '=', 'propostas.id')
        ->where('acordos.status_acordo', 4)
        ->select('propostas.id_usuario_int', DB::raw('COUNT(*) as trocas_bem_sucedidas'))
        ->groupBy('propostas.id_usuario_int');

    // Consulta principal para listar artigos
    $artg = Artigo::select('artigos.*')
        ->where('status_artigo', '!=', '0')
        ->join('users', 'users.id', '=', 'artigos.id_usuario_ofertante')
        ->leftJoinSub($subQuery, 'acordos_count', function ($join) {
            $join->on('users.id', '=', 'acordos_count.id_usuario_int');
        })
        ->whereNull('users.estado_conta') // Exclui artigos de usuários inativados
        ->whereDoesntHave('proposta', function ($query) {
            $query->whereHas('acordos', function ($query) {
                $query->where('status_acordo', 4); // Excluir artigos com acordos bem-sucedidos
            });
        })
        ->with('imagens', 'user') // Carrega relações de imagens e usuário
        ->orderByDesc('acordos_count.trocas_bem_sucedidas') // Prioriza usuários com mais trocas bem-sucedidas
        ->orderByDesc('artigos.created_at') // E depois os mais recentes
        ->get();

    return view('welcome')->with('artigo', $artg);
}

    public function edit(Request $req)
    {
        $artg = Artigo::with('imagens')->find($req->id);
        return view('editannounce')->with('artigo', $artg);
    }

    public function update(Request $req)
    {
        $req->merge(['val' => str_replace(',', '.', $req->input('val'))]);

        $artg = Artigo::find($req->id);
        $artg->update(
            [
                "nome_artigo" => $req->nome_artigo,
                "valor_sugerido_artigo" => $req->valor_sugerido_artigo,
                "preferencia_troca_artigo" => $req->preferencia_troca_artigo,
                "categoria_artigo" => $req->categoria_artigo,
                "condicao_artigo" => $req->condicao_artigo,
                "tempo_uso_artigo" => $req->tempo_uso_artigo
            ]
        );

        if ($req->hasFile('img_principal')) {
            $img = new Imagem_artigo;

            $img = $img::where('imagem_principal', 1);

            $imagem = "image/users-img/" . uniqid("", true) . "." . pathinfo($_FILES['img_principal']['name'], PATHINFO_EXTENSION);
            move_uploaded_file($_FILES['img_principal']["tmp_name"], $imagem);
            $img->update([
                "endereco_imagem" => $imagem
            ]);
        }

        if ($req->hasFile('img')) {
            foreach ($_FILES['img']['name'] as $key => $name) {
                if ($name != "") {
                    $img = new Imagem_artigo;
                    $img->imagem_principal = 0;

                    $imagem = "image/users-img/" . uniqid("", true) . "." . pathinfo($name, PATHINFO_EXTENSION);
                    move_uploaded_file($_FILES['img']["tmp_name"][$key], $imagem);
                    $img->endereco_imagem = $imagem;

                    $img->id_artigo = $artg->id;
                    $img->save();
                }
            }
        }

        return redirect()->to('/meusartigos');
    }

    public function delete(Request $req)
    {
        $artg = Artigo::find($req->id);
        $artg->delete();
        return redirect()->to('/meusartigos');
    }

    /*ver dados do artigo do usuário ofertante*/
    public function viewAnnounce($id_artigo)
    {
        $artigo = Artigo::with(['imagens', 'user'])->findOrFail($id_artigo);
        return view('viewannounce')->with('artigo', $artigo);
    }
}
