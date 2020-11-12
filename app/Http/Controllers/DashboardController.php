<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function __construct(Mahasiswa $model)
    {
        $this->model = $model;
    }

    # Dashboard untuk Dosen
    public function dosen()
    {
        $nipy = Session::get('nipy');

        $persentaseTepatWaktu = $this->model->persentaseBimbinganTepatWaktu($nipy) * 100;

        return view('index', [
            'jumlahBimbinganSkripsiMetopen' => $this->model->getJumlahBimbinganAktif($nipy),
            'rerataLamaSkripsi' => $this->model->rerataLamaSkripsi($nipy),
            'jumlahBimbinganSepanjangMasa' => $this->model->getJumlahAllBimbingan($nipy),
            'persentaseBimbinganTepatWaktu' => $persentaseTepatWaktu
        ]);
    }

    # Dashboard untuk Dosen
    public function mahasiswa()
    {
        return view('mahasiswa/index');
    }
}
