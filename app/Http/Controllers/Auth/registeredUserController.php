<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Prof;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class registeredUserController extends Controller
{
    public function create(): View
    {


        return view('dashboard.components.prof.addProf');
    }


    public function store(Request $request): RedirectResponse
    {
        // Valider les entrées utilisateur
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:' . User::class],
            'password' => ['required', 'min:8']
        ]);

        // Créez l'utilisateur en utilisant create()
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

         $user_id = $user->id;


         Prof::create([
             'nom' => $request->nom,
             'prenom' => $request->prenom,
             'telephone' => $request->telephone,
             'user_id' => $user_id,
         ]);

        // Rediriger avec un message de succès
        return redirect()->route('prof.liste');
    }
}
