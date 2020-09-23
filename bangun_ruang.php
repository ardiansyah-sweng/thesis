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
     * Rumus: 3.24 x 2 x r
     */
    function kelilingLingkaran($jari_jari)
    {
        $dua = 2;
        return $this->phi * $dua * $jari_jari;
    }

    function luasKubus()
    {
    }

    function volumeKubus($sisi)
    {
        return $sisi * $sisi * $sisi;
    }
}

$bangunRuang = new BangunRuang();
echo 'Luas lingkaran: ' . $bangunRuang->luasLingkaran(30);
echo '<br>';
echo 'Keliling lingkaran: ' . $bangunRuang->kelilingLingkaran(8);
echo '<br>';
echo 'Volume kubus: ' . $bangunRuang->volumeKubus(5);
