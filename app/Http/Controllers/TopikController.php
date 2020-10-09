<?php

namespace App\Http\Controllers;

use App\Models\Topik;
use App\Models\TopikTugasAkhir;
use Illuminate\Http\Request;

class TopikController extends Controller
{
    public function index(){
       $topik = Topik::orderBy('topik_bidang','asc')->get();
        return view('topik',compact('topik'));
    }

    public function store(Request $request){     
        $request->validate([
            'topik_bidang'=>'required',
            'judul'=>'required|min:5',
            'deskripsi' => 'required|min:5',
        ]);
        
        $store = new TopikTugasAkhir;
        $store->nipy_fk_nipy = "001";
        $store->topik_bidang_fk_id = "2";
        $store->judul_topik = $request->judul;
        $store->deskripsi = $request->deskripsi;
        $store->save();
        
    }
}
