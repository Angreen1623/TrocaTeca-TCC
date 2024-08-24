<?php

namespace App\Http\Controllers;


use App\Models\Acordo;

use Illuminate\Http\Request;

class AcordoController extends Controller
{
    public function create(Request $req, $id){
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

        return redirect()->back();
    }

    public function show(Request $req){
        $acordos = Acordo::whereHas('proposta', function($query) use ($req) {
            $query->where('id_usuario_int', $req->user()->id);
        })->orWhereHas('proposta.artigo', function ($query) use ($req) {
            $query->where('id_usuario_ofertante', $req->user()->id);
        })->with('proposta.artigo.user')->get();

        return view('meusacordos', compact('acordos'));
    }

    public function validar(Request $req, $id){
        $acordo = new Acordo();

        $acordo = $acordo::find($id)->with('proposta.artigo.user')->get();

        foreach($acordo as $acordo){
            if($acordo->status_acordo == 0){

                if($acordo->proposta->id_usuario_int == $req->user()->id){
                    $acordo->status_acordo = 1; //usuario interessado confirmou
                }elseif($acordo->proposta->artigo->id_usuario_ofertante == $req->user()->id){
                    $acordo->status_acordo = 2; //usuário ofertante confirmou
                }

            }else{
                $acordo->status_acordo = 3; //ambos confirmaram
            }
        }

        $acordo->save();

        return redirect()->back();
    }
}
