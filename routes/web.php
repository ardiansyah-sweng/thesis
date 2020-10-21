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
Route::get('/', [LoginController::class, 'index']);


// Dashboard dosen
Route::get('/dashboardDosen', [DashboardController::class, 'dosen']);
//Dashboard mahasiswa
Route::get('/dashboardMahasiswa', [DashboardController::class, 'mahasiswa']);


Route::post('/Topik', [TopikController::class, 'store']);
Route::post('/Topik/Decision', [TopikController::class, 'decision']);
Route::get('/Topik/Add', [TopikController::class, 'index']);
Route::get('/Topik/All', [TopikController::class, 'all']);
Route::get('/Topik/Details/{id}', [TopikController::class, 'details']);
Route::get('/Topik/Ambil', [TopikController::class, 'ambil']);




//Route Tampil view login dosen dan mahasiswa
Route::get('/dosen', [LoginController::class, 'dosen']);
Route::get('/mahasiswa', [LoginController::class, 'mahasiswa']);

//Route aksi login
Route::post('/aksiLoginDosen', [LoginController::class, 'aksiLoginDosen']);
Route::post('/aksiLoginMahasiswa', [LoginController::class, 'aksiLoginMahasiswa']);

//latihan Ardiansyah
Route::get('/Topik/test', [TopikController::class, 'test']);

// Route Hanya untuk melihan template email
Route::any('/email-templates', function () {
    // Data yang dikirim berupa array
    $data = [
        'judul' => "Verifikasi Akun", // Judul Header Email
        // Deskripsi untuk pesan yang ingin disampaikan
        'deskripsi' => "Mohon klik tombol dibawah untuk verifikasi alamat email anda. Verifikasi email anda dapat meningkatkan lapisan ekstra keamanan akun yang anda gunakan, Memiliki info yang akurat akan membantu jika Anda memerlukan bantuan.",
        'nama' => "Adhymas Fajar Sudrajad", // Nama Penerima
        'statusButton' => [
            'button' => 1, // apabila button 1 berarti akan muncul button
            'link' => "http://127.0.0.1:8000/email-templates", // link url yang akan dituju ketika button di klik
            'buttonText' => "Verifikasi Email", // text dalam isian button
        ]
    ];
    return view('email.index', $data);
});
