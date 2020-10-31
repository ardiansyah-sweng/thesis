<?php
//date_default_timezone_set('Asia/Jakarta');

namespace App\Http\Controllers;

use App\Models\AmbilTopikTugasAkhir;
use App\Models\TopikTugasAkhir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;

class JadwalController extends Controller
{
    public $AWAL_JAM_KERJA = '07:00:00';
    public $AKHIR_JAM_KERJA = '17:00:00';
    public $LAMA_SIDANG = 7200; //detik
    public $curr = 'CURRENT_TIMESTAMP';

    /**
     * Merekomendasikan jadwal yang tersedia
     * Parameter: inputan tanggal, id_dosen1, id_dosen2, id_dosen3
     * Return: array string jam sesuai tanggal yang dipilih
     */
    public function jadwal()
    {
        return view('jadwal', [
            //'jadwal' => $jadwal
        ]);
    }

    function getNamaHari($tanggal)
    {
        $timestamp = strtotime($tanggal);
        return date('D', $timestamp);
    }

    function getAngkaBulan($tanggal)
    {
        $timestamp = strtotime($tanggal);
        return date('m', $timestamp);
    }

    function getTahun($tanggal)
    {
        $timestamp = strtotime($tanggal);
        return date('Y', $timestamp);
    }

    function getJumlahHariDalamSatuBulan($tanggal)
    {
        return cal_days_in_month(CAL_GREGORIAN, $this->getAngkaBulan($tanggal), $this->getTahun($tanggal));
    }

    function getAllJadwal($tanggal, $nipy1, $nipy2, $nipy3)
    {
        $hasilJadwal = DB::select('SELECT nipy_fk, mulai, selesai 
                FROM jadwal 
                WHERE mulai LIKE "' . $tanggal . '%"
                    AND (nipy_fk = ' . $nipy1 . ' OR nipy_fk = ' . $nipy2 . ' OR nipy_fk = ' . $nipy3 . ')
                ORDER BY TIME_FORMAT(mulai, "%H-%i")');

        if (empty($hasilJadwal)) {
            return "fullday";
        }
        if (!empty($hasilJadwal)) {
            foreach ($hasilJadwal as $key => $val) {
                $jadwal[] = json_decode(json_encode($val), true);
            }
            return $jadwal;
        }
    }

    function awalAkhirJamKerja($tanggalDalamString, $awalAkhir)
    {
        if ($awalAkhir == 'awal') {
            return strtotime($tanggalDalamString . ' ' . $this->AWAL_JAM_KERJA);
        }
        if ($awalAkhir == 'akhir') {
            return strtotime($tanggalDalamString . ' ' . $this->AKHIR_JAM_KERJA);
        }
    }

    function selisihFullDay($tanggal)
    {
        return strtotime($tanggal . ' ' . $this->AKHIR_JAM_KERJA) - strtotime($tanggal . ' ' . $this->AWAL_JAM_KERJA);
    }

    function cariSlotKosong($allJadwal, $tanggal)
    {
        if ($allJadwal == "fullday") {
            $ret[0]['selisih'] = $this->selisihFullDay($tanggal);
            $ret[0]['mulai'] = $tanggal . ' ' . $this->AWAL_JAM_KERJA;
        } else {
            //print_r($allJadwal);
            //echo '<p>';
            $awalJadwal = current($allJadwal);
            $akhirJadwal = end($allJadwal);
            $awalJadwal = $awalJadwal['mulai'];
            $akhirJadwal = $akhirJadwal['selesai'];
            $awalJamKerjaInteger = $this->awalAkhirJamKerja($tanggal, "awal");
            $akhirJamKerjaInteger =  $this->awalAkhirJamKerja($tanggal, "akhir");

            //selisih awal jam kerja
            $awal = strtotime($awalJadwal) - $awalJamKerjaInteger;
            $akhir = $akhirJamKerjaInteger - strtotime($akhirJadwal);

            if ($this->LAMA_SIDANG <= $awal) {
                $ret[0]['selisih'] = $awal;
                $ret[0]['mulai'] = $tanggal . ' ' . $this->AWAL_JAM_KERJA;
            }
            //echo '<p>';

            for ($i = 0; $i <= count($allJadwal) - 2; $i++) {
                $selisih = strtotime($allJadwal[$i + 1]['mulai']) - strtotime($allJadwal[$i]['selesai']);
                if ($this->LAMA_SIDANG <= $selisih) {
                    $ret[$i + 1]['selisih'] = $selisih;
                    $ret[$i + 1]['mulai'] = $allJadwal[$i]['selesai'];
                }
            }
            $jum = count($allJadwal);
            $ret[$jum]['selisih'] = $akhir;
            $ret[$jum]['mulai'] = $akhirJadwal;
        }

        foreach ($ret as $key => $val) {
            //echo $val['selisih'].'<br>';
            if ($this->LAMA_SIDANG <= $val['selisih']) {
                //echo $val['selisih'] . '<br>';
                $ret[$key]['selisih'] = $val['selisih'];
                $ret[$key]['mulai'] = $val['mulai'];
            }
            //if ($val['selisih'] >= $this->LAMA_SIDANG) {

            //}
        }

        return $ret;
    }

    function getNamaDosen($nidn)
    {
        $nama = DB::table('dosen')->where('nidn', $nidn)->value('nama');
        return $nama;
    }

    public function details(Request $request)
    {
        $tanggal = $request->inputTanggal;
        $judul = $request->inputJudul;
        $nipy1 = '002'; // diganti inputan dari page admin. direfaktor agar bisa dinamis sesuai kebutuhan prodi masing-masing.
        $nipy2 = '029'; // diganti inputan dari page admin
        $nipy3 = '030'; // diganti inputan dari page admin

        // Bagian jadwal satu kalendar penuh sesuai bulan yang dipilih pada tanggal
        $jumlahHari = $this->getJumlahHariDalamSatuBulan($tanggal);
        $month = $this->getAngkaBulan($tanggal);
        $year = $this->getTahun($tanggal);

        for ($i = 1; $i <= $jumlahHari; $i++) {
            if ($i < 10) {
                $tanggalInkremen = $year . '-' . $month . '-0' . $i;
            }
            if ($i >= 10) {
                $tanggalInkremen = $year . '-' . $month . '-' . $i;
            }

            $hari = $this->getNamaHari($tanggalInkremen);
            if ($tanggal == $tanggalInkremen) {
                //echo '<b><font color="blue">' . $hari . ' ' . $tanggalInkremen . '</font></b>';
            }
            if ($tanggal != $tanggalInkremen) {
                //echo $hari . ' ' . $tanggalInkremen;
            }
            if ($hari == 'Sun') {
                $hasil[0]['selisih'] = 0;
                $hasil[0]['mulai'] = 'libur';
            }
            if ($hari != 'Sun') {
                $allJadwal = $this->getAllJadwal($tanggalInkremen, $nipy1, $nipy2, $nipy3);
                $kosong = $this->cariSlotKosong($allJadwal, $tanggalInkremen);
                if (empty($kosong)) {
                    $hasil[0]['selisih'] = 1;
                    $hasil[0]['mulai'] = 'penuh';
                }
                if (!empty($kosong)) {
                    foreach ($kosong as $key => $val) {
                        if ($val['selisih'] < $this->LAMA_SIDANG) {
                            unset($kosong[$key]);
                        }
                        if ($val['selisih'] == 0 && $val['mulai'] != 'libur') {
                            unset($kosong[$key]);
                        }
                    }
                }
                if (empty($kosong)) {
                    //echo ' penuh';
                }
                $hasil = $kosong;
                //echo '<br>';
            }

            foreach ($hasil as $key => $val) {
                if ($hari == "Sun" && $val['mulai'] == 'libur') {
                    //echo " <font color='red'>Libur</font><br>";
                }
                if ($val['selisih'] >= $this->LAMA_SIDANG) {
                    //echo '<font color="green">' . substr($val['mulai'], 10) . '</font><br>';
                }
            }
            //echo '<p>';
        }

        // Bagian detail sesuai tanggal yang dipilih
        $hari = $this->getNamaHari($tanggal);
        //echo '<font color="blue">' . $hari . ' ' . $tanggal . '</font><br>';

        if ($hari == 'Sun') {
            $hasil[0]['selisih'] = 0;
            $hasil[0]['mulai'] = 'libur';
        }
        if ($hari != 'Sun') {
            $allJadwal = $this->getAllJadwal($tanggal, $nipy1, $nipy2, $nipy3);
            $kosong = $this->cariSlotKosong($allJadwal, $tanggal);
            if (empty($kosong)) {
                $hasil[0]['selisih'] = 1;
                $hasil[0]['mulai'] = 'penuh';
            }
            if (!empty($kosong)) {
                foreach ($kosong as $key => $val) {
                    if ($val['selisih'] < $this->LAMA_SIDANG) {
                        unset($kosong[$key]);
                    }
                    if ($val['selisih'] == 0 && $val['mulai'] != 'libur') {
                        unset($kosong[$key]);
                    }
                }
            }
            if (empty($kosong)) {
                //echo ' penuh';
            }
            $hasil = $kosong;
            //echo '<br>';
        }
        //print_r($hasil);
        foreach ($hasil as $key => $val) {
            if ($hari == "Sun" && $val['mulai'] == 'libur') {
                //echo " <font color='red'>Libur</font><br>";
            }
            if ($val['selisih'] >= $this->LAMA_SIDANG) {
                //echo '<font color="green">' . substr($val['mulai'], 10) . '</font><br>';
            }
        }

        // Bagian mengambil API dari search engine rekomendasi penguji
        //$judul = DB::table('topik_tugas_akhir')->pluck('judul_topik');

        //foreach ($judul as $judul) {
        
            echo '<p> Judul: <i><b>' . $judul . '</i></b><p>';

            $client = new \GuzzleHttp\Client();
            $result = $client->post('http://localhost:8800/inverted', [
                'form_params' => [
                    'query' => $judul,
                ]
            ]);

            $body = json_decode($result->getBody()->getContents(), true);
            unset($body['error']);
            unset($body['message']['timeExecution']);

            foreach ($body as $key => $val) {
                $x[] = json_decode(json_encode($val), true);
            }

            echo '<p>';
            echo '<table>';
            echo '<tr><td><b>Skor</b></td><td><b> Rekomendasi Penguji</b></td><td><b>Judul TA bimbingan sebelumnya</b></td></tr>';
            //$temp = [];
            foreach ($x as $x => $y) {
                foreach ($y as $z) {
                    rsort($z);
                    foreach ($z as $key => $a) {
                        //if (!array_search($a['pembimbing'], $temp)){ // refaktor, buat fungsi tersendiri
                            if ($key <= 9){
                                echo '<tr><td>'.round($a['cosim'], 3).'</td><td><font color="red"><b>'.$this->getNamaDosen($a['pembimbing']).'</b></font></td><td>'.$a['judul'].'</td></tr>';
                            } else {
                                echo '<tr><td>'.round($a['cosim'], 3).'</td><td>'.$this->getNamaDosen($a['pembimbing']).'</td><td>'.$a['judul'].'</td></tr>';
                            }

                            $rekomendasi[$key]['cosim'] = round($a['cosim'], 3);
                            $rekomendasi[$key]['pembimbing'] = $a['pembimbing'];
                            $rekomendasi[$key]['judul'] = $a['judul'];
                            //$temp[] = $a['pembimbing'];
                        //}
                    }
                }
            }
            echo '</table>';
        //}

        //=========================================
        // 1. update kolom rekomendasi (JSON) 
        // $data = json_encode($rekomendasi, TRUE);
        // TopikTugasAkhir::where('topik_bidang_fk_id', 13)->update(['rekomendasi_penguji' => $data]);

        // 2. baca kolom rekomendasi JSON
        // $data = DB::select('SELECT judul_topik, rekomendasi_penguji FROM topik_tugas_akhir');
        // echo '<p>';

        // foreach ($data as $indeks => $val) {
        //     echo '<b>Judul TA: '.$val->judul_topik.'</b><br>';
        //     $opt1 = json_decode(json_encode($data[$indeks]));
        //     $hasil =  json_decode($opt1->{'rekomendasi_penguji'});
        //     foreach ($hasil as $subkey => $subval) {
        //         if ($subkey <= 10 && $subval->pembimbing != $subval->pembimbing){
        //             echo 'Cosim: ' . $subval->cosim . ' Dosen: ' . $subval->pembimbing . ' Judul: ' . $subval->judul . '<br>';
        //         }
        //     }
        //     echo '<p>';
        // }
        //===========================================
    }



    // return view('tanggal', [
    //     'tanggal' => $inputTanggal
    // ]);

}
