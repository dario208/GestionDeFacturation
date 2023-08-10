<?php

namespace App\Http\Controllers;

use App\Models\Tarif;
use App\Models\Module;
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
        $historiques = Historique::where('module_id', $id)->get(); //j ai ciblé le module
        $heure_effectue=$historiques->sum('total_heure'); //somme des colonnes des totales d'heures

        

        $cout_horaire=(Tarif::find((Module::find($id))->tarif_id))->cout_horaire;//cout horaires du module

        
        $montant_total = $heure_effectue * $cout_horaire; // Calcul du montant total

        
        $heure_globale=(Module::find($id))->heure_globale;//Affichage heure globale

        return view('dashboard.components.module.historiqueModule', [
            'historiques' => $historiques,
            'heure_effectue' => $heure_effectue,
            'heure_globale'=>$heure_globale,
            'cout_horaire'=> $cout_horaire,
            'montant_total'=>$montant_total
        ]);
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {

        return view('dashboard.components.prof.heureProf', [
            'module_id' => $id,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $historique = Historique::create([
            'date' => $request->date,
            'heure_de_debut' => $request->heure_de_debut,
            'heure_de_fin' => $request->heure_de_fin,
            'module_id' => $request->module_id,
        ]);

         // Enregistrement de l'historique pour déclencher l'observateur
            $historique->save();

         // Mettre à jour le solde_totale du professeur associé
         $module = Module::find($request->module_id);
         $prof = $module->prof;
         $modules = $prof->modules;
         $solde_actuelle = $modules->sum('montant_total');

        

     $prof->update(['solde_actuelle' => $solde_actuelle]);
        


        return redirect()->route('historique.liste',["id"=>($request->module_id)]);
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
