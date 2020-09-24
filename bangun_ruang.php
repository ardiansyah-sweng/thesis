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
     * Menghitung nilai pangkat tiga
     * pangkat = nilai^pangkat
     */
    function pangkatTiga($nilai)
    {
        $pangkat = 3;
        return pow($nilai, $pangkat);
    }

    /**
     * Menghitung Luas Lingkaran
     * Rumus: 0.25 * phi * diameter kuadrat
     */
    function luasLingkaran($diameter)
    {
        $seperempat = 0.25;
        return $seperempat * $this->phi * $this->kuadrat($diameter);
    }

    /**
     * Menghitung Keliling Lingkaran
     * Rumus: phi * 2 * r
     */
    function kelilingLingkaran($jari_jari)
    {
        $dua = 2;
        return $this->phi * $dua * $jari_jari;
    }

    /**
     * Menghitung Luas Kubus
     * Rumus: 6 * s kuadrat 
     */
    function luasKubus($sisi)
    {
        $enam = 6;
        return $enam * $this->kuadrat($sisi);
    }

    /**
     * Menghitung Luas Permukaan Bola
     * Rumus: 4 * phi * r kuadrat 
     */
    function luasBola($jari_jari)
    {
        $empat = 4;
        return $empat * $this->phi * $this->kuadrat($jari_jari);
    }

    /**
     * Menghitung Volume Bola
     * Rumus: 1.33 * phi * r^pangkat tiga 
     */
    function volumeBola($jari_jari)
    {
        $empatpertiga = 1.33;
        return $empatpertiga * $this->phi * $this->pangkatTiga($jari_jari);
    }


}

$bangunRuang = new BangunRuang();
echo 'Luas lingkaran: '.$bangunRuang->luasLingkaran(30);
echo '<br>';
echo 'Keliling lingkaran: '.$bangunRuang->kelilingLingkaran(8);
echo '<br>';
echo 'Luas Kubus: '.$bangunRuang->luasKubus(5);
echo '<br>';
echo 'Luas Permukaan Bola: '.$bangunRuang->luasBola(7);
echo '<br>';
echo 'Volume Bola: '.$bangunRuang->volumeBola(3);