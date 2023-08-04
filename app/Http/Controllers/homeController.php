<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function index(): View
    {
        return view('dashboard.home');
    }

    public function adminHome()
    {
        return view('dashboard.adminHome');
    }

    public function comptableHome()
    {
        return view('dashboard.comptableHome');
    }
}
