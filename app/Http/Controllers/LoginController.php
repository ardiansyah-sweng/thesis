<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    #Menampilkan view Login user
    public function index()
    {
        return view('login');
    }

    #Proses login user
    public function aksiLogin(Request $request)
    {
        $request->validate([
            'nipy' => 'required|numeric|',
        ]);

        $nipy = $request->nipy;
        $data = Dosen::where('nipy', $nipy)->first();

        if ($data) {
            Session::put('nama', $data->nama);
            return redirect('Dashboard');
        } else {
            session()->flash('msg', 'NIPY Tidak Terdaftar');
            return redirect('/');
        }
    }
}
