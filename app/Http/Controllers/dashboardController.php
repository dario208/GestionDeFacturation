<?php

namespace App\Http\Controllers;

use App\Models\Prof;
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
        return view('dashboard.admin');
    }

    public function dashboardComptable(): View
    {
        return view('dashboard.comptable');
    }
}
