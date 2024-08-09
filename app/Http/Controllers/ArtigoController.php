<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
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
        return view('welcome');
        
    }
}
