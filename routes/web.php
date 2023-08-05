<?php


use App\Http\Controllers\dashboardController;
use App\Http\Controllers\listController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------    
 | Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| hiassa fgn anao , entre temps ny zou? 
Guzzle Http
*/

Route::get('/', function () {
    return view('welcome');
});

//Professeur users Route
Route::middleware(['auth', 'user-access:prof'])->group(function () {

    Route::get('/dahboardProf', [dashboardController::class, 'dahboardProf'])->name('dahboard.Prof');
});

//Admin users Route
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/dashboardAdmin', [dashboardController::class, 'dashboardAdmin'])->name('dashboard.Admin');
    Route::get('/list', [listController::class, 'index'])->name('liste');
    Route::get('/registre', [registrationController::class, 'index'])->name('registration');
    
});

//comptable users Route
Route::middleware(['auth', 'user-access:comptable'])->group(function () {

    Route::get('/dahsboardComptable', [dashboardController::class, 'dahsboardComptable'])->name('dahsboard.Comptable');


});


require __DIR__ . '/auth.php';
