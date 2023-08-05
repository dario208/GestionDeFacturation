<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrationController extends Controller
{
    public function index(){
        return view('dashboard.components.admin.registre');
    }
}
