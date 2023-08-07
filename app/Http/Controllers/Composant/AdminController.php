<?php

namespace App\Http\Controllers\composant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tolist()
    {
        return view('dashboard.components.admin.listeprof');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function toregistration()
    {
        return view('dashboard.components.admin.registreProf');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function tohistorique()
    {
        return view('dashboard.components.admin.historique');
    }

    /**
     * Display the specified resource.
     */
    public function tomodule()
    {
        return view('dashboard.components.admin.module');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function toedit()
    {
        return view('dashboard.components.admin.registreModule');
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
