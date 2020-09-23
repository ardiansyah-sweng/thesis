<?php

class BangunRuang
{
    private $phi = 3.14;

    /**
     * Menghitung nilai kuadrat pangkat dua
     * pangkat = nilai^pangkat
     */
    function kuadrat($nilai)
    {
        $pangkat = 2;
        return pow($nilai, $pangkat);
    }

    /**
     * Menghitung Luas Lingkaran
     * Rumus: 0.25 * 3.14 * diameter kuadrat
     */
    function luasLingkaran($diameter)
    {
        $seperempat = 0.25;
        return $seperempat * $this->phi * $this->kuadrat($diameter);
    }

    /**
     * Menghitung Keliling Lingkaran
     * Rumus: phi x 2 x r
     */
    function kelilingLingkaran($jari_jari)
    {
        $dua = 2;
        return $this->phi * $dua * $jari_jari;
    }

    /**
     * Menghitung Luas Permukaan Kubus
     * Rumus: 6 x sisi^kuadrat
     */
    function luasPermukaanKubus($sisi)
    {
        $enam_sisi = 6;
        return $enam_sisi * $this->kuadrat($sisi);
    }
    /**
     * Menghitung Volume Balok
     * Rumus: panjang x lebar x tinggi
     */
    function volume_balok($p, $l, $t)
    {
        return $p * $l * $t;
    }
}

$bangunRuang = new BangunRuang();
echo 'Luas lingkaran: '.$bangunRuang->luasLingkaran(30);
echo '<br>';
echo 'Keliling lingkaran: '.$bangunRuang->kelilingLingkaran(8);
echo '<br>';
echo 'Luas permukaan kubus: '.$bangunRuang->luasPermukaanKubus(13);
echo '<br>';
echo 'Volume Balok: '.$bangunRuang->volume_balok(4,5,6);