<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TopikController;
use App\Http\Controllers\LoginController;

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

Route::get('/',[DashboardController::class, 'index'])->name('/');
Route::get('/logout',[DashboardController::class, 'logout'])->name('/logout');;
Route::get('/Dashboard', [DashboardController::class, 'index']);

Route::post('/Topik', [TopikController::class, 'store']);
Route::get('/Topik/Add', [TopikController::class, 'index']);
Route::get('/Topik/All', [TopikController::class, 'all']);
Route::get('/Topik/Details/{id}', [TopikController::class, 'details']);
Route::get('/Topik/Ambil', [TopikController::class, 'ambil']);

Route::get('/', [LoginController::class, 'index']);

Route::post('/aksiLogin', [LoginController::class, 'aksiLogin']);

//latihan Ardiansyah
Route::get('/Topik/test', [TopikController::class, 'test']);
