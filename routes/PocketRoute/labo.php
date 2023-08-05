<?php

use App\Http\Controllers\PocketController\ProfController;
use Illuminate\Support\Facades\Route;

Route::get('/professeurs', [ProfController::class ,'index']);