<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;

class JadwalController extends Controller
{
    public $AWAL_JAM_KERJA = '07:00:00';
    public $AKHIR_JAM_KERJA = '17:00:00';
    public $LAMA_SIDANG = 7200;

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

    function cariSlotKosong($allJadwal, $tanggal)
    {
        if ($allJadwal == "fullday") {
            return $ret['mulai'] = $tanggal . ' ' . $this->AWAL_JAM_KERJA;
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
                //echo $allJadwal[$i + 1]['mulai'] . '  ' . $allJadwal[$i]['selesai'] . '<br>';
                $selisih = strtotime($allJadwal[$i + 1]['mulai']) - strtotime($allJadwal[$i]['selesai']);
                //echo $selisih . '<br>';
                if ($this->LAMA_SIDANG <= $selisih) {
                    $ret[$i + 1]['selisih'] = $selisih;
                    $ret[$i + 1]['mulai'] = $allJadwal[$i]['selesai'];
                }
            }
            $jum = count($allJadwal);
            $ret[$jum]['selisih'] = $akhir;
            $ret[$jum]['mulai'] = $akhirJadwal;
            //return $ret;
            //echo '<p>';
            //print_r($ret);
        }

        foreach ($ret as $key => $val) {
            //echo $val['selisih'].'<br>';
            if ($this->LAMA_SIDANG <= $val['selisih']) {
                echo $val['selisih'] . '<br>';
                $ret[$key]['selisih'] = $val['selisih'];
                $ret[$key]['mulai'] = $val['mulai'];
            }
            //if ($val['selisih'] >= $this->LAMA_SIDANG) {

            //}
        }

        return $ret;
    }

    public function details(Request $request)
    {
        $tanggal = $request->inputTanggal;
        $awalJamKerja = '07:00:00';
        $akhirJamKerja = '17:00:00';
        $DURASI_SIDANG = 7200; //detik
        $jamAwalKerja = $tanggal . ' ' . $awalJamKerja;
        $jamAkhirKerja = $tanggal . ' ' . $akhirJamKerja;
        $nipy1 = '030';
        $nipy2 = '002';
        $nipy3 = '029';

        $jumlahHari = $this->getJumlahHariDalamSatuBulan($tanggal);
        $month = $this->getAngkaBulan($tanggal);
        $year = $this->getTahun($tanggal);

        for ($i = 1; $i <= $jumlahHari; $i++) {
            if ($i < 10) {
                $tanggalInkremen = $year . '-' . $month . '-0' . $i;
                $hari = $this->getNamaHari($tanggalInkremen);
                if($tanggal == $tanggalInkremen){
                    echo '<b><font color="blue">' . $hari . ' ' . $tanggalInkremen . '</font></b><br>';
                } else {
                    echo '<b>' . $hari . ' ' . $tanggalInkremen . '</b><br>';
                }
                if ($hari == 'Sun') {
                    $hasil = 'libur';
                }
                if ($hari != 'Sun') {
                    $allJadwal = $this->getAllJadwal($tanggalInkremen, $nipy1, $nipy2, $nipy3);
                    //print_r($allJadwal);
                    $kosong = $this->cariSlotKosong($allJadwal, $tanggalInkremen);
                    //echo '<p>';
                    if (empty($kosong)) {
                        $hasil = 'Full booked';
                    } else {
                        $hasil = $kosong;
                    }
                }
                print_r($hasil);
            } else {
                $tanggalInkremen = $year . '-' . $month . '-' . $i;
                $hari = $this->getNamaHari($tanggalInkremen);
                if($tanggal == $tanggalInkremen){
                    echo '<b><font color="blue">' . $hari . ' ' . $tanggalInkremen . '</font></b><br>';
                } else {
                    echo '<b>' . $hari . ' ' . $tanggalInkremen . '</b><br>';
                }
                if ($hari == 'Sun') {
                    $hasil = 'libur';
                }
                if ($hari != 'Sun') {
                    $allJadwal = $this->getAllJadwal($tanggalInkremen, $nipy1, $nipy2, $nipy3);
                    //print_r($allJadwal);
                    $kosong = $this->cariSlotKosong($allJadwal, $tanggalInkremen);
                    if (empty($kosong)) {
                        $hasil = 'Full booked';
                    } else {
                        $hasil = $kosong;
                    }
                }
                print_r($hasil);
                echo '<br>';
            }
            echo '<p>';
        }

        $hari = $this->getNamaHari($tanggal);
        echo '<font color="blue">'.$hari . ' ' . $tanggal . '</font><br>';

        if ($hari == 'Sun') {
            $hasil = 'libur';
        }
        if ($hari != 'Sun') {
            $allJadwal = $this->getAllJadwal($tanggal, $nipy1, $nipy2, $nipy3);
            $kosong = $this->cariSlotKosong($allJadwal, $tanggal);
            if (empty($kosong)) {
                $hasil = 'Full booked';
            } else {
                $hasil = $kosong;
            }
        }
        print_r($hasil);
    }

    // return view('tanggal', [
    //     'tanggal' => $inputTanggal
    // ]);

}
