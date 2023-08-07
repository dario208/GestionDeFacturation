<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function dahboardProf(): View
    {
        return view('dashboard.prof');
    }

    public function dashboardAdmin(): View
    {
        return view('dashboard.admin');
    }

    public function dahsboardComptable(): View
    {
        return view('dashboard.comptable');
    }
}
