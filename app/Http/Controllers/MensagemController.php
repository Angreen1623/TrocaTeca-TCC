<?php

namespace App\Http\Controllers;

use App\Models\Mensagem;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class MensagemController extends Controller
{

    public function create(Request $req, $id){

        $validator = Validator::make($req->all(), [
            'mensagem' => 'sometimes|string|max:255',
            'anexo' => 'sometimes|image|max:10240'
        ], [
            'mensagem.sometimes' => 'Uma mensagem vazia não pode ser enviada.',
            'anexo.sometimes' => '',

            'mensagem.string' => 'O campo nome deve conter apenas texto.',
            'anexo.image' => 'Tipo de arquivo incorreto inserido no campo para imagens.',

            'mensagem.max' => 'O campo nome deve conter no maximo 255 caracteres.',
            'anexo.max' => 'O arquivo do anexo é muito pesado.',

        ]);
        
        $validator->sometimes('mensagem', 'required', function ($input) {
            return $input->anexo == null;
        });
        
        $validator->sometimes('anexo', 'required', function ($input) {
            return $input->mensagem == null;
        });

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

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
