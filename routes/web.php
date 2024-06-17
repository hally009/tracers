<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\AktorController;
use App\Http\Controllers\RespondenController;
use App\Http\Controllers\KuisController;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// routes/web.php

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');


//Route::get('/login', [AdminController::class,'index'])->name('login.index');

Route::get('/menuAdmin', [AdminController::class,'menuAdmin'])
->name('menuAdmin.menuAdmin');

Route::get('/konfigurasi', [AdminController::class,'konfigurasi'])
->name('konfigurasi.konfigurasi');

Route::get('/periode', [PeriodeController::class, 'index'])
->name('periode.index');

Route::post('/periode', [PeriodeController::class, 'store'])
->name('periode.store');

Route::get('/aktor', [AktorController::class, 'index'])
->name('aktor.index');

Route::post('/aktor', [AktorController::class, 'store'])
->name('aktor.store');

Route::get('/responden', [RespondenController::class, 'index'])
->name('responden.index');

Route::post('/responden', [RespondenController::class, 'store'])
->name('responden.store');

Route::get('/kuis', [KuisController::class, 'index'])
->name('kuis.index');
