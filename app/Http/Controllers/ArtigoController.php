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
}
