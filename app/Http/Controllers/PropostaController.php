<?php

namespace App\Http\Controllers;

use App\Models\Proposta;
use App\Models\Mensagem;
use Illuminate\Http\Request;

class PropostaController extends Controller
{
    public function create(Request $req){
        $prst = new Proposta();

        $prst->id_artigo = $req->id_artigo;
        $prst->nome_proposta = $req->nome_art;
        $prst->categoria_proposta = $req->catepropo;
        $prst->condicao_proposta = $req->condpropo;
        $prst->tempo_uso_proposta = $req->uso_art." ".$req->uso_art2;

        $imagem = "image/users-img/". uniqid("", true) . "." . pathinfo($_FILES['img_principal']['name'], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['img_principal']["tmp_name"], $imagem);
        $prst->endereco_img_prop = $imagem;

        $prst->id_usuario_int = $req->user()->id;
        $prst->status_proposta = 0; //proposta pendente

        $prst->save();

        $mensagens = new Mensagem();

        $mensagem = "Proposta: ".$prst->nome_proposta."
Categoria: ".$prst->categoria_proposta." 
Tempo de uso: ".$prst->tempo_uso_proposta;

        $mensagens->id_usuario = $prst->id_usuario_int;
        $mensagens->id_proposta = $prst->id;
        $mensagens->conteudo_mensagem = $mensagem;
        $mensagens->endereco_anexo = $prst->endereco_img_prop;
        $mensagens->visto = 0;

        $mensagens->save();

        return redirect('/mep');

    }

    public function show(Request $req){
        $prst = new Proposta();
        $prst = $prst::where('id_usuario_int', $req->user()->id)->orWhereHas('artigo', function ($query) use ($req) {
            $query->where('id_usuario_ofertante', $req->user()->id);
        })->with(['artigo.user'])->orderBy('created_at', 'desc')->get();

        return view('mensagensepropostas')->with('propostas', $prst);
    }

    public function showPropose(Request $req, $id){
        $propostas = Proposta::where('id', $id)->with('acordo')->with(['artigo.user'])->with('mensagem')->with('user')->get();

        return view('chat', compact('propostas', 'id'));
    }

    public function showMessage(Request $req, $id){
        $propostas = Proposta::where('id', $id)->with('acordo')->with(['artigo.user'])->with('mensagem')->with('user')->get();
        foreach($propostas as $prop){
            foreach($prop->mensagem as $msgs){
                if($msgs->id_usuario != $req->user()->id){
                    $msgs->visto = true;
                    $msgs->save();
                }
            }
        }

        return view('messages', compact('propostas', 'id'));
    }

    public function updateStatusCancel($id){

        $propostas = new Proposta();
        $propostas = $propostas::where('id', $id)->get();

        foreach ($propostas as $proposta) {
            $proposta->status_proposta = 3; //proposta cancelada
            $proposta->save();
        }

        return redirect('/mep');
    }

    public function updateStatusChatting($id){

        $propostas = new Proposta();
        $propostas = $propostas::where('id',$id)->get();

        foreach ($propostas as $proposta) {
            $proposta->status_proposta = 1; //proposta em andamento
            $proposta->save();
        }

        return redirect()->back();
    }
}
