<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    #Menampilkan view Login user
    public function index()
    {
        return view('level_user');
    }

    public function dosen()
    {
        return view('login');
    }

    public function mahasiswa()
    {
        return view('mahasiswa/login');
    }

    #Proses login dosen
    public function aksiLoginDosen(Request $request)
    {
        $request->validate([
            'nipy' => 'required|numeric|',
        ]);

        $nipy = $request->nipy;
        $data = Dosen::where('nipy', $nipy)->first();

        if ($data) {
            Session::put('nama', $data->nama);
            Session::put('nipy', $data->nipy);
            return redirect('dashboardDosen');
        } else {
            session()->flash('msg', 'NIPY Tidak Terdaftar');
            return redirect('dosen');
        }
    }


    //proses login mahasiswa
    public function aksiLoginMahasiswa(Request $request)
    {
        $request->validate([
            'nim' => 'required|numeric|',
        ]);

        $nim = $request->nim;
        $data = Mahasiswa::where('nim', $nim)->first();

        if ($data) {
            Session::put('nama_mahasiswa', $data->nama_mahasiswa);
            Session::put('nim', $data->nim);
            return redirect('dashboardMahasiswa');
        } else {
            session()->flash('msg', 'NIM Tidak Terdaftar');
            return redirect('mahasiswa');
        }
    }
    
    public function logout(){
        $nim = Session::get('nim');
        if($nim){
            ob_start();
            session_start();
            unset ($_SESSION['nama_mahasiswa']);
            unset ($_SESSION['nim']);
            session_destroy();
            return redirect('/');
            exit();
        } else {
            ob_start();
            session_start();
            unset ($_SESSION['nama']);
            unset ($_SESSION['nipy']);
            session_destroy();
            return redirect('/');
            exit();
        }

    }
}
