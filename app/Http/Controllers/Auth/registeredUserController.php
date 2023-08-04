<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class registeredUserController extends Controller
{
    public function create(): View
    {
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        return view('Auth.register');
    }


    public function store(Request $request): RedirectResponse
    {
        // Valider les entrées utilisateur
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:' . User::class],
            'password' => ['required', 'min:8']
        ]);

        // Créer un nouvel utilisateur
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        // Enregistrer l'utilisateur dans la base de données
        $user->save();

        // Rediriger avec un message de succès
        return back()->with('success', 'Register successfully');
    }
}
