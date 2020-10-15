<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dosen()
    {
        return view('index');
    }
    
    public function logout(){
        return view('logout');
    }

    public function mahasiswa()
    {
        return view('mahasiswa/index');
    }
}
