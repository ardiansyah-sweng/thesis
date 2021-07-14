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
     * Menghitung Keliling Lingkaran
     * Rumus: phi x 2 x jari jari
     */
    function kelilingLingkaran($jariJari)
    {
        $DUA = 2;
        return $this->PHI * $DUA * $jariJari;
    }

    /**
     * Menghitung Volume Kubus
     * Rumus sisi*sisi*sisi
     */
    function volumeKubus($sisi)
    {
        return $sisi * $sisi * $sisi;
    }

    /**
     * Menghitung Luas Permukaan Persegi Panjang
     * Rumus: Panjang x Lebar
     */
    function luasPersegiPanjang($panjang, $lebar)
    {
        return $panjang * $lebar;
    }

    /**
     * Menghitung volume bola
     * rumus : 4/3 * phi * jariJari * jariJari * jariJari
     */
    function volumeBola($jariJari)
    {
        $EMPATPERTIGA = 4 / 3;
        return $EMPATPERTIGA * $this->PHI * $jariJari * $jariJari * $jariJari;
    }

    
    /**
     * Menghitung Volume Kerucut
     * Rumus 1/3 * PHI * jari-jari * jari-jari * tinggi
     */
    function volumeKerucut($jariJari, $tinggi)
    {
        $SATUPERTIGA = 0.33;

        return $SATUPERTIGA * $this->PHI * $this->kuadrat($jariJari) * $tinggi;
    }

}

$bangunRuang = new BangunRuang();

echo 'Bangun Ruang : Persegi Panjang <br>';
echo 'Panjang : 10 <br>';
echo 'Lebar : 2 <br>';
echo 'Luas persegi panjang: ' . $bangunRuang->luasPersegiPanjang(10, 4);
echo '<br><br>';

echo 'Bangun Ruang : Bola <br>';
echo 'Jari-Jari : 14 <br>';
echo 'Volume Bola :' . $bangunRuang->volumeBola(14);
echo '<br><br>';

echo 'Bangun Ruang : Kerucut <br>';
echo 'Jari-Jari : 7 <br>';
echo 'Tinggi : 10 <br>';
echo 'Volume Kerucut: ' . $bangunRuang->volumeKerucut(7, 10);
echo '<br><br>';

echo 'Bangun Ruang : Kubus <br>';
echo 'Panjang Rusuk : 10 <br>';
echo 'Volume Kubus: ' . $bangunRuang->volumeKubus(10);
echo '<br><br>';

echo 'Bangun Ruang : Lingkaran <br>';
echo 'Jari-Jari : 8 <br>';
echo 'Keliling lingkaran: ' . $bangunRuang->kelilingLingkaran(8);