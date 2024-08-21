<?php

namespace App\Http\Controllers;

use App\Models\Denuncia;
use App\Models\Denuncia_artigo;
use App\Models\Denuncia_usuario;
use App\Models\Proposta;
use Illuminate\Http\Request;

class DenunciaController extends Controller
{
    public function createDenunciaArtigo(Request $req, $id){
        $denun = New Denuncia();
        $D_artg = New Denuncia_artigo();

        $denun->id_denunciador = $req->user()->id;
        $denun->mensagem_denun = $req->motivoanum;

        $denun->save();

        $D_artg->id_denuncia = $denun->id;
        $D_artg->id_artigo = $id;
        
        $D_artg->save();

        return redirect()->back();
    }

    public function createDenunciaUser(Request $req, $id){
        $denun = New Denuncia();
        $D_user = New Denuncia_usuario();

        $denun->id_denunciador = $req->user()->id;
        $denun->mensagem_denun = $req->motivochat;

        $denun->save();

        $D_user->id_denuncia = $denun->id;
        $D_user->denunciado = $id;

        if($req->screenshot){
            $imagem = "image/reports-img/". uniqid("", true) . "." . pathinfo($_FILES['screenshot']['name'], PATHINFO_EXTENSION);
            move_uploaded_file($_FILES['screenshot']["tmp_name"], $imagem);
            $D_user->endereco_img_denun = $imagem;
        }

        $D_user->save();

        $prst = new Proposta();

        $propostas = Proposta::where('id_usuario_int', $id) // Corrigido de $D_user->id para $id
        ->orWhereHas('artigo', function ($query) use ($id) { // Corrigido de $D_user->id para $id
            $query->where('id_usuario_ofertante', $id);
        })
        ->get();

        foreach ($propostas as $proposta) {
            $proposta->status_proposta = 2;
            $proposta->save();
        }

        return redirect('/welcome');
    }
}
