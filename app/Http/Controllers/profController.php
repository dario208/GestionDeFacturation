<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use Illuminate\View\View;
use Illuminate\Http\Request;



class profController extends Controller
{
    public function index(): View
    {
        $profs = Prof::all();
        return view('dashboard.components.prof.listeProf', [
            'profs' => $profs,
        ]);
    }

    public function create(): View
    {
        return view('dashboard.components.prof.addProf');
    }

    public function show(string $id)
    {
        $prof = Prof::findOrFail($id);

         // Calculer la somme des heures effectuées pour chaque module
    foreach ($prof->modules as $module) {
        $heureEffectueeModule = $module->historiques->sum('total_heure');
        $module->heureEffectuee = $heureEffectueeModule;
    }

         return view('dashboard.components.prof.showProf',[
            'prof'=> $prof,
         ]);
    }

    public function edit(string $id)
    {
        $prof = Prof::findOrFail($id);
        return view('dashboard.components.prof.editProf', [
            'prof' => $prof
        ]);
    }


    public function update(Request $request, string $id)
    {
        $prof = Prof::findOrFail($id);

        $prof->update($request->all());

        return redirect()->route('prof.liste');
    }

    public function destroy(string $id)
    {
        $prof = Prof::findOrFail($id);
        if ($prof) {
            $prof->delete();
        }

        return redirect()->route('prof.liste');
    }
}
