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

    // add
    private $la = 30; // Var $la = Luas Alas 

    public function volumeLimasSegiTiga()
    {
        $t = 10; // Var $t = tinggi
        $v =  (1 / 3 * $this->la * $t);  // Rumus Volume Limas Segi Tiga
        return $v;
    }
    public function luaspermukaanLimasSegiTiga()
    {
        $lsl = 30; // var $lsl = luas selubung limas
        $l_tot = $this->la + $lsl;  // Rumus Luas Permukaan Limas Segi Tiga
        return $l_tot;
    }
}

$bangunRuang = new BangunRuang();
echo 'Luas lingkaran: ' . $bangunRuang->luasLingkaran(30);
echo '<br>';
echo 'Keliling lingkaran: ' . $bangunRuang->kelilingLingkaran(8);
echo '<br>';
echo 'Luas permukaan kubus: ' . $bangunRuang->luasPermukaanKubus(13);
echo '<br>';
echo 'Volume Limas Segi 3: ' . $bangunRuang->volumeLimasSegiTiga();
echo '<br>';
echo 'Luas permukaan Limas Segi 3: ' . $bangunRuang->luaspermukaanLimasSegiTiga();
