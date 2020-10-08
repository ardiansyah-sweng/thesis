<?php

namespace App\Http\Controllers;

use App\Models\Topik;
use Illuminate\Http\Request;

class TopikController extends Controller
{
    public function index(){
        $topik = Topik::all();
        return view('topik',compact('topik'));
    }

    public function store(Request $request){     
        $request->validate([
            'topik_bidang'=>'required',
            'judul'=>'required|min:5',
            'deskripsi' => 'required|min:5',
        ]);
        
        dd($request);
        //habis ini query ke database
    }
}
