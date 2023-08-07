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

        return view('PocketView.listProf',[
            'profs'=>$profs,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('PocketView.createProf');
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

        return view('PocketView.editProf',[
            'prof'=>$prof,
        ]);
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
        
        $prof = Prof::find($id);
        if ($prof) {
            $prof->delete();
            // Message flash pour indiquer la suppression réussie (facultatif)
            session()->flash('success', 'Professeur supprimé avec succès.');
        }

        // Redirection vers la liste des professeurs
        return redirect()->route('listProf');
    }

    
}
