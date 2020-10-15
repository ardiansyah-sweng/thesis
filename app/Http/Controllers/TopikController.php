<?php

namespace App\Http\Controllers;

use App\Mail\EmailMahasiswaTerpilih;
use App\Mail\ThesisEmail;
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

        $allTopikTA = DB::select('SELECT topik.id, topik_bidang.topik_bidang, dosen.nama, topik.judul_topik, topik.deskripsi, topik.status, topik.nim_terpilih_fk, mhs.nama_mahasiswa, COUNT(ambil.topik_tugas_akhir_id) AS jumlah_pendaftar
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
        $detailsTopikTA = DB::select('SELECT topik_bidang.topik_bidang, dosen.nama, dosen.email_dosen, mhs.email_mahasiswa, topik.id, topik.judul_topik, topik.deskripsi, topik.status, topik.nim_terpilih_fk, mhs.nama_mahasiswa, COUNT(ambil.topik_tugas_akhir_id) AS jumlah_pendaftar
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

            # kirim email ke mahasiswa terpilih
            $mailData = [
                'title' => 'Mahasiswa Terpilih Mengambil Topik Skripsi',
                'nim' => $request->nim,
                'nama_mahasiswa' => $request->namaMahasiswa,
                'nama_dosen' => $request->namaDosen,
                'judul_topik' => $request->judulTopikTA,
                'topik_bidang' => $request->topikBidang,
                'url' => 'https://siatif.uad.ac.id',
                'email_mahasiswa' => $request->emailMahasiswa
            ];
            Mail::send(new EmailMahasiswaTerpilih($mailData));

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
