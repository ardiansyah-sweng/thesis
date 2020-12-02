<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\TopikTugasAkhir;
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
            Session::put('avatar', $data->avatar);

            return redirect('dashboardDosen');
        } else {
            session()->flash('msg', 'NIPY Tidak Terdaftar');
            return redirect('dosen');
        }
        
//        $request->validate([
//            'nipy' => 'required|numeric|',
//        ]);
//
//        $nipy = $request->nipy;
//        
//        //Bisa juga Dosen::test() tapi fungsi model harus static
//        $model_new = new Dosen();
//        $model = $model_new->loginFunctionDosen($nim);
//        
//        if($model[2] === true){
//            Session::put('nama', $model[0]);
//            Session::put('nipy', $model[1]);
//            Session::put('avatar', $model[3]);
//            Session::put('stats', 'verified');
//            return redirect('dashboardDosen');
//        }
//        if($model[2] === false){
//            //karena nanti akan susah kalau setiap mahasiswa daftar di DB nya
//            //Jadi diperbolehkan saja loginnya dengan tambah unverified
//            //session()->flash('msg', 'NIM Tidak Terdaftar');
//            Session::put('nama', $model[0]);
//            Session::put('nipy', $model[1]);
//            Session::put('avatar', $model[3]);
//            Session::put('stats', 'unverified');
//            return redirect('dosen');
//        }
    }


    //proses login mahasiswa
    public function aksiLoginMahasiswa(Request $request)
    {
        $request->validate([
            'nim' => 'required|numeric|',
        ]);

        $nim = $request->nim;
        
        //Bisa juga Mahasiswa::test() tapi fungsi model harus static
        $model_new = new Mahasiswa();
        $model = $model_new->loginFunctionMhs($nim);
        
        if($model[2] === true){
            Session::put('nama_mahasiswa', $model[0]);
            Session::put('nim', $model[1]);
            Session::put('stats', 'verified');
            return redirect('dashboardMahasiswa');
        }
        if($model[2] === false){
            //karena nanti akan susah kalau setiap mahasiswa daftar di DB nya
            //Jadi diperbolehkan saja loginnya dengan tambah unverified
            //session()->flash('msg', 'NIM Tidak Terdaftar');
            Session::put('nama_mahasiswa', $model[0]);
            Session::put('nim', $model[1]);
            Session::put('stats', 'unverified');
            return redirect('dashboardMahasiswa');
        }
    }
    
    public function logout(){
        $nim = Session::get('nim');
        $nipy = Session::get('nipy');
        if($nipy == true){
            echo "Kenapa Bisa masuk kalau belum login ? hush";
            ob_start();
            session_start();
            unset ($_SESSION['nama']);
            unset ($_SESSION['nipy']);
            unset ($_SESSION['avatar']);
            session_destroy();
            return redirect('/');
            exit();
        }
        if($nim == true){
            ob_start();
            session_start();
            unset ($_SESSION['nama_mahasiswa']);
            unset ($_SESSION['nim']);
            unset ($_SESSION['stats']);
            session_destroy();
            return redirect('/');
            exit();
        }
    }
}
