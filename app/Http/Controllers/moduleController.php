<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use App\Models\Tarif;
use App\Models\Classe;
use App\Models\Module;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class moduleController extends Controller
{

    public function index()
    {
        $modules = Module::all();

        return view('dashboard.components.module.listeModule', [
            'modules' => $modules,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profs = Prof::all();
        $classes = Classe::all();


        return view('dashboard.components.module.addModule', [
            'profs' => $profs,
            'classes' => $classes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Module::create($request->all());

        return redirect()->route('module.liste');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //   $module = Module::findOrFail($id);

        // return view('dashboard.components.prof.mesModules');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $module = Module::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $module = Module::findOrFail($id);

        $module->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $module = Module::findOrFail($id);

        $module->destroy();
    }


    public function getTarif(Request $request)
    {
        $type = $request->input('type');
        $classe = $request->input('classe');

        // Rechercher le tarif en fonction du type et de la classe
        $tarif = Tarif::where('type', $type)
            ->where('classe_id', $classe)
            ->first();

        // Vérification si un tarif a été trouvé
        if ($tarif) {
            $cout_horaire = $tarif->cout_horaire;
            $tarif_id = $tarif->id; // Récupérer l'ID du coût horaire
        } else {
            $cout_horaire = 0; // une valeur par défaut si aucun tarif n'est trouvé
            $tarif_id = null; // ID du coût horaire non trouvé
        }

        return response()->json([
            'tarif' => $cout_horaire,
            'tarif_id' => $tarif_id, // Inclure l'ID du coût horaire
        ]);
    }

    public function showByProf()
    {
        $user_id = Auth::id();
        $prof = Prof::where('user_id', $user_id)->first();

        $modules = $prof->modules; // Utilisez la relation pour obtenir les modules du professeur

    // Calculons la somme totale des heures effectuées pour tous les modules du professeur
        $sommeHeuresEffectuees = 0;
        foreach ($modules as $module) {
        $heureEffectueeModule = $module->historiques->sum('total_heure');
        $sommeHeuresEffectuees += $heureEffectueeModule;
    }

    return view('dashboard.components.prof.mesModules', [
        'modules' => $modules,
        'sommeHeuresEffectuees' => $sommeHeuresEffectuees, // J Passe la somme à la vue
    ]);

    }
}
