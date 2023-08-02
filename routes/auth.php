<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\registeredUserController;
use App\Http\Controllers\Auth\authenticatedSessionController;




Route::middleware('guest')->group(function () {

    Route::controller(registeredUserController::class)->group(function () {
        Route::get('register', 'create')->name('register');
        Route::post('register', 'store');
    });

    Route::controller(authenticatedSessionController::class)->group(function () {
        Route::get('login',  'create')->name('login');
        Route::post('login', 'store');
    });
});

Route::middleware('auth')->group(function () {

    Route::controller(authenticatedSessionController::class)->group(function () {
        Route::delete('logout',  'destroy')->name('logout');
    });
});

