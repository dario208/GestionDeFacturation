<?php

namespace App\Http\Controllers;

use App\Models\Historique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class historiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        $historiques=Historique::where('module_id', $id)->get();
        
        return view('dashboard.components.module.historiqueModule',[
            'historiques'=>$historiques ,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        
        return view('dashboard.components.prof.heureProf',[
            'module_id'=>$id,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        Historique::create([
            'date'=>$request->date,
            'heure_de_debut'=>$request->heure_de_debut,
            'heure_de_fin'=>$request->heure_de_fin,
            'module_id'=>$request->module_id,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
}
