<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\TopikTugasAkhir;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

//implementasi interface
interface LogoutInterface
{
    public function logout_i();
}

class check_nipy implements LogoutInterface{
    public function logout_i(){
        Session::forget('nama');
        Session::forget('nipy');
        Session::forget('avatar');
        Session::flush();
        return redirect('/');
        exit();
    }
}

class check_nim implements LogoutInterface{
    public function logout_i(){
        Session::forget('nama_mahasiswa');
        Session::forget('nim');
        Session::forget('stats');
        Session::flush();
        return redirect('/');
        exit();
    }
}

//check logoutnya
class logout_check{
    public function logout($data){
        switch ($data) {
            case 'nipy':
                return new check_nipy;
            case 'nim':
                return new check_nim;
            default:
                return 0;
        }
    }
}

$nim = Session::get('nim');
$nipy = Session::get('nipy');
if($nim){
    logout_check::logout('nim')->logout_i();
}
if($nipy){
    logout_check::logout('nipy')->logout_i();
}


?>

