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
}
