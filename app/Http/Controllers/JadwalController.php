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
            return strtotime($tanggalDalamString . ' ' . config('constants.jam_kerja.awal'));
        }
        if ($awalAkhir == 'akhir') {
            return strtotime($tanggalDalamString . ' ' . config('constants.jam_kerja.akhir'));
        }
    }

    function selisihFullDay($tanggal)
    {
        return strtotime($tanggal . ' ' . config('constants.jam_kerja.akhir')) - strtotime($tanggal . ' ' . config('constants.jam_kerja.awal'));
    }

    function cariSlotKosong($allJadwal, $tanggal)
    {
        if ($allJadwal == "fullday") {
            $ret[0]['selisih'] = $this->selisihFullDay($tanggal);
            $ret[0]['mulai'] = $tanggal . ' ' . config('constants.jam_kerja.awal');
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

            if (config('constants.durasi_pendadaran') <= $awal) {
                $ret[0]['selisih'] = $awal;
                $ret[0]['mulai'] = $tanggal . ' ' . config('constants.jam_kerja.awal');
            }
            //echo '<p>';

            for ($i = 0; $i <= count($allJadwal) - 2; $i++) {
                $selisih = strtotime($allJadwal[$i + 1]['mulai']) - strtotime($allJadwal[$i]['selesai']);
                if (config('constants.durasi_pendadaran') <= $selisih) {
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
            if (config('constants.durasi_pendadaran') <= $val['selisih']) {
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
        $tanggal = date('Y-m-d');
        $nipy1 = $request->inputHiddenNIPYDosbing;
        $nipy2 = $request->inputHiddenNIPYPenguji1;
        $nipy3 = $request->inputHiddenNIPYPenguji2;

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
                echo '<b><font color="blue">' . $hari . ' ' . $tanggalInkremen . '</font></b>';
            }
            if ($tanggal != $tanggalInkremen) {
                echo $hari . ' ' . $tanggalInkremen;
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
                        if ($val['selisih'] < config('constants.durasi_pendadaran')) {
                            unset($kosong[$key]);
                        }
                        if ($val['selisih'] == 0 && $val['mulai'] != 'libur') {
                            unset($kosong[$key]);
                        }
                    }
                }
                if (empty($kosong)) {
                    echo ' penuh';
                }
                $hasil = $kosong;
                //echo '<br>';
            }

            foreach ($hasil as $key => $val) {
                if ($hari == "Sun" && $val['mulai'] == 'libur') {
                    echo " <font color='red'>Libur</font><br>";
                }
                if ($val['selisih'] >= config('constants.durasi_pendadaran')) {
                    echo '<font color="green">' . substr($val['mulai'], 10) . '</font><br>';
                }
            }
            echo '<p>';
        }

        // Bagian detail sesuai tanggal yang dipilih
        $hari = $this->getNamaHari($tanggal);
        echo '<font color="blue">' . $hari . ' ' . $tanggal . '</font><br>';

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
                    if ($val['selisih'] < config('constants.durasi_pendadaran')) {
                        unset($kosong[$key]);
                    }
                    if ($val['selisih'] == 0 && $val['mulai'] != 'libur') {
                        unset($kosong[$key]);
                    }
                }
            }
            if (empty($kosong)) {
                echo ' penuh';
            }
            $hasil = $kosong;
            //echo '<br>';
        }
        //print_r($hasil);
        foreach ($hasil as $key => $val) {
            if ($hari == "Sun" && $val['mulai'] == 'libur') {
                echo " <font color='red'>Libur</font><br>";
            }
            if ($val['selisih'] >= config('constants.durasi_pendadaran')) {
                echo '<font color="green">' . substr($val['mulai'], 10) . '</font><br>';
            }
        }

    }
}
