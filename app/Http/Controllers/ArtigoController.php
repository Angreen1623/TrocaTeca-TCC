<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use App\Models\Imagem_artigo;
use Illuminate\Http\Request;


class ArtigoController extends Controller
{
    public function create(Request $req){
        $artg = new Artigo;
        $artg->nome_artigo = $req->nome_art;
        $artg->valor_sugerido_artigo = $req->val;
        $artg->preferencia_troca_artigo = $req->pref;
        $artg->categoria_artigo = $req->catepropo;
        $artg->condicao_artigo = $req->condpropo;
        $artg->id_usuario_ofertante = $req->user()->id;
        $artg->tempo_uso_artigo = $req->uso_art;

        $artg->save();

        $img = new Imagem_artigo;

        $img->imagem_principal = 1;

        $imagem = "image/users-img/". uniqid("", true) . "." . pathinfo($_FILES['img_principal']['name'], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['img_principal']["tmp_name"], $imagem);
        $img->endereco_imagem = $imagem;

        $img->id_artigo = $artg->id;

        $img->save();

        if ($req->img) {
            foreach ($_FILES['img']['name'] as $key => $name) {
                if($name != ""){
                    $img = new Imagem_artigo;
                    $img->imagem_principal = 0;
                        
                    $imagem = "image/users-img/". uniqid("", true) . "." . pathinfo($name, PATHINFO_EXTENSION);
                    move_uploaded_file($_FILES['img']["tmp_name"][$key], $imagem);
                    $img->endereco_imagem = $imagem;

                    $img->id_artigo = $artg->id;
                    $img->save();
                }
            }
        }

        return redirect()->to('/meusartigos');
        
    }

    public function select(Request $req){
        $artg = Artigo::where('id_usuario_ofertante', $req->user()->id)->with('imagens')->get();
        return view('meusartigos')->with('artigo', $artg);
    }

    public function search(Request $req){
        $artg = Artigo::where('nome_artigo', 'LIKE', $req->search.'%')->with('imagens')->get();
        return view('announcements')->with('artigo', $artg);
    }

    public function list(){
        $artg = Artigo::all();
        return view('welcome')->with('artigo', $artg);
    }

    public function edit(Request $req){
        $artg = Artigo::with('imagens')->find($req->id);
        return view('editannounce')->with('artigo', $artg);
    }

    public function update(Request $req){
        $artg = Artigo::find($req->id);
        $artg->update(
        [
            "nome_artigo" => $req->nome_artigo ,
            "valor_sugerido_artigo" => $req->valor_sugerido_artigo,
            "preferencia_troca_artigo" => $req->preferencia_troca_artigo,
            "categoria_artigo" => $req->categoria_artigo,
            "condicao_artigo" => $req->condicao_artigo,
            "tempo_uso_artigo" => $req->tempo_uso_artigo
        ]);

        if($req->hasFile('imagem_principal')){
            $img = new Imagem_artigo;

            $img->imagem_principal = 1;

            $imagem = "image/users-img/". uniqid("", true) . "." . pathinfo($_FILES['img_principal']['name'], PATHINFO_EXTENSION);
            move_uploaded_file($_FILES['img_principal']["tmp_name"], $imagem);
            $img->endereco_imagem = $imagem;

            $img->id_artigo = $artg->id;

            $img->save();
        }

        if ($req->hasFile('img')) {
            foreach ($_FILES['img']['name'] as $key => $name) {
                if($name != ""){
                    $img = new Imagem_artigo;
                    $img->imagem_principal = 0;
                        
                    $imagem = "image/users-img/". uniqid("", true) . "." . pathinfo($name, PATHINFO_EXTENSION);
                    move_uploaded_file($_FILES['img']["tmp_name"][$key], $imagem);
                    $img->endereco_imagem = $imagem;

                    $img->id_artigo = $artg->id;
                    $img->save();
                }
            }
        }
        
        return redirect()->to('/meusartigos');
  }

  public function delete(Request $req){
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