<?php

class BangunRuang
{
    private $PHI = 3.14;

    /**
     * Menghitung nilai kuadrat pangkat dua
     * pangkat = nilai^pangkat dua
     */
    function kuadrat($nilai)
    {
        $PANGKAT_DUA = 2;
        return pow($nilai, $PANGKAT_DUA);
    }

    /**
     * Menghitung Luas Lingkaran
     * Rumus: 0.25 * 3.14 * diameter kuadrat
     */
    function luasLingkaran($diameter)
    {
        $seperempat = 0.25;
        return $seperempat * $this->PHI * $this->kuadrat($diameter);
    }

    /**
     * Menghitung Keliling Lingkaran
     * Rumus: phi x 2 x r
     */
    function kelilingLingkaran($jari_jari)
    {
        $dua = 2;
        return $this->PHI * $dua * $jari_jari;
    }

    /**
     * Menghitung Luas Permukaan Kubus
     * Rumus: 6 x sisi^kuadrat
     */
    function luasPermukaanKubus($sisi)
    {
        $ENAM_SISI = 6;
        return $ENAM_SISI * $this->kuadrat($sisi);
    }

    /**
     * Menghitung Volume Limas Segiempat
     * Rumus: 0.33 * panjang * lebar * tinggi
     */
    function volumeLimasSegiempat($panjang, $lebar, $tinggi)
    {
        $sepertiga = 0.33;
        return $sepertiga * $panjang * $lebar * $tinggi;
    }

    /**
     * Menghitung Keliling Balok
     * Rumus: 4 * panjang * lebar * tinggi
     */
    function kelilingBalok($panjang, $lebar, $tinggi)
    {
        /**
        variabel $empat tidak perlu di tulis, langsung saja di tulis di return 4 * $panjang * $lebar * $tinggi ;
        */
        $empat = 4;
        return $empat * $panjang * $lebar * $tinggi;
    }
    
}

$bangunRuang = new BangunRuang();
echo 'Luas lingkaran: '.$bangunRuang->luasLingkaran(30);
echo '<br>';
echo 'Keliling lingkaran: '.$bangunRuang->kelilingLingkaran(8);
echo '<br>';
echo 'Luas permukaan kubus: '.$bangunRuang->luasPermukaanKubus(13);
echo '<br>';
echo 'Volume Limas Segiempat: '.$bangunRuang->volumeLimasSegiempat(10,8,6);
echo '<br>';
echo 'Keliling Balok: '.$bangunRuang->kelilingBalok(9,7,5);
