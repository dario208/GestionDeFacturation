<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\profController;
use App\Http\Controllers\moduleController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\historiqueController;

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

function active($route)
{
    if (is_array($route)) {
        return in_array(Request::path(), $route) ? 'active' : '';
    } else {
        return Request::path() == $route ? 'active' : '';
    }
}

function active_open($openRoutes)
{
    return is_array($openRoutes) && in_array(Request::path(), $openRoutes) ? 'active open' : '';
}


Route::get('/', function () {
    return view('welcome');
});

//Professeur users Route
Route::middleware(['auth', 'user-access:prof'])->group(function () {

    Route::controller(dashboardController::class)->group(function () {
        Route::prefix('dashboardProf')->group(function () {

            Route::get('/', 'dashboardProf')->name('dashboard.Prof');
            Route::get('profil', 'update')->name('dahboard.Prof.Profil');

        });
    });
    Route::controller(historiqueController::class)->group(function () {
        Route::prefix('historique')->group(function () {

            Route::get('/saisie', 'create')->name('heure.saisie');
            

        });
    });
});

//Admin users Route
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/dashboardAdmin', [dashboardController::class, 'dashboardAdmin'])->name('dashboard.Admin');

    // ------------------------ professeur -------------------------------//
    Route::controller(profController::class)->group(function () {
        Route::prefix('prof')->group(function () {

            Route::get('liste', 'index')->name('prof.liste');
            Route::get('add', 'create')->name('prof.add');
            Route::get('show/{id}', 'show')->name('prof.show');
            Route::get('edit/{id}', 'edit')->name('prof.edit');
            Route::post('edit/{id}', 'update')->name('prof.update');
            Route::delete('delete/{id}', 'destroy')->name('prof.delete');
        });
    });

    // ------------------------ Module -------------------------------//
    Route::controller(moduleController::class)->group(function () {
        Route::prefix('module')->group(function () {

            Route::get('liste', 'index')->name('module.liste');
            Route::get('add', 'create')->name('module.add');
            Route::get('historique', 'show')->name('module.historique');
        });
    });
});

//comptable users Route
Route::middleware(['auth', 'user-access:comptable'])->group(function () {

    Route::get('/dashboardComptable', [dashboardController::class, 'dashboardComptable'])->name('dashboard.Comptable');
});


require __DIR__ . '/auth.php';
require __DIR__ . '/Pocket/labo.php';
