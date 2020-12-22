<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\CovidController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasterbarangController;
use App\Http\Controllers\PenjualanController;


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
    return view('welcome');
});

Route::get('/corona', [CovidController::class, 'chart']);

Route::get('/chart', [ChartController::class, 'index']);

//Penjualan Komputer
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/masterbarang', [MasterbarangController::class, 'index']);
Route::get('/penjualan', [PenjualanController::class, 'index']);