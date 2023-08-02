<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Professeur users Route
Route::middleware(['auth', 'user-access:prof'])->group(function () {

    Route::get('/home', [homeController::class, 'index'])->name('home');
});

//Admin users Route
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [homeController::class, 'adminHome'])->name('admin.home');
});

//comptable users Route
Route::middleware(['auth', 'user-access:comptable'])->group(function () {

    Route::get('/comptable/home', [homeController::class, 'comptableHome'])->name('comptable.home');
});

require __DIR__ . '/auth.php';
