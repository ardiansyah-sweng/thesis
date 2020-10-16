<?php

namespace App\Http\Controllers;

use App\Mail\EmailMahasiswaTerpilih;
use Illuminate\Support\Facades\Mail;
use App\Models\Topik;
use App\Models\TopikTugasAkhir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class TopikController extends Controller
{
    public function index()
    {
        $topik = Topik::orderBy('topik_bidang', 'asc')->get();
        return view('topik', compact('topik'));
    }

    # Query seluruh topik tugas akhir
    public function all()
    {
        $nipy = Session::get('nipy');

        $allTopikTA = DB::select('SELECT topik.id, topik_bidang.topik_bidang, dosen.nama, topik.judul_topik, mhs.nama_mahasiswa, topik.deskripsi, topik.status, topik.nim_terpilih_fk, COUNT(ambil.topik_tugas_akhir_id) AS jumlah_pendaftar
            FROM topik_tugas_akhir topik
            JOIN dosen ON dosen.nipy = topik.nipy_fk_nipy
            LEFT OUTER JOIN mahasiswa mhs ON mhs.nim=topik.nim_terpilih_fk
            JOIN topik_bidang ON topik_bidang.id = topik.topik_bidang_fk_id
            LEFT OUTER JOIN ambil_topik_tugas_akhir ambil ON ambil.topik_tugas_akhir_id = topik.id
            GROUP BY topik.id
            ORDER BY dosen.nipy = ' . $nipy . ' DESC');
        // dd($allTopikTA);
        return view('all-topik')->with("allTopikTA", $allTopikTA);
    }

    # Query detail satu topik tugas akhir berdasarkan ID
    # Query list mahasiswa yang ambil/mendaftar topik tugas akhir tersebut
    public function details($id)
    {
        $detailsTopikTA = DB::select('SELECT topik_bidang.topik_bidang, dosen.nama, dosen.email_dosen, mhs.email_mahasiswa, topik.id, topik.judul_topik, topik.deskripsi, topik.status, mhs.nama_mahasiswa, 
        IF (topik.nim_terpilih_fk = 0, "Belum ada", topik.nim_terpilih_fk) AS mahasiswa_terpilih,
        IF (COUNT(ambil.topik_tugas_akhir_id) = 0, "Belum ada", COUNT(ambil.topik_tugas_akhir_id)) AS jumlah_pendaftar
            FROM topik_tugas_akhir topik
            JOIN dosen ON dosen.nipy = topik.nipy_fk_nipy
            JOIN topik_bidang ON topik_bidang.id = topik.topik_bidang_fk_id
            LEFT OUTER JOIN mahasiswa mhs ON mhs.nim=topik.nim_terpilih_fk
            LEFT OUTER JOIN ambil_topik_tugas_akhir ambil ON ambil.topik_tugas_akhir_id = topik.id
            WHERE topik.id = ' . $id . '
            GROUP BY topik.id');

        $listMahasiswa = DB::select('SELECT mhs.nama_mahasiswa, mhs.nim, mhs.email_mahasiswa, topik.judul_topik
            FROM ambil_topik_tugas_akhir ambil
            JOIN mahasiswa mhs ON mhs.nim=ambil.nim_fk_nim
            JOIN topik_tugas_akhir topik ON topik.id=ambil.topik_tugas_akhir_id
            WHERE topik.id=' . $id);

        return view('details_tugas_akhir', [
            'detailsTopikTA' => $detailsTopikTA,
            'listMahasiswa' => $listMahasiswa
        ]);
    }

    # Menetapkan mahasiswa terpilih
    public function decision(Request $request)
    {
        $STATUS = 1;
        $curr = 'CURRENT_TIMESTAMP';

        if ($request) {
            DB::update('UPDATE topik_tugas_akhir
            SET nim_terpilih_fk = ' . $request->nim . ', 
                status = ' . $STATUS . ',
                updated_at = ' . $curr . ' 
            WHERE id = ' . $request->idTopikTugasAkhir);

            $mailData = DB::select('SELECT mhs.nama_mahasiswa, mhs.nim, mhs.email_mahasiswa, topik.judul_topik, dosen.nama AS nama_dosen, bidang.topik_bidang,
            IF (mhs.nim = '.$request->nim.', "terpilih", "tidak terpilih") AS keputusan 
                FROM ambil_topik_tugas_akhir ambil
                JOIN mahasiswa mhs ON mhs.nim=ambil.nim_fk_nim
                JOIN topik_tugas_akhir topik ON topik.id=ambil.topik_tugas_akhir_id
                JOIN dosen ON dosen.nipy=topik.nipy_fk_nipy
                JOIN topik_bidang bidang ON bidang.id=topik.topik_bidang_fk_id
                WHERE topik.id=' . $request->idTopikTugasAkhir);

            # data untuk kirim email
            foreach ($mailData as $data){
                $mailData['nama_mahasiswa'] = $data->nama_mahasiswa;
                $mailData['nim'] = $data->nim;
                $mailData['title'] = 'Penetapan Topik Tugas Akhir Mahasiswa';
                $mailData['keputusan'] = $data->keputusan;
                $mailData['judul_topik'] = $data->judul_topik;
                $mailData['nama_dosen'] = $data->nama_dosen;
                $mailData['topik_bidang'] = $data->topik_bidang;
                Mail::to($data->email_mahasiswa)->send(new EmailMahasiswaTerpilih($mailData)); // technical debt: nama penerima
            }

            return redirect('/Topik/All')->with('success', 'Berhasil menetapkan mahasiswa terpilih.');
        } else {
            return redirect('/Topik/Details');
        }
    }

    # Menambah topik tugas akhir baru
    public function store(Request $request)
    {
        $request->validate([
            'topik_bidang' => 'required',
            'judul' => 'required|min:5',
            'deskripsi' => 'required|min:5',
        ]);

        if ($request) {
            $store = new TopikTugasAkhir;
            $store->nipy_fk_nipy = Session::get('nipy');
            $store->topik_bidang_fk_id = $request->topik_bidang;
            $store->judul_topik = $request->judul;
            $store->deskripsi = $request->deskripsi;
            $store->nim_terpilih_fk;
            $store->save();

            return redirect('/Topik/All')->with('success', 'Topik tugas akhir berhasil di tambahkan');;
        } else {
            return redirect('/Topik/Add');
        }
    }
}
