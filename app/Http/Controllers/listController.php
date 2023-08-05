<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listController extends Controller
{
    public function index(){
        return view('dashboard.components.admin.listeprof');
    }
}
