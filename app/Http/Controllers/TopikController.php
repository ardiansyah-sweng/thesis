<?php

namespace App\Http\Controllers;

use App\Mail\EmailMahasiswaTerpilih;
use Illuminate\Support\Facades\Mail;
use App\Models\Topik;
use App\Models\TopikSkripsi;
use App\Models\Dosen;
use App\Models\AmbilTopikTugasAkhir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class TopikController extends Controller
{
    public $curr = 'CURRENT_TIMESTAMP';

    public function __construct(TopikSkripsi $model)
    {
        $this->model = $model;
    }

    public function addTopikSkripsi()
    {
        $topik = Topik::orderBy('topik_bidang', 'asc')->get();
        return view('topik', compact('topik'));
    }

    /**
     * Menampilkan seluruh topik skripsi
     */
    public function allTopikSkripsi()
    {
        $nipy = Session::get('nipy');
        return view('all-topik', ['allTopikSkripsi' => $this->model->getAllTopikSkripsi()]);
    }

    /**
     * Mengetahui apakah mahasiswa sedang mendaftar suatu topik skripsi atau tidak
     * Return array
     */
    public function isAmbilTopikSkripsi($nim)
    {
        if (empty($this->model->getMahasiswaAmbilTopikSkripsi($nim))) {
            $ambilTopikSkripsi['idTopikSkripsi'] = 0;
            foreach ($this->model->getAllTopikSkripsi() as $value) {
                if ($value->sisaBlockingDay) {
                    $ambilTopikSkripsi['sisaBlockingDay'] = $value->sisaBlockingDay;
                }
            }
        }

        if (!empty($this->model->getMahasiswaAmbilTopikSkripsi($nim))) {
            foreach ($this->model->getMahasiswaAmbilTopikSkripsi($nim) as $value) {
                $ambilTopikSkripsi['idTopikSkripsi'] = $value->idTopikSkripsi;
                $ambilTopikSkripsi['sisaBlockingDay'] = $value->sisaBlockingDay;
            }
        }

        return $ambilTopikSkripsi;
    }


    # Menampilkan seluruh topik skripsi buat mahasiswa
    public function allTopikSkripsiMahasiswa()
    {
        $nim = Session::get('nim');

        return view('mahasiswa/all-topik', [
            'allTopikSkripsiMahasiswa' => $this->model->getAllTopikSkripsi(),
            'isAmbil' => $this->isAmbilTopikSkripsi($nim)
        ]);
    }

    /**
     * Menampilkan detail topik skripsi berdasarkan ID Topik Skripsi
     */

    public function detailTopikSkripsiByID($id, $dosenMahasiswa)
    {
        $nim = Session::get('nim');

        if ($dosenMahasiswa == "dosen" && $this->getRekomendasiDosenPenguji($id) == 0) {
            return view('details_skripsi', [
                'detailsTopikSkripsi' => $this->model->getDetailTopikSkripsiByID($id),
                'listMahasiswa' => $this->model->getAllMahasiswaMendaftarTopikSkripsiByID($id),
                'allTopikSkripsi' => $this->model->getAllTopikSkripsi()
            ]);
        }

        if ($dosenMahasiswa == "dosen" && $this->getRekomendasiDosenPenguji($id) != 0) {
            return view('details_skripsi', [
                'detailsTopikSkripsi' => $this->model->getDetailTopikSkripsiByID($id),
                'listMahasiswa' => $this->model->getAllMahasiswaMendaftarTopikSkripsiByID($id),
                'allTopikSkripsi' => $this->model->getAllTopikSkripsi(),
                'judulSkripsiBimbinganSebelumnya' => $this->getRekomendasiDosenPenguji($id)
            ]);
        }
        
        if ($dosenMahasiswa == "mahasiswa") {
            return view('mahasiswa/pendaftaran-topik', [
                'detailsTopikSkripsi' => $this->model->getDetailTopikSkripsiByID($id),
                'listMahasiswa' => $this->model->getAllMahasiswaMendaftarTopikSkripsiByID($id),
                'allTopikSkripsi' => $this->model->getAllTopikSkripsi(),
                'isAmbil' => $this->isAmbilTopikSkripsi($nim),
                'ruleTopik' => $this->model->ruleAmbilTopik($nim, $id)
            ]);
        }
    }

    /**
     * Membuat array jadi unik, tanpa ada nilai NIDN yang sama
     * Return array [nipy, nidn, cosim, judul skripsi sebelumnya]
     */
    public function membuatNIDNUnik($dataNIDN)
    {
        foreach ($dataNIDN as $subkey => $subval) {
            if ($subval->pembimbing) {
                $nipy = DB::table('dosen')->where('nidn', $subval->pembimbing)->value('nipy');
                $ret[$subkey]['nipy'] = $nipy;
                $ret[$subkey]['cosim'] = $subval->cosim;
                $ret[$subkey]['nidn'] = $subval->pembimbing;
                $ret[$subkey]['judul'] = $subval->judul;
            }
        }
        $unik = array_unique(array_column($ret, 'nidn'));
        return array_intersect_key($ret, $unik);
    }

    /**
     * Insert sebanyak n rekomendasi penguji
     * Return array n rekomendasi penguji
     */
    public function insertRekomendasiPenguji($daftarRekomendasiPenguji)
    {
        foreach ($daftarRekomendasiPenguji as $subkey => $subval) {
            if ($subkey <= config('constants.jumlah_penguji') - 1) {
                $ret[] = $subval;
            }
        }
        return $ret;
    }

    /**
     * Mengambil n terbaik rekomendasi penguji
     */
    public function getRekomendasiDosenPenguji($idTopikSkripsi)
    {
        $data = $this->model->getDetailTopikSkripsiByID($idTopikSkripsi);
        if (empty($data[0]->rekomendasi_penguji)){
            $ret = 0;
        } else {
            foreach ($data as $indeks => $val) {
                $dataDecode = json_decode(json_encode($data[$indeks]));
                $hasil =  json_decode($dataDecode->{'rekomendasi_penguji'});
                $NIDNUnik = $this->membuatNIDNUnik($hasil);
                $ret = $this->insertRekomendasiPenguji($NIDNUnik);
            }
        }
        return $ret;
    }

    # Menetapkan mahasiswa terpilih
    public function decision(Request $request)
    {
        if ($request) {
            $dosenPenguji = $this->getRekomendasiDosenPenguji($request->inputHiddenIDTopikSkripsi);

            DB::table('ujian')->insert(
                ['idTopikSkripsiFK' => $request->inputHiddenIDTopikSkripsi, 'nipyPenguji1' => $dosenPenguji[0]['nipy'], 'nipyPenguji2' => $dosenPenguji[1]['nipy']]
            );

            DB::update('UPDATE topik_tugas_akhir
            SET nim_terpilih_fk = ' . $request->radioNIM . ', 
                status = ' . config('constants.status_topik_skripsi.closed') . ',
                updated_at = CURRENT_TIMESTAMP
            WHERE id = ' . $request->inputHiddenIDTopikSkripsi);

            $mailData = DB::select('SELECT mhs.nama_mahasiswa, mhs.nim, mhs.email_mahasiswa, 
                topik.judul_topik, dosen.nama AS nama_dosen, bidang.topik_bidang,
                IF (mhs.nim = ' . $request->radioNIM . ', "terpilih", "tidak terpilih") AS keputusan 
                FROM ambil_topik_tugas_akhir ambil
                JOIN mahasiswa mhs ON mhs.nim=ambil.nim_fk_nim
                JOIN topik_tugas_akhir topik ON topik.id=ambil.topik_tugas_akhir_id
                JOIN dosen ON dosen.nipy=topik.nipy_fk_nipy
                JOIN topik_bidang bidang ON bidang.id=topik.topik_bidang_fk_id
                WHERE topik.id=' . $request->inputHiddenIDTopikSkripsi);

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
                            SET mhs.status = ' . config('constants.status_mahasiswa.open') . ',
                                mhs.updated_at = ' . $this->curr . ' 
                            WHERE mhs.nim <> ' . $request->radioNIM);
                DB::update('UPDATE mahasiswa mhs 
                            JOIN ambil_topik_tugas_akhir ambil ON ambil.nim_fk_nim=mhs.nim 
                            SET mhs.status = ' . config('constants.status_mahasiswa.metopen') . ',
                                mhs.updated_at = ' . $this->curr . ' 
                            WHERE mhs.nim = ' . $request->radioNIM);

                // hidup matikan ketika hendak dicoba
                //Mail::to($data->email_mahasiswa)->send(new EmailMahasiswaTerpilih($mailData)); // technical debt: 1. nama penerima, 2. gunakan job queue khusus email
            }

            return redirect('/Topik/All')->with('success', 'Berhasil menetapkan mahasiswa terpilih.');
        } else {
            return redirect('/Topik/Details');
        }
    }

    function getNamaDosen($nidn)
    {
        $nama = DB::table('dosen')->where('nidn', $nidn)->value('nama');
        return $nama;
    }

    function getNIDNDosbing()
    {
        return DB::table('dosen')->where('nipy', Session::get('nipy'))->value('nidn');
    }

    /**
     * Memfilter nama rekomendasi tidak sama dengan nama Dosbing
     */
    public function buangNamaDosbing($nidnDosbing, $nidnRekomendasi)
    {
        if ($nidnDosbing != $nidnRekomendasi) {
            return 1;
        }
        if ($nidnDosbing == $nidnRekomendasi) {
            return 0;
        }
    }

    /**
     * Memproses rekomendasi penguji 1 dan 2
     */
    public function rekomendasiPengujiSkripsi($judulTopikSkripsi)
    {
        $nidnDosbing = $this->getNIDNDosbing();

        $client = new \GuzzleHttp\Client();
        $result = $client->post('http://localhost:8800/inverted', [
            'form_params' => [
                'query' => $judulTopikSkripsi,
            ]
        ]);

        $body = json_decode($result->getBody()->getContents(), true);
        unset($body['error']);
        unset($body['message']['timeExecution']);

        foreach ($body as $key => $val) {
            $x[] = json_decode(json_encode($val), true);
        }

        foreach ($x as $x => $y) {
            foreach ($y as $z) {
                rsort($z);
                foreach ($z as $key => $a) {
                    //echo $a['pembimbing'] .' == '. $nidnDosbing.'<br>';
                    if ($a['pembimbing'] != $nidnDosbing) {
                        $rekomendasi[$key]['cosim'] = round($a['cosim'], 3);
                        $rekomendasi[$key]['pembimbing'] = $a['pembimbing'];
                        $rekomendasi[$key]['judul'] = $a['judul'];
                    }
                }
            }
        }
        $data = json_encode($rekomendasi, TRUE);
        return $data;
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
            $store = new TopikSkripsi();
            $store->nipy_fk_nipy = Session::get('nipy');
            $store->topik_bidang_fk_id = $request->topik_bidang;
            $store->judul_topik = $request->judul;
            $store->deskripsi = $request->deskripsi;
            $store->nim_terpilih_fk;
            $store->rekomendasi_penguji = $this->rekomendasiPengujiSkripsi($request->judul);
            $store->save();

            return redirect('/Topik/All')->with('success', 'Topik tugas akhir berhasil di tambahkan');
        } else {
            return redirect('/Topik/Add');
        }
    }

    # function tampil data yang akan di update where data yang di pilih
    # selectOne menambil data 1 array by id
    public function updateTopikTA($id)
    {
        $topik = Topik::orderBy('topik_bidang', 'asc')->get();
        $data = $this->model->getTopikSkripsiByID($id);
        return view('edit_TA', compact('data', 'topik'));
    }

    #Function proses menyimpan data yang telah di edit
    public function aksiUpdateTA(Request $request, $id)
    {
        $request->validate([
            'topik_bidang_fk_id' => 'required',
            'judul_topik' => 'required|min:5',
            'deskripsi' => 'required|min:5',
        ]);

        TopikSkripsi::where('id', $id)->update([
            'topik_bidang_fk_id' => $request->topik_bidang_fk_id,
            'judul_topik'        => $request->judul_topik,
            'deskripsi'          => $request->deskripsi,
            'updated_at' => $this->curr
        ]);
        session()->flash('msg', 'Topik Skripsi berhasil di-update');
        return redirect('/Topik/All');
    }

    # menampilkan detail topik untuk page mendaftar topik buat mahasiswa
    public function daftarDetailTopik($id)
    {
        $nim = Session::get('nim');

        return view('mahasiswa/pendaftaran-topik', [
            'detailTopik' => $this->model->getDetailTopikSkripsiByID($id),
            'listMahasiswa' => $this->model->getAllMahasiswaMendaftarTopikSkripsiByID($id),
            'ruleTopik' => $this->model->ruleAmbilTopik($nim, $id)
        ]);
    }

    # menyimpan topik tugas akhir yang di ambil oleh mahasiswa 
    public function saveTopikMahasiswa(Request $request)
    {
        $request->validate([
            'inputHiddenIDTopikSkripsi' => 'required'
        ]);

        if ($request) {
            $store = new AmbilTopikTugasAkhir;
            $store->nim_fk_nim = Session::get('nim');
            $store->topik_tugas_akhir_id = $request->inputHiddenIDTopikSkripsi;
            $store->blocking_time = config('constants.blocking_time');
            $store->save();

            return redirect('/Topik/All/Mahasiswa')->with('success', 'Selamat, Anda berhasil mendaftar topik tugas akhir ');;
        } else {
            return redirect('/Topik/All/Mahasiswa');
        }
    }
}