<?php

/**
 * Class penjadwalan yang memilih jadwal kosong antara para pemilik jadwal
 * INPUT matrik jadwal per minggu dari Senin-Sabtu
 * OUTPUT jadwal yang kosong buat semua pemilik jadwal (tidak bentrok)
 * 
 * Kontributor: Ardiansyah
 */
class MatriksJadwal
{
    private $LAMA_UJIAN = 3;
    public $HARI = array(0 => "Senin", 1 => "Selasa", 2 => "Rabu", 3=>"Kamis", 
    4=>"Jumat", 5=>"Sabtu");

    /**
     * Cek apakah semua bernilai nol
     */
    function isNol($itemJadwal)
    {
        if (in_array(1, $itemJadwal)) {
            return 1;
        }
    }

    /**
     * Menggabungkan jadwal tim penguji
     * Parameter arr jadwal semua tim
     * Output matrik gabungan jadwal yang kosong (0) atau isi (1)
     */
    function gabungkanJadwalTim($jadwalDosen, $banyakJadwal, $baris, $kolom)
    {
        for ($i = 0; $i <= 0; $i++) {
            for ($j = 0; $j <= $baris - 1; $j++) {
                for ($k = 0; $k <= $kolom - 1; $k++) {
                    for ($l = 0; $l <= $banyakJadwal - 1; $l++) {
                        $itemJadwal[] = $jadwalDosen[$l][$j][$k];
                    }
                    if ($this->isNol($itemJadwal) == 1) {
                        $ret[$j][$k] = 1;
                    } else {
                        $ret[$j][$k] = 0;
                    }
                    $itemJadwal = [];
                }
            }
        }
        return $ret;
    }

    /**
     * Memecah setiap jadwal menjadi lama ujian
     * INPUT jadwal kosong
     * OUTPUT jadwal kosong sesuai lama ujian
     */
    function splitElemen($jadwalKosong)
    {
        foreach ($jadwalKosong as $key => $val) {
            $iterasiMax = count($jadwalKosong[$key]) - ($this->LAMA_UJIAN - 1);
            for ($i = 0; $i <= $iterasiMax - 1; $i++) {
                $ret[$key][] = array_slice($jadwalKosong[$key], $i, $this->LAMA_UJIAN);
            }
        }
        return $ret;
    }

    /**
     * Cek kombinasi jadwal adalah urut
     * INPUT array jadwal splitted, kombinasi jadwal terurut sebagai pembanding
     * OUTPUT jadwal terurut
     */
    function isJadwalUrut($splitted, $kombinasi)
    {
        foreach ($kombinasi as $key => $val) {
            if ($splitted == $val) {
                return $splitted;
            }
        }
    }

    /**
     * 
     */
    function konversiHari($hari){
        foreach($this->HARI as $val){
            if($hari == 0){ return "Senin"; };
            if($hari == 1){ return "Selasa"; };
            if($hari == 2){ return "Rabu"; };
            if($hari == 3){ return "Kamis"; };
            if($hari == 4){ return "Jumat"; };
            if($hari == 5){ return "Sabtu"; };
        }
    }

    /**
     * Membuat matrik jadwal yang kosong
     * Parameter matrik jadwal gabungan
     * Output matrik jadwal yang kosong saja (0)
     */
    function buatMatrikJadwalKosong($jadwalDosen, $banyakJadwal, $baris, $kolom, $kombinasi)
    {
        $jadwalGabungan = $this->gabungkanJadwalTim($jadwalDosen, $banyakJadwal, $baris, $kolom);

        $jadwalKosong = [];

        for ($j = 0; $j <= $baris - 1; $j++) {
            for ($k = 0; $k <= $kolom - 1; $k++) {
                if ($jadwalGabungan[$j][$k] == 0) {
                    $jadwalKosong[$j][$k] = 0;
                }
            }
        }

        foreach ($jadwalKosong as $key => $val) {
            if (count($val) < $this->LAMA_UJIAN) {
                unset($jadwalKosong[$key]);
            }
        }
        $hasil = [];
        foreach ($jadwalKosong as $key => $val) {
            foreach ($val as $subkey => $subval) {
                $split[$key][] = $subkey;
            }
            $splitted = $this->splitElemen($split);
            foreach ($splitted as $key => $val) {
                foreach ($val as $subkey => $subval) {
                    if ($this->isJadwalUrut($subval, $kombinasi)) {
                        $hasil[] = $this->isJadwalUrut($subval, $kombinasi);
                    }
                }
            }
            $ret[$key] = $hasil;
            $split = [];
            $hasil = [];
        }
        return $ret;
    }
}
