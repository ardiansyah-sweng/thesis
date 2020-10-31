<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

use Illuminate\Http\Request;

class BimbinganController extends Controller
{
    public function __construct(Mahasiswa $model)
    {
        $this->model = $model;
    }

    # Query seluruh mahasiswa bimbingan
    public function index()
    {
        $nipy = Session::get('nipy');

        return view('bimbinganku', [
            'bimbinganku' => $this->model->getAllMahasiswaBimbingan($nipy)
        ]);
    }
}
