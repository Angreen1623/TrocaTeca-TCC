<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Artigo;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
        $user->fill($request->validated());
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        if($request->hasFile('imagem_usuario')){
            $imagem = "image/users-img/" . uniqid("", true) . "." . pathinfo($_FILES['imagem_usuario']['name'], PATHINFO_EXTENSION);
            move_uploaded_file($_FILES['imagem_usuario']["tmp_name"], $imagem);
            $user->imagem_usuario =  $imagem;
        }

        $user->save();
        return back()->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    /*inativação da conta do usuário*/
    public function inativate(Request $request)
    {
        $user = $request->user(); // Obtém o usuário autenticado

        if ($user) {
            // Atualiza o estado da conta para 'inativado'
            $user->estado_conta = 'inativado';
            $user->save();

            // Faz o logout do usuário
            Auth::logout();
            // Invalida a sessão
            $request->session()->invalidate();
            // Regenera o token CSRF para a segurança
            $request->session()->regenerateToken();
        }

        // Redireciona para a página de boas-vindas
        return redirect()->to('/welcome');
    }

    /*ver perfil do anunciante*/
    public function viewProfileanun($id)
    {
        // Busca o usuário pelo ID
        $user = User::findOrFail($id);

        // Conta o número de trocas bem-sucedidas

        $trocasBemSucedidas = DB::table('users')
        ->join('propostas', 'users.id', '=', 'propostas.id_usuario_int')
        ->join('acordos', 'propostas.id', '=', 'acordos.id_proposta')
        ->where('acordos.status_acordo', 4)->count();

        $trocasBemSucedidas += DB::table('users')
        ->join('artigos', 'users.id', '=', 'artigos.id_usuario_ofertante')
        ->join('propostas', 'artigos.id', '=', 'propostas.id_artigo')
        ->join('acordos', 'propostas.id', '=', 'acordos.id_proposta')
        ->where('acordos.status_acordo', 4)->count();

        // Busca os artigos do usuário que não têm acordos bem-sucedidos
        $artigos = Artigo::where('id_usuario_ofertante', $id)
            ->whereDoesntHave('proposta.acordos', function ($query) {
                $query->where('status_acordo', 4); // Excluir artigos com acordos bem-sucedidos
            })
            ->with('imagens')
            ->get();

        // Retorna a view com os dados do usuário, seus artigos e trocas bem-sucedidas
        return view('annoaccount', compact('user', 'artigos', 'trocasBemSucedidas'));
    }
}
