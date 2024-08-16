<?php

namespace App\Http\Controllers;

use App\Models\Proposta;
use Illuminate\Http\Request;

class PropostaController extends Controller
{
    public function create(Request $req){
        $prst = new Proposta();

        $prst->id_artigo = $req->id_artigo;
        $prst->nome_proposta = $req->nome_art;
        $prst->categoria_proposta = $req->catepropo;
        $prst->condicao_proposta = $req->condpropo;
        $prst->tempo_uso_proposta = $req->uso_art;

        $imagem = "image/users-img/". uniqid("", true) . "." . pathinfo($_FILES['img_principal']['name'], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['img_principal']["tmp_name"], $imagem);
        $prst->endereco_img_prop = $imagem;

        $prst->save();

        return redirect('/mep');

    }
}