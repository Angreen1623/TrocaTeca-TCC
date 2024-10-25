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
        $denun->estado_denuncia = 0;

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
        $denun->estado_denuncia = 0;

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

        public function listannounces(Request $req){
        if (null !== $req->user() && $req->user()->email != 'trocatecaltda@gmail.com') {
            return redirect('/');
        }

        $denuncias = Denuncia::selectRaw('MIN(denuncias.id) as id, denuncias.estado_denuncia, COUNT(denuncias.id) as total_denuncias')
        ->join('denuncia_artigos', 'denuncias.id', '=', 'denuncia_artigos.id_denuncia')
        ->join('artigos', 'denuncia_artigos.id_artigo', '=', 'artigos.id')
        ->whereHas('denuncia_artigo', function ($query){
            $query->whereHas('artigo', function ($query){
                $query->whereHas('user', function ($query){
                    $query->whereNull('estado_conta');
                });
            });
        })
        ->where('estado_denuncia', 0)
        ->groupBy('artigos.id', 'denuncias.estado_denuncia')
        ->with('denuncia_artigo.artigo')
        ->orderByDesc('total_denuncias')
        ->paginate(4);

        return view('adm.announcereportview', compact('denuncias'));
    }

    public function listchat(Request $req){
        if (null !== $req->user() && $req->user()->email != 'trocatecaltda@gmail.com') {
            return redirect('/');
        }

        $denuncias = Denuncia::where('estado_denuncia', 0)->whereHas('denuncia_usuario', function ($query) {
            $query->whereHas('user');
        })->with('denuncia_usuario.user')->with('user')->paginate(4);

        return view('adm.chatreportview', compact('denuncias'));
    }

    public function chatreport($id){
        $denuncia = Denuncia::where('id', $id)->with('denuncia_usuario.user')->first();

        return view('adm.chatreport', compact('denuncia'));
    }

    public function alterar_estado($id){
        $denuncia = Denuncia::where('id', $id)->first();

        $denunciaCheck = Denuncia::where('id', $id)->whereHas('denuncia_usuario', function ($query) {
            $query->whereHas('user');
        })->first();

        if(!$denunciaCheck){
            $denuncia = Denuncia::where('id', $id)->whereHas('denuncia_artigo', function ($query) {
                $query->whereHas('artigo');
            })->with('denuncia_artigo.artigo')->first();

            $artigosDenunciado = Denuncia::join('denuncia_artigos', 'denuncias.id', '=', 'denuncia_artigos.id_denuncia')
            ->join('artigos', 'denuncia_artigos.id_artigo', '=', 'artigos.id')
            ->where('denuncia_artigos.id_artigo', $denuncia->denuncia_artigo->id_artigo) 
            ->select('denuncias.*')
            ->get();

            foreach($artigosDenunciado as $denuncia){
                if($denuncia){
                    $denuncia->estado_denuncia = 1;
                    $denuncia->save();
                }
            }

        }else{
            $denuncia->estado_denuncia = 1;

            $denuncia->save();
        }

        return redirect()->route('adm.announces.view');
    }

    public function delete($id, Request $req){
        if (null !== $req->user() && $req->user()->email != 'trocatecaltda@gmail.com') {
            return redirect('/');
        }

        $denuncia = Denuncia::where('id', $id)->with('denuncia_artigo.artigo.user')->first();

        $denuncia->denuncia_artigo->artigo->user->cont_advertencias ++;

        if($denuncia->denuncia_artigo->artigo->user->cont_advertencias > 2){
            $denuncia->denuncia_artigo->artigo->user->estado_conta = "inativado";
        }
        $denuncia->denuncia_artigo->artigo->user->save();

        $denuncia->denuncia_artigo->artigo->delete();

        
        $denunciaCheck = Denuncia::where('id', $id)->whereHas('denuncia_usuario', function ($query) {
            $query->whereHas('user');
        })->first();

        if(!$denunciaCheck){
            $denuncia = Denuncia::where('id', $id)->whereHas('denuncia_artigo', function ($query) {
                $query->whereHas('artigo');
            })->with('denuncia_artigo.artigo')->first();

            $artigosDenunciado = Denuncia::join('denuncia_artigos', 'denuncias.id', '=', 'denuncia_artigos.id_denuncia')
            ->join('artigos', 'denuncia_artigos.id_artigo', '=', 'artigos.id')
            ->where('denuncia_artigos.id_artigo', $denuncia->denuncia_artigo->id_artigo) 
            ->select('denuncias.*')
            ->get();

            foreach($artigosDenunciado as $denuncia){
                if($denuncia){
                    $denuncia->estado_denuncia = 2;
                    $denuncia->save();
                }
            }

        }else{
            $denuncia->estado_denuncia = 2;

            $denuncia->save();
        }
        
        return redirect()->route('adm.announces.view');
    }

    public function inactivate($id){
        $denuncia = Denuncia::where('id', $id)->whereHas('denuncia_usuario', function ($query) {
            $query->whereHas('user');
        })->with('denuncia_usuario.user')->first();

        if($denuncia){
            $usuario = $denuncia->denuncia_usuario->user;
        }else{
            $denuncia = Denuncia::where('id', $id)->whereHas('denuncia_artigo', function ($query) {
                $query->whereHas('artigo');
            })->with('denuncia_artigo.artigo.user')->first();
            $usuario = $denuncia->denuncia_artigo->artigo->user;
        }

        $denunciaCheck = Denuncia::where('id', $id)->whereHas('denuncia_usuario', function ($query) {
            $query->whereHas('user');
        })->first();

        if(!$denunciaCheck){
            $denuncia = Denuncia::where('id', $id)->whereHas('denuncia_artigo', function ($query) {
                $query->whereHas('artigo');
            })->with('denuncia_artigo.artigo')->first();

            $artigosDenunciado = Denuncia::join('denuncia_artigos', 'denuncias.id', '=', 'denuncia_artigos.id_denuncia')
            ->join('artigos', 'denuncia_artigos.id_artigo', '=', 'artigos.id')
            ->where('denuncia_artigos.id_artigo', $denuncia->denuncia_artigo->id_artigo) 
            ->select('denuncias.*')
            ->get();

            foreach($artigosDenunciado as $denuncia){
                if($denuncia){
                    $denuncia->estado_denuncia = 2;
                    $denuncia->save();
                }
            }

        }else{
            $denuncia->estado_denuncia = 2;

            $denuncia->save();
        }
            
        $usuario->estado_conta = "inativado";
        $usuario->save();
        
        return redirect()->route('adm.announces.view');
    }

    public function strike($id, Request $req){
        if (null !== $req->user() && $req->user()->email != 'trocatecaltda@gmail.com') {
            return redirect('/');
        }

        $denuncia = Denuncia::where('id', $id)->whereHas('denuncia_usuario', function ($query) {
            $query->whereHas('user');
        })->with('denuncia_usuario.user')->first();

        if($denuncia){
            $usuario = $denuncia->denuncia_usuario->user;
        }else{
            $denuncia = Denuncia::where('id', $id)->whereHas('denuncia_artigo', function ($query) {
                $query->whereHas('artigo');
            })->with('denuncia_artigo.artigo.user')->first();
            $usuario = $denuncia->denuncia_artigo->artigo->user;

            $denuncia->denuncia_artigo->artigo->status_artigo = 1;
            $denuncia->denuncia_artigo->artigo->save();
        }

        $usuario->cont_advertencias ++;

        if($usuario->cont_advertencias > 2){
            $usuario->estado_conta = "inativado";
        }
        $usuario->save();

        $denunciaCheck = Denuncia::where('id', $id)->whereHas('denuncia_usuario', function ($query) {
            $query->whereHas('user');
        })->first();

        if(!$denunciaCheck){
            $denuncia = Denuncia::where('id', $id)->whereHas('denuncia_artigo', function ($query) {
                $query->whereHas('artigo');
            })->with('denuncia_artigo.artigo')->first();

            $artigosDenunciado = Denuncia::join('denuncia_artigos', 'denuncias.id', '=', 'denuncia_artigos.id_denuncia')
            ->join('artigos', 'denuncia_artigos.id_artigo', '=', 'artigos.id')
            ->where('denuncia_artigos.id_artigo', $denuncia->denuncia_artigo->id_artigo) 
            ->select('denuncias.*')
            ->get();

            foreach($artigosDenunciado as $denuncia){
                if($denuncia){
                    $denuncia->estado_denuncia = 2;
                    $denuncia->save();
                }
            }

        }else{
            $denuncia->estado_denuncia = 2;

            $denuncia->save();
        }
        
        
        return redirect()->route('adm.announces.view');
    }
}
