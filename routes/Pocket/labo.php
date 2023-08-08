<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\moduleController;


Route::get('/createModule',[moduleController::class,'create'])->name('create.module');
Route::post('/createModule',[moduleController::class,'store'])->name('store.module');
Route::get('/get-tarif', [moduleController::class,'getTarif']);