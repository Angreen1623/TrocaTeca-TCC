<?php

namespace App\Http\Controllers;

use App\Models\Denuncia;
use App\Models\Denuncia_artigo;
use App\Models\Denuncia_usuario;
use App\Models\Proposta;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class DenunciaController extends Controller
{
    public function createDenunciaArtigo(Request $req, $id){
        $validator = Validator::make($req->all(), [
            'motivoanum' => 'required|string|max:255',
        ], [
            'motivoanum.required' => 'O campo motivo da denuncia é obrigatório.',
            'motivoanum.string' => 'O campo motivo da denuncia deve conter apenas texto.',
            'motivoanum.max' => 'O campo motivo da denuncia deve conter no maximo 255 caracteres.',
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

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
        $validator = Validator::make($req->all(), [
            'motivochat' => 'required|string|max:255',
            'screenshot' => 'required|image|max:10240',
        ], [
            'motivochat.required' => 'O campo motivo da denuncia é obrigatório.',
            'screenshot.required' => 'O campo da captura de tela é obrigatório.',

            'motivochat.string' => 'O campo motivo da denuncia deve conter apenas texto.',
            'screenshot.image' => 'Tipo de arquivo incorreto inserido no campo da captura de tela.',

            'motivochat.max' => 'O campo motivo da denuncia deve conter no maximo 255 caracteres.',
            'screenshot.max' => 'O arquivo da captura de tela é muito pesado.',

        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

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
