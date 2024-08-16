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

        // Busca os artigos do usuário
        $artigos = Artigo::where('id_usuario_ofertante', $id)->with('imagens')->get();

        // Retorna a view com os dados do usuário e seus artigos
        return view('annoaccount', compact('user', 'artigos'));
    }
}
