<?php

namespace App\Http\Controllers;

use App\Models\Mensagem;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class MensagemController extends Controller
{

    public function create(Request $req, $id){

        $mensagens = new Mensagem();

        $mensagens->id_usuario = $req->user()->id;
        $mensagens->id_proposta = $id;
        $mensagens->conteudo_mensagem = $req->mensagem;

        if($req->anexo){
            $imagem = "image/users-img/". uniqid("", true) . "." . pathinfo($_FILES['anexo']['name'], PATHINFO_EXTENSION);
            move_uploaded_file($_FILES['anexo']["tmp_name"], $imagem);
            $mensagens->endereco_anexo = $imagem;
        }

        $mensagens->visto = 0;

        $mensagens->save();

        return redirect('chat/'.$id);

    }

}
