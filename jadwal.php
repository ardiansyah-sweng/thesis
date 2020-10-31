<?php
require "app/matriks.php";

class jadwal
{
    /**
     * Konversi jam jadwal
     * INPUT array jam, kode jam ke-
     * OUTPUT nama jam
     */
    function konversiJam($jam, $kodeJam)
    {
        foreach ($jam as $key => $val) {
            if ($key == $kodeJam) {
                return $val;
            }
        }
    }

    /**
     * Ambil awal dan akhir jam
     * INPUT array jadwal
     * OUTPUT array jam awal, jam akhir
     */
    function ambilAwalAkhirJam($jadwal, $mulaiAtauSelesai)
    {
        if ($mulaiAtauSelesai == "mulai") {
            return substr(current($jadwal), 0, 5);
        }
        if ($mulaiAtauSelesai == "selesai") {
            return substr(end($jadwal), 6);
        }
    }
}


/**
 * hari\jam 1 2 3 4 5 6 7 8 9 10 11
 * Sen
 * Sel
 * Rab
 * Kam
 * Jum
 * Sab
 */
$jadwalDosen = array(
    array(
        array(1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0),
        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        array(0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0),
        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        array(0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0),
        array(0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0)
    ),

    array(
        array(1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0),
        array(1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0),
        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        array(0, 0, 0, 0, 1, 0, 0, 1, 1, 1, 0),
        array(1, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0),
        array(0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1)
    ),

    array(
        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        array(0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0),
        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        array(1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0),
        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        array(0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0)
    ),

);

/**
 * Fake kombinasi statis
 * Harus dibuat dinamis berdasarkan entri lama ujian.
 * Tempat lain mungkin 2 jam, atau 4 jam dst
 */
$kombinasi = array(
    array(0, 1, 2),
    array(1, 2, 3),
    array(2, 3, 4),
    array(3, 4, 5),
    array(4, 5, 6),
    array(5, 6, 7),
    array(6, 7, 8),
    array(7, 8, 9),
    array(8, 9, 10)
);

$jam = array(
    1 => "07.00-07.50",
    2 => "07.50-08.40",
    3 => "08.45-09.35",
    4 => "09.35-10.25",
    5 => "10.30-11.20",
    6 => "11.20-12.10",
    7 => "12.30-13.20",
    8 => "13.20-14.10",
    9 => "14.15-15.05",
    10 => "15.15-16.05",
    11 => "16.10-17.00",
    12 => "17.00-17.50",
);



## instansiasi jadwal baru
$matriksJadwal = new MatriksJadwal();
$jadwal = new Jadwal();

$banyakJadwal = count($jadwalDosen);
$baris = count($jadwalDosen[0]);
$kolom = count($jadwalDosen[0][0]);
$matriksJadwal->buatMatrikJadwalKosong($jadwalDosen, $banyakJadwal, $baris, $kolom, $kombinasi);
//print_r($penjadwalan);
$jadwalKosong = $matriksJadwal->buatMatrikJadwalKosong($jadwalDosen, $banyakJadwal, $baris, $kolom, $kombinasi);
//echo '<p>';
//print_r($jadwalKosong);
//echo '<p>';


echo 'Tanggal ujian &nbsp;&nbsp; <input type="date">';
echo '<p>';
echo 'Pilih jam &nbsp;&nbsp; <select>';
foreach ($jadwalKosong as $key => $val) {
    foreach ($val as $subkey => $subval) {
        foreach ($subval as $subsubkey => $kodeJam) {
            $temp[] = $jadwal->konversiJam($jam, $kodeJam);
        }
        $jamMulai = $jadwal->ambilAwalAkhirJam($temp, "mulai");
        $jamSelesai = $jadwal->ambilAwalAkhirJam($temp, "selesai");

        if ($jamMulai) {
            echo '<option>' . $matriksJadwal->HARI[$key] . ' ' . $jamMulai . '-' . $jamSelesai . '</option>';
        }
        $temp = [];
    }
}
echo '</select> WIB';
