<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request): RedirectResponse
    {
        // Valida os dados de entrada
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Verifica se o usuário está inativado
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        if ($user && $user->estado_conta === 'inativado') {
            throw ValidationException::withMessages([
                'email' => __('A conta está inativada.'),
            ]);
        }

        // Tenta autenticar o usuário
        if (!Auth::attempt($credentials, $request->filled('remember'))) {
            throw ValidationException::withMessages([
                'email' => __('As credenciais fornecidas estão incorretas.'),
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended(route('welcome', absolute: false));
    }


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
