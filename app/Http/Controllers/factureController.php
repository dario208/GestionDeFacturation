<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class factureController extends Controller
{
    public function index()
    {
        return view('dashboard.components.facture.suivie');
    }
    public function create()
    {
        return view('dashboard.components.facture.facturation');
    }
}
