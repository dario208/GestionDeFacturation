<?php

use App\Http\Controllers\PocketController\ProfController;
use Illuminate\Support\Facades\Route;

Route::get('/createProf', [ProfController::class ,'create'])->name('createProf');
Route::get('/listProf', [ProfController::class ,'index'])->name('listProf');
Route::get('/editProf/{id}', [ProfController::class ,'edit'])->name('editProf');
Route::post('/editProf/{id}', [ProfController::class ,'update'])->name('updateProf');
Route::delete('/deleteProf/{id}',[ProfController::class ,'destroy'])->name('deleteProf');