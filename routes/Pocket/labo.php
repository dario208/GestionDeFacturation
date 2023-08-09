<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\moduleController;
use App\Http\Controllers\historiqueController;


Route::get('/createHistorique/{id}',[historiqueController::class,'create'])->name('createHistorique');
Route::post('/createHistorique/{id}',[historiqueController::class,'store'])->name('storeHistorique');
Route::get('/indexHistorique',[historiqueController::class,'index'])->name('indexHistorique');