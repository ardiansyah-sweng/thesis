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
        $SEPEREMPAT = 0.25;
        return $SEPEREMPAT * $this->PHI * $this->kuadrat($diameter);
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
     * Menghitung Luas Permukaan Kubus
     * Rumus: 6 x sisi^kuadrat
     */
    function luasPermukaanKubus($sisi)
    {
        $ENAM_SISI = 6;
        return $ENAM_SISI * $this->kuadrat($sisi);
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
    function luasPermukaaanPersegiPanjang($panjang, $lebar)
    {
        return $panjang * $lebar;
    }

    /**
     * Menghitung Volume Limas Segi Tiga
     * Rumus: 1/3 * Luas Alas x tinggi
     */
    function volumeLimasSegiTiga($luasAlas, $tinggi)
    {
        $SEPERTIGA = 1 / 3;
        return $SEPERTIGA * $luasAlas * $tinggi;
    }

    /**
     * Menghitung Luas Permukaan Limas Segi Tiga
     * Rumus: Luas Selubung Limas + Luas Alas
     */
    function luasPermukaanLimasSegiTiga($luasAlas, $luasSelubungLimas)
    {
        return $luasAlas + $luasSelubungLimas;
    }

    /**
     * Menghitung Luas Permukaan jajar genjang 
     * Rumus: Luas jajargenjang alas * tinggi
     */
    public function luasJajarGenjang($alas, $tinggi)
    {
        return $alas * $tinggi;
}
    /**
     * Menghitung Volume Balok
     * Rumus: panjang x lebar x tinggi
     */
    function volumeBalok($panjang, $lebar, $tinggi)
    {
        return $panjang * $lebar * $tinggi;
    }

    /**
     * Menghitung Volume Tabung
     * Rumus : PHI x jari-jari Kuadrat x tinggi
     */
    function volumeTabung($jariJari, $tinggi)
    {
        return $this->PHI * $this->kuadrat($jariJari) * $tinggi;
    }

    /**
     * Menghitung Luas Permukaan Kerucut
     * Rumus : (phi x jarijari x garisPelukis) + (phi x jari x jari)
     */
    function luasPermukaanKerucut($jarijari, $garisPelukis)
    {
        return ($this->PHI * $jarijari * $garisPelukis) + ($this->PHI * $this->kuadrat($jarijari));
    }

    /**
     * Menghitung Volume Bola
     * Rumus Luas : 4/3 * 3.14 * jariJari * jariJari * jariJari
     */
    function volumeBola($jariJari)
    {
        $EMPATPERTIGA = 4 / 3;
        return $EMPATPERTIGA * $this->PHI * $jariJari * $jariJari * $jariJari;
    }

    /**
     * Menghitung Keliling Balok
     * Rumus: 4 * panjang * lebar * tinggi
     */
    function kelilingBalok($panjang, $lebar, $tinggi)
    {
        $EMPAT = 4;
        return $EMPAT * $panjang * $lebar * $tinggi;
	}
}

$bangunRuang = new BangunRuang();
echo 'Luas lingkaran: ' . $bangunRuang->luasLingkaran(30);
echo '<br>';
echo 'Keliling lingkaran: ' . $bangunRuang->kelilingLingkaran(8);
echo '<br>';
echo 'Luas permukaan kubus: ' . $bangunRuang->luasPermukaanKubus(13);
echo '<br>';
echo 'Luas permukaan kubus: ' . $bangunRuang->luasPermukaanKubus(13);
echo '<br>';
echo 'Luas permukaan persegi panjang: ' . $bangunRuang->luasPermukaaanPersegiPanjang(2, 4);
echo '<br>';
echo 'Volume Kubus: ' . $bangunRuang->volumeKubus(5);
echo '<br>';
echo 'Volume Limas Segi Tiga: ' . $bangunRuang->volumeLimasSegiTiga(30, 10);
echo '<br>';
echo 'Luas permukaan Limas Segi Tiga: ' . $bangunRuang->luasPermukaanLimasSegiTiga(30, 40);
echo '<br>';
echo 'Luas jajar genjang: ' . $bangunRuang->luasJajarGenjang(10, 10);
echo '<br>';
echo 'Volume Balok: ' . $bangunRuang->volumeBalok(4, 5, 6);
echo '<br>';
echo 'Volume Tabung ' . $bangunRuang->volumeTabung(10, 20);
echo '<br>';
echo 'Luas Permukaan Kerucut : ' . $bangunRuang->luasPermukaanKerucut(7, 9);
echo '<br>';
echo 'Volume Bola :' . $bangunRuang->volumeBola(4);
echo '<br>';
echo 'Keliling Balok: '.$bangunRuang->kelilingBalok(15,10,5);