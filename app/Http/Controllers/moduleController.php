<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class moduleController extends Controller
{
    public function index(): View
    {
        return view('dashboard.components.module.listeModule');
    }

    public function create(): View
    {
        return view('dashboard.components.module.addModule');
    }

    public function show()
    {
        return view('dashboard.components.module.historiqueModule');
    }
}
