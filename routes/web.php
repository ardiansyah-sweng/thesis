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
//Route Index sistem
Route::get('/', [LoginController::class, 'index'])->name('index');;

//CATATAN : ROURTE HARUS PUNYA NAMA BIAR BISA REDIRECT TAMBAHKAN DI AKHIR cnth : ... ->name('dashboardDosen');
// Dashboard dosen
Route::get('/dashboardDosen', [DashboardController::class, 'dosen'])->name('dashboardDosen');
//Dashboard mahasiswa
Route::get('/dashboardMahasiswa', [DashboardController::class, 'mahasiswa'])->name('dashboardMahasiswa');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::post('/Topik', [TopikController::class, 'store']);
Route::post('/Topik/Decision', [TopikController::class, 'decision']);
Route::get('/Topik/Add', [TopikController::class, 'index']);
Route::get('/Topik/All', [TopikController::class, 'all']);
Route::get('/Topik/Details/{id}', [TopikController::class, 'details']);
Route::get('/Topik/Ambil', [TopikController::class, 'ambil']);




//Route Tampil view login dosen dan mahasiswa
Route::get('/dosen', [LoginController::class, 'dosen'])->name('dosen');
Route::get('/mahasiswa', [LoginController::class, 'mahasiswa'])->name('mahasiswa');

//Route aksi login
Route::post('/aksiLoginDosen', [LoginController::class, 'aksiLoginDosen']);
Route::post('/aksiLoginMahasiswa', [LoginController::class, 'aksiLoginMahasiswa']);

//latihan Ardiansyah
Route::get('/Topik/test', [TopikController::class, 'test']);
