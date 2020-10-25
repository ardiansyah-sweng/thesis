<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TopikController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JadwalController;

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

## Jadwal
Route::get('/Jadwal', [JadwalController::class, 'jadwal'])->name('jadwal');
Route::post('/Jadwal/Details/', [JadwalController::class, 'details']);

Route::post('/Topik', [TopikController::class, 'store']);
Route::post('/Topik/Decision', [TopikController::class, 'decision']);
Route::get('/Topik/Add', [TopikController::class, 'index']);
Route::get('/Topik/All', [TopikController::class, 'all'])->name('allTopikTA');
Route::get('/Topik/All/Mahasiswa', [TopikController::class, 'allTopikTAMahasiswa'])->name('allTopikTAMahasiswa');
Route::get('/Topik/Details/{id}', [TopikController::class, 'details']);

Route::get('/Topik/Ambil/', [TopikController::class, 'daftarDetailTopik'])->name('daftarTopikMahasiswa');
Route::get('/Topik/Ambil/{id}', [TopikController::class, 'daftarDetailTopik'])->name('detailTopik');
Route::post('/Topik/PendaftaranTopik',[TopikController::class, 'saveTopikMahasiswa']);

//Route Tampil view login dosen dan mahasiswa
Route::get('/dosen', [LoginController::class, 'dosen'])->name('dosen');
Route::get('/mahasiswa', [LoginController::class, 'mahasiswa'])->name('mahasiswa');

//Route aksi login
Route::post('/aksiLoginDosen', [LoginController::class, 'aksiLoginDosen']);
Route::post('/aksiLoginMahasiswa', [LoginController::class, 'aksiLoginMahasiswa']);

//Route tampil Update Topik TA 
Route::get('/Topik/updateTopikTA/{id}', [TopikController::class, 'updateTopikTA']);
//Route aksi update Topik TA
Route::patch('/Topik/aksiUpdateTA/{id}', [TopikController::class, 'aksiUpdateTA'])->name('aksiUpdateTA');
