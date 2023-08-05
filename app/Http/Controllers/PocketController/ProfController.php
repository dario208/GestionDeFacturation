<?php

namespace App\Http\Controllers\PocketController;

use App\Http\Controllers\Controller;
use App\Models\Prof;
use Illuminate\Http\Request;

class ProfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profs=Prof::all();

        return view('listeprof',[
            'profs'=>$profs,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
           $prof=Prof::findOrFail($id);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prof = Prof::findOrFail($id);
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $prof=Prof::findOrFail($id);

        
        // Mettre à jour les informations du professeur directement avec la méthode update
        $prof->update($request->all()) ;

    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prof=Prof::findOrFail($id);

        $prof->delete();
    }
}
