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
    public $curr = 'CURRENT_TIMESTAMP';

    public function index()
    {
        $topik = Topik::orderBy('topik_bidang', 'asc')->get();
        return view('topik', compact('topik'));
    }

    # Query seluruh topik tugas akhir
    public function all()
    {
        $nipy = Session::get('nipy');

        $allTopikTA = DB::select('SELECT dosen.nipy, topik.id, topik_bidang.topik_bidang, dosen.nama, topik.judul_topik, mhs.nama_mahasiswa, topik.deskripsi, topik.status, topik.nim_terpilih_fk, COUNT(ambil.topik_tugas_akhir_id) AS jumlah_pendaftar
            FROM topik_tugas_akhir topik
            JOIN dosen ON dosen.nipy = topik.nipy_fk_nipy
            LEFT OUTER JOIN mahasiswa mhs ON mhs.nim=topik.nim_terpilih_fk
            JOIN topik_bidang ON topik_bidang.id = topik.topik_bidang_fk_id
            LEFT OUTER JOIN ambil_topik_tugas_akhir ambil ON ambil.topik_tugas_akhir_id = topik.id
            GROUP BY topik.id
            ORDER BY dosen.nipy = ' . $nipy . ' DESC');

        return view('all-topik', [
            'allTopikTA' => $allTopikTA
        ]);
    }

    # Query seluruh topik untuk mahasiswa
    public function allTopikTAMahasiswa()
    {
        $nim = Session::get('nim');

        $allTopikTAMahasiswa = DB::select('SELECT dosen.nipy, topik.id, topik_bidang.topik_bidang, dosen.nama, topik.judul_topik, mhs.nama_mahasiswa, ambil.nim_fk_nim, topik.deskripsi, topik.status, topik.nim_terpilih_fk, COUNT(ambil.topik_tugas_akhir_id) AS jumlah_pendaftar
            FROM topik_tugas_akhir topik
            JOIN dosen ON dosen.nipy = topik.nipy_fk_nipy
            LEFT OUTER JOIN mahasiswa mhs ON mhs.nim=topik.nim_terpilih_fk
            JOIN topik_bidang ON topik_bidang.id = topik.topik_bidang_fk_id
            LEFT OUTER JOIN ambil_topik_tugas_akhir ambil ON ambil.topik_tugas_akhir_id = topik.id
            GROUP BY topik.id
            ORDER BY topik.updated_at');

        $isAmbil = DB::select('SELECT ambil.nim_fk_nim 
            FROM ambil_topik_tugas_akhir ambil
            WHERE ambil.nim_fk_nim = ' . $nim);

        return view('mahasiswa/all-topik', [
            'allTopikTAMahasiswa' => $allTopikTAMahasiswa,
            'isAmbil' => $isAmbil
        ]);
    }

    # Query detail satu topik tugas akhir berdasarkan ID
    # Query list mahasiswa yang ambil/mendaftar topik tugas akhir tersebut
    public function details($id)
    {
        $detailsTopikTA = DB::select('SELECT topik_bidang.topik_bidang, dosen.nama, dosen.email_dosen, 
            mhs.email_mahasiswa, topik.id, topik.judul_topik, topik.deskripsi, topik.status, mhs.nama_mahasiswa, 
            IF (topik.nim_terpilih_fk = 0, "Belum ada", mhs.nama_mahasiswa) AS mahasiswa_terpilih,
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
        $STATUS_TUGAS_AKHIR = 1; // 0 = open, 1 = closed
        $STATUS_MAHASISWA_OPEN = 0;  // 0 = open, 1 = blocked, 2 = metopen, 3 = skripsi, 4 = lulus
        $STATUS_MAHASISWA_METOPEN = 2;

        if ($request) {
            DB::update('UPDATE topik_tugas_akhir
            SET nim_terpilih_fk = ' . $request->nim . ', 
                status = ' . $STATUS_TUGAS_AKHIR . ',
                updated_at = ' . $this->curr . ' 
            WHERE id = ' . $request->idTopikTugasAkhir);

            $mailData = DB::select('SELECT mhs.nama_mahasiswa, mhs.nim, mhs.email_mahasiswa, 
                topik.judul_topik, dosen.nama AS nama_dosen, bidang.topik_bidang,
                IF (mhs.nim = ' . $request->nim . ', "terpilih", "tidak terpilih") AS keputusan 
                FROM ambil_topik_tugas_akhir ambil
                JOIN mahasiswa mhs ON mhs.nim=ambil.nim_fk_nim
                JOIN topik_tugas_akhir topik ON topik.id=ambil.topik_tugas_akhir_id
                JOIN dosen ON dosen.nipy=topik.nipy_fk_nipy
                JOIN topik_bidang bidang ON bidang.id=topik.topik_bidang_fk_id
                WHERE topik.id=' . $request->idTopikTugasAkhir);

            # data untuk kirim email
            foreach ($mailData as $data) {
                $mailData['nama_mahasiswa'] = $data->nama_mahasiswa;
                $mailData['nim'] = $data->nim;
                $mailData['title'] = 'Penetapan Topik Tugas Akhir Mahasiswa';
                $mailData['keputusan'] = $data->keputusan;
                $mailData['judul_topik'] = $data->judul_topik;
                $mailData['nama_dosen'] = $data->nama_dosen;
                $mailData['topik_bidang'] = $data->topik_bidang;

                DB::update('UPDATE mahasiswa mhs 
                            JOIN ambil_topik_tugas_akhir ambil ON ambil.nim_fk_nim=mhs.nim 
                            SET mhs.status = ' . $STATUS_MAHASISWA_OPEN . ',
                                mhs.updated_at = ' . $this->curr . ' 
                            WHERE mhs.nim <> ' . $request->nim);
                DB::update('UPDATE mahasiswa mhs 
                            JOIN ambil_topik_tugas_akhir ambil ON ambil.nim_fk_nim=mhs.nim 
                            SET mhs.status = ' . $STATUS_MAHASISWA_METOPEN . ',
                                mhs.updated_at = ' . $this->curr . ' 
                            WHERE mhs.nim = ' . $request->nim);

                Mail::to($data->email_mahasiswa)->send(new EmailMahasiswaTerpilih($mailData)); // technical debt: 1. nama penerima, 2. gunakan job queue khusus email
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

    #function tampil data yang akan di update where data yang di pilih
    #selectOne menambil data 1 array by id
    public function updateTopikTA($id)
    {
        $topik = Topik::orderBy('topik_bidang', 'asc')->get();

        $data = DB::selectOne('SELECT topik_bidang.topik_bidang , topik_tugas_akhir.judul_topik , topik_tugas_akhir.deskripsi ,
        topik_tugas_akhir.topik_bidang_fk_id,topik_tugas_akhir.id 
        FROM topik_bidang JOIN topik_tugas_akhir
        ON topik_bidang.id = topik_tugas_akhir.topik_bidang_fk_id 
        where topik_tugas_akhir.id =' . $id);

        return view('edit_TA', compact('data', 'topik'));
        // dd($data);
    }

    #Function proses menyimpan data yang telah di edit
    public function aksiUpdateTA(Request $request, $id)
    {
        $request->validate([
            'topik_bidang_fk_id' => 'required',
            'judul_topik' => 'required|min:5',
            'deskripsi' => 'required|min:5',
        ]);

        TopikTugasAkhir::where('id', $id)->update([
            'topik_bidang_fk_id' => $request->topik_bidang_fk_id,
            'judul_topik'        => $request->judul_topik,
            'deskripsi'          => $request->deskripsi,
            'updated_at' => $this->curr
        ]);
        session()->flash('msg', 'Topik TA berhasil di update');
        return redirect('/Topik/All');
    }

    # menampilkan detail topik untuk page mendaftar topik buat mahasiswa
    public function daftarDetailTopik($id)
    {
        $nim = Session::get('nim');
        $detailTopik = DB::select('SELECT topik_bidang.topik_bidang, dosen.nama, 
            topik.id, topik.judul_topik, topik.deskripsi
            FROM topik_tugas_akhir topik
            JOIN dosen ON dosen.nipy = topik.nipy_fk_nipy
            JOIN topik_bidang ON topik_bidang.id = topik.topik_bidang_fk_id
            LEFT OUTER JOIN mahasiswa mhs ON mhs.nim=topik.nim_terpilih_fk
            LEFT OUTER JOIN ambil_topik_tugas_akhir ambil ON ambil.topik_tugas_akhir_id = topik.id
            WHERE topik.id = ' . $id . '
            GROUP BY topik.id');

        $listMahasiswaByTopik = DB::select('SELECT mhs.nama_mahasiswa, mhs.nim, mhs.email_mahasiswa, topik.judul_topik
            FROM ambil_topik_tugas_akhir ambil
            JOIN mahasiswa mhs ON mhs.nim=ambil.nim_fk_nim
            JOIN topik_tugas_akhir topik ON topik.id=ambil.topik_tugas_akhir_id
            WHERE topik.id=' . $id);

        $ruleAmbilTopik = DB::select('SELECT mhs.nama_mahasiswa, mhs.nim, mhs.email_mahasiswa, topik.judul_topik, COUNT(ambil.topik_tugas_akhir_id) as jumlah_topik,
            (SELECT DATEDIFF(CURRENT_DATE(), created_at) AS DateDiff from ambil_topik_tugas_akhir WHERE nim_fk_nim = ' . $nim . ' ORDER by created_at DESC LIMIT 1) as masa_blocking
            FROM ambil_topik_tugas_akhir ambil
            JOIN mahasiswa mhs ON mhs.nim=ambil.nim_fk_nim
            JOIN topik_tugas_akhir topik ON topik.id=ambil.topik_tugas_akhir_id
            WHERE mhs.nim=' . $nim . ' AND ambil.topik_tugas_akhir_id =' . $id);

        return view('mahasiswa/pendaftaran-topik', [
            'detailTopik' => $detailTopik,
            'listMahasiswa' => $listMahasiswaByTopik,
            'ruleTopik' => $ruleAmbilTopik
        ]);
    }
}
