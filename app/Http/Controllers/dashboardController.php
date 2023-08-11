<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use App\Models\Module;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function dashboardProf(): View
    {
        $user_id = Auth::id();
        $prof = Prof::where('user_id',$user_id)->first();
        return view('dashboard.prof',[
            'prof' => $prof ,
        ]);
    }

    public function dashboardAdmin(): View
    {
        $totalHeures = 0;

        $modules = Module::all();

        $total_modules = Module::count();

        $total_profs = Prof::count();


        foreach ($modules as $module) {
            foreach ($module->historiques as $historique) {
                $totalHeures += $historique->total_heure;
            }
        }
        return view('dashboard.admin',[
            'total_modules'=>$total_modules,
            'total_profs'=>$total_profs,
            'totalHeures' => $totalHeures,
        ]);
    }

    public function dashboardComptable(): View
    {
        return view('dashboard.comptable');
    }
}
