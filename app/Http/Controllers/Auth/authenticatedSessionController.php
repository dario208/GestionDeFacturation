<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class authenticatedSessionController extends Controller
{
    public function create(): View
    {
        return view('auth.login');
    }

    public function store(Request $request): RedirectResponse
    {

        // Valider les entrées utilisateur
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);

        // Tentative d'authentification de l'utilisateur
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            // L'authentification est réussie, rediriger vers la page d'accueil
            if (auth()->user()->type == 'admin') {
                return redirect()->route('admin.home');
            } else if (auth()->user()->type == 'comptable') {
                return redirect()->route('comptable.home');
            } else {
                return redirect('/home');
            }
        } else {
            return redirect()->route('login')->with('error', 'Email-Adrress and  Password are  wrong');
        }
        // Plus de sécurité : chaque fois qu'un utilisateur se connecte, une nouvelle session avec un nouvel ID de session est créée.
        $request->session()->regenerate();

        // L'authentification a échoué, rediriger avec un message d'erreur
        return back()->with('error', 'Email or Password invalid');
    }

    public function destroy(Request $request): RedirectResponse
    {
        // Déconnexion de l'utilisateur de la garde "web"
        Auth::guard('web')->logout();

        // Invalidation de la session pour une sécurité supplémentaire (prévention des attaques de fixation de session)
        $request->session()->invalidate();

        // Régénération du jeton CSRF pour rendre l'ancien jeton obsolète (renforcement de la sécurité)
        $request->session()->regenerateToken();

        // Redirection vers la page d'accueil après déconnexion
        return redirect('/');
    }
}
