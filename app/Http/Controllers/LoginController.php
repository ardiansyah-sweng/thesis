<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

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
            'nipy' => 'required|numeric',
        ]);

        $nipy = $request->nipy;
        $data = Dosen::where('nipy', $nipy)->first();

        if ($data == true) {
            return redirect('Dashboard');
        } else {

            session()->flash('msg', 'NIPY Tidka terdaftar');
            return redirect('/');
        }
    }
}
