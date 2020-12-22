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
        //cek apabila masih login
        //maka redirect ke dashboard
        $check_login = auth_log();
        if($check_login == "nim"){
            return redirect('dashboardMahasiswa');
        }
        if($check_login == "nipy"){
            return redirect('dashboardDosen');
        }
        //Jika tidak login maka kembali ke tempat login
        if($check_login == null){
            return view('level_user');
        }
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
        
        //Bisa juga Dosen::test() tapi fungsi model harus static
        $model_new = new Dosen();
        $model = $model_new->loginFunctionDosen($nipy);
        
        echo "ajshdwd";
        if($model[2] === true){
            Session::put('nama', $model[0]);
            Session::put('nipy', $model[1]);
            Session::put('avatar', $model[3]);
            Session::put('stats', 'verified');
            return redirect('dashboardDosen');
        }
        if($model[2] === false){
            //karena nanti akan susah kalau setiap mahasiswa daftar di DB nya
            //Jadi diperbolehkan saja loginnya dengan tambah unverified
            //session()->flash('msg', 'NIM Tidak Terdaftar');
            Session::put('nama', $model[0]);
            Session::put('nipy', $model[1]);
            Session::put('avatar', $model[3]);
            Session::put('stats', 'unverified');
            return redirect('dashboardDosen');
        }
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
        
        //flush semua session, harus kek gini 1 1
        if($nipy == true){
            Session::forget('nama');
            Session::forget('nipy');
            Session::forget('avatar');
            Session::flush();
            return redirect('/');
            exit();
        }
        if($nim == true){
            Session::forget('nama_mahasiswa');
            Session::forget('nim');
            Session::forget('stats');
            Session::flush();
            return redirect('/');
            exit();
        }
    }
}
