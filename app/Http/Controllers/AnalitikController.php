<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AnalitikController extends Controller
{
    ## Analitik
    # status 3 = skripsi, status 2 = metopen
    function analitik()
    {
        $nipy = Session::get('nipy');

        $sqlJumlahBimbinganSkripsiMetopen = DB::select('SELECT COUNT(*) as jumlahBimbinganSkripsiMetopen
            FROM topik_tugas_akhir topik
            JOIN mahasiswa mhs ON mhs.nim = topik.nim_terpilih_fk
            WHERE topik.nipy_fk_nipy = '. $nipy .' AND (mhs.status = 3 OR mhs.status = 2)
        ');
        dd($sqlJumlahBimbinganSkripsiMetopen);
        return view('dashboardDosen', [
            'jumlahBimbinganSkripsiMetopen' => $sqlJumlahBimbinganSkripsiMetopen
        ]);
    }
}
