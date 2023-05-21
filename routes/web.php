<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AktorController;
use App\Http\Controllers\PeriodeController;

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

Route::get('/login', [AktorController::class,'index'])
->name('login.index');

Route::get('/menuAdmin', [AktorController::class,'menuAdmin'])
->name('menuAdmin.menuAdmin');

Route::get('/konfigurasi', [AktorController::class,'konfigurasi'])
->name('konfigurasi.konfigurasi');

Route::get('/periode/create', [PeriodeController::class,'create'])
->name('periode.create');

Route::post('/periode', [PeriodeController::class,'store'])
->name('periode.store');

Route::get('/periode', [PeriodeController::class,'index'])
->name('periode.index');

