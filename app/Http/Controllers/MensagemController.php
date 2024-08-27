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
            $anexo = "image/users-img/". uniqid("", true) . "." . pathinfo($_FILES['anexo']['name'], PATHINFO_EXTENSION);
            move_uploaded_file($_FILES['anexo']["tmp_name"], $anexo);
            $mensagens->endereco_anexo = $anexo;
        }

        $mensagens->visto = 0;

        $mensagens->save();

        return redirect('chat/'.$id);

    }

}
