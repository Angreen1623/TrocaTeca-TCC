<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use App\Models\Imagem_artigo;
use Faker\Provider\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArtigoController extends Controller
{
    public function create(Request $req){
        $artg = new Artigo;
        $img = new Imagem_artigo;
        $artg->nome_artigo = $req->nome_art;
        $artg->valor_sugerido_artigo = $req->val;
        $artg->preferencia_troca_artigo = $req->pref;
        $artg->categoria_artigo = $req->catepropo;
        $artg->condicao_artigo = $req->condpropo;
        $artg->id_usuario_ofertante = $req->user()->id;
        $artg->tempo_uso_artigo = $req->uso_art;

        $artg->save();

        $img->imagem_principal = 1;
        $img->endereco_imagem = $req->img_principal;
        $img->id_artigo = $artg->id;

        $img->save();

        if ($req->img) {
            foreach ($req->img as $imagens) {
                $img = new Imagem_artigo;
                $img->imagem_principal = 0;
                $img->endereco_imagem = $imagens;
                $img->id_artigo = $artg->id;
                $img->save();
            }
        }

        return redirect()->to('/meusartigos');
        
    }
}
