<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use App\Models\Tarif;
use App\Models\Classe;
use App\Models\Module;
use Illuminate\Http\Request;

class moduleController extends Controller
{
  /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modules=Module::all() ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profs=Prof::all();
        $classes=Classe::all();

        return view('Pocket.createModule',[
            'profs'=>$profs,
            'classes'=>$classes
        ]);
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Module::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $module=Module::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $module=Module::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $module=Module::findOrFail($id);
        
        $module->update($request->all());

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $module=Module::findOrFail($id);

        $module->destroy();
    }



    public function getTarif(Request $request)
{
    $type = $request->input('type');
    $classe = $request->input('classe');
    
    //Je dois rechercher le tarif_horaire en fonction du type et de la classe
    $tarif = Tarif::where('type', $type)
    ->whereHas('classe', function ($query) use ($classe) {
        $query->where('niveau', $classe);
    })
    ->first();
    

    // Vérification  si un tarif a été trouvé
    if ($tarif) {
        $cout_horaire = $tarif->cout_horaire;
    } else {
        $cout_horaire = 0; //  une valeur par défaut si aucun tarif n'est trouvé
    }
    
    return response()->json(['tarif' => $cout_horaire]);

}
}
