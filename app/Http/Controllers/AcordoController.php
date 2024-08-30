<?php

namespace App\Http\Controllers;


use App\Models\Acordo;
use Illuminate\Support\Facades\Validator;
use App\Models\Mensagem;

use Illuminate\Http\Request;

class AcordoController extends Controller
{
    public function create(Request $req, $id){

        $validator = Validator::make($req->all(), [
            'nome_art_fi' => 'required|string|max:100',
            'catepropo_fi' => 'required|string|max:10',
            'datae_fi' => 'required|date|after:today',
            'pontoe_fi' => 'required|string|max:70',
            'imagem_final' => 'required|image|max:10240',
        ], [
            'nome_art.required' => 'O campo nome do artigo é obrigatório.',
            'catepropo_fi.required' => 'O campo categoria é obrigatório.',
            'datae_fi.required' => 'O campo data de recebimento é obrigatório.',
            'pontoe_fi.required' => 'O campo ponto de encontro é obrigatório.',
            'imagem_final.required' => 'A proposta final deve conter imagem.',

            'nome_art_fi.string' => 'O campo nome deve conter apenas texto.',
            'catepropo_fi.string' => 'O campo categoria deve conter apenas texto.',
            'datae_fi.date' => 'O campo data de recebimento de troca deve conter uma data.',
            'pontoe_fi.string' => 'O campo ponto de encontro deve conter apenas texto.',
            'imagem_final.image' => 'Tipo de arquivo incorreto inserido no campo da imagem.',

            'nome_art_fi.max' => 'O campo nome deve conter no maximo 100 caracteres.',
            'catepropo_fi.max' => 'O campo categoria deve conter no maximo 10 caracteres.',
            'datae_fi.after' => 'O campo data de recebimento deve ser uma data posterior a hoje.',
            'pontoe_fi.max' => 'O campo ponto de recebimento deve conter no maximo 70 caracteres.',
            'imagem_final.max' => 'O arquivo da imagem é muito pesado.',

        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

        $acordo = new Acordo();

        $acordo->id_proposta = $id;
        $acordo->anuncio = $req->nome_art_fi;
        $acordo->categoria_acordo = $req->catepropo_fi;

        $imagem = "image/users-img/". uniqid("", true) . "." . pathinfo($_FILES['imagem_final']['name'], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['imagem_final']["tmp_name"], $imagem);
        $acordo->imagem_acordo = $imagem;

        $acordo->data_encontro = $req->datae_fi;
        $acordo->local_encontro = $req->pontoe_fi;
        $acordo->status_acordo = 0;

        $acordo->save();

        $mensagens = new Mensagem();

        $mensagem = "Proposta final: ".$acordo->anuncio."
Categoria: ".$acordo->categoria_acordo." 
Data do encontro: ".$acordo->data_encontro."
Local do encontro: ".$acordo->local_encontro;

        $mensagens->id_usuario = $req->user()->id;
        $mensagens->id_proposta = $acordo->id_proposta;
        $mensagens->conteudo_mensagem = $mensagem;
        $mensagens->endereco_anexo = $acordo->imagem_acordo;
        $mensagens->visto = 0;

        $mensagens->save();

        return redirect()->back();
    }

    public function show(Request $req){
        $acordos = Acordo::whereHas('proposta', function($query) use ($req) {
            $query->where('id_usuario_int', $req->user()->id);
        })->orWhereHas('proposta.artigo', function ($query) use ($req) {
            $query->where('id_usuario_ofertante', $req->user()->id);
        })->where('status_acordo', '!=', 0)->with('proposta.artigo.user')->get();

        return view('meusacordos', compact('acordos'));
    }

    public function updateStatusAgree(Request $req, $id){
        $acordo = new Acordo();

        $acordo = $acordo::where('id',$id)->with('proposta.artigo.user')->get();

        foreach($acordo as $acordo){
            if($acordo->status_acordo == 1){

                if($acordo->proposta->id_usuario_int == $req->user()->id){
                    $acordo->status_acordo = 2; //usuario interessado confirmou
                }elseif($acordo->proposta->artigo->id_usuario_ofertante == $req->user()->id){
                    $acordo->status_acordo = 3; //usuário ofertante confirmou
                }

            }elseif($acordo->status_acordo == 2 || $acordo->status_acordo == 3){
                $acordo->status_acordo = 4; //ambos confirmaram
                $acordo->proposta->status_proposta = 2;
                $acordo->proposta->save();
            }
        }

        $acordo->save();

        return redirect()->back();
    }

    public function updateStatusAccept($id){
        $acordo = Acordo::find($id);

        $acordo->status_acordo = 1;
        $acordo->save();

        return redirect()->back();
    }

    public function updateStatusDeny($id){
        $acordo = Acordo::find($id);
        $acordo->delete();      

        return redirect()->back();
    }
}
