<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use App\Models\Module;
use Illuminate\Http\Request;

class factureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profs = Prof::all();


        return view('dashboard.components.facture.suivie', [
            'profs' => $profs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)

    {
        $prof = Prof::find($id);
        $module = Module::where('prof_id', $id)->get();

        return view('dashboard.components.facture.facturation', [
            'prof' => $prof,
            'module' => $module
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function print(string $id)
    {
        $prof = Prof::find($id);
        $module = Module::where('prof_id', $id)->get();

        // Ajoutez la ligne suivante pour exécuter la fonction window.print() après la redirection
        return view('dashboard.components.facture.print', [
            'prof' => $prof,
            'module' => $module
        ])->with('print', true); // Passer une variable "print" à la vue pour déclencher l'impression
    }
}
