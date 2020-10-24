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
Route::get('/Topik/All', [TopikController::class, 'all'])->name('allTopikTA');
Route::get('/Topik/All/Mahasiswa', [TopikController::class, 'allTopikTAMahasiswa'])->name('allTopikTAMahasiswa');
Route::get('/Topik/Details/{id}', [TopikController::class, 'details']);

Route::get('/Topik/Ambil/', [TopikController::class, 'daftarDetailTopik'])->name('daftarTopikMahasiswa');
Route::get('/Topik/Ambil/{id}', [TopikController::class, 'daftarDetailTopik'])->name('detailTopik');


//Route Tampil view login dosen dan mahasiswa
Route::get('/dosen', [LoginController::class, 'dosen'])->name('dosen');
Route::get('/mahasiswa', [LoginController::class, 'mahasiswa'])->name('mahasiswa');

//Route aksi login
Route::post('/aksiLoginDosen', [LoginController::class, 'aksiLoginDosen']);
Route::post('/aksiLoginMahasiswa', [LoginController::class, 'aksiLoginMahasiswa']);

//latihan Ardiansyah
Route::get('/Topik/test', [TopikController::class, 'test']);

// Route Hanya untuk melihan template email-verifikasi
Route::get('email-verify', function () {
    // Data yang didapatkan berdasakan tabel dosen WHERE nipy=001 menjadi array
    $data = App\Models\Dosen::where('nipy', "001")->get()->toArray()[0];
    // Penentuan Judul Email
    $data['judul'] = "Verifikasi Akun";
    // Penentuan Isi Email
    $data['isiEmail'] = "Mohon klik tombol dibawah untuk verifikasi alamat email anda. Verifikasi email anda dapat meningkatkan lapisan ekstra keamanan akun yang anda gunakan, Memiliki info yang akurat akan membantu jika Anda memerlukan bantuan.";
    // Penentuan Alamat Button yang dituju
    $data['url'] = "#";
    // Penentuan Warna Button, didapat(3) : blue,red,green
    $data['color'] = "blue"; // contoh : blue
    // run
    return new App\Mail\VerifyAccount($data);
});
// Route Hanya untuk melihan template email mahasiswa terpilih
Route::get('email-mhs', function () {
    $data['nama_dosen'] = "Eko Aribowo, S.T., M.Kom.";
    $data['title'] = "Mahasiswa Terpilih Mengambil Topik TA";
    $data['nama_mahasiswa'] = "Anugrah H.";
    $data['nim'] = "1700018000";
    $data['nipy'] = "001";
    $data['keputusan'] = "Mengambil";
    $data['judul_topik'] = "test";
    $data['topik_bidang'] = "Pembangunan Perangkat Lunak";
    return new App\Mail\EmailMahasiswaTerpilih($data);
});
// Route Hanya untuk melihan template email dosen terpilih
Route::get('email-dosen', function () {
    $data['nama_dosen'] = "Eko Aribowo, S.T., M.Kom.";
    $data['title'] = "Dosen Terpilih Mengambil Topik TA";
    $data['nama_mahasiswa'] = "Anugrah H.";
    $data['nim'] = "1700018000";
    $data['nipy'] = "001";
    $data['keputusan'] = "Terpilih";
    $data['judul_topik'] = "test";
    $data['topik_bidang'] = "Pembangunan Perangkat Lunak";
    return new App\Mail\EmailDosenTerpilih($data);
});

//Route tampil Update Topik TA 
Route::get('/Topik/updateTopikTA/{id}', [TopikController::class, 'updateTopikTA']);
//Route aksi update Topik TA
Route::patch('/Topik/aksiUpdateTA/{id}', [TopikController::class, 'aksiUpdateTA'])->name('aksiUpdateTA');
