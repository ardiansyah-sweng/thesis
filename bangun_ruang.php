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
     * Menghitung keliling Persegi Panjang
     * Rumus: 2 x (Panjang + Lebar)
     */
    function kelilingPersegiPanjang($panjang, $lebar)
    {
        $DUA = 2;
        return $DUA * ($panjang + $lebar);
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

    /**Menghitung Luas Permukaan Bola
     * Rumus : 4 * PHI * jariJari * jariJari 
     */
    function luasPermukaanBola($jariJari)
    {
        $EMPAT = 4;
        return $EMPAT * $this->PHI * $jariJari * $jariJari;
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
    /**
     * Menghitung Volume Limas Segi Empat
     * Rumus: 1/3 * Panjang x Lebar x Tinggi
     */
    function volumeLimasSegiEmpat($panjang, $lebar, $tinggi)
    {
        $SEPERTIGA = 0.33;
        return $SEPERTIGA * $panjang * $lebar * $tinggi;
    }
    /**
     * Menghitung Keliling Bola
     * Rumus: 4/3 x π x r2
     */
    function kelilingBola($jarijari)
    {
        $EMPATPERTIGA = 4 / 3;
        return $EMPATPERTIGA * $this->PHI * $this->kuadrat($jarijari);
    }

    /**
     * Menghitung Luas Segitiga
     * Rumus: 1/2 x alas x tinggi
     */
    function luasSegitiga($alas, $tinggi)
    {
        $SATUPERDUA = 1 / 2;
        return $SATUPERDUA * $alas * $tinggi;
    }
}

$bangunRuang = new BangunRuang();
echo '1 Luas lingkaran: ' . $bangunRuang->luasLingkaran(30);
echo '<br>';
echo '2 Keliling lingkaran: ' . $bangunRuang->kelilingLingkaran(8);
echo '<br>';
echo '3 Luas permukaan kubus: ' . $bangunRuang->luasPermukaanKubus(13);
echo '<br>';
echo '4 Luas permukaan persegi panjang: ' . $bangunRuang->luasPermukaaanPersegiPanjang(2, 4);
echo '<br>';
echo '5 Keliling persegi panjang: ' . $bangunRuang->kelilingPersegiPanjang(3, 6);
echo '<br>';
echo '6 Volume Kubus: ' . $bangunRuang->volumeKubus(5);
echo '<br>';
echo '7 Volume Limas Segi Tiga: ' . $bangunRuang->volumeLimasSegiTiga(30, 10);
echo '<br>';
echo '8 Luas permukaan Limas Segi Tiga: ' . $bangunRuang->luasPermukaanLimasSegiTiga(30, 40);
echo '<br>';
echo '9 Luas jajar genjang: ' . $bangunRuang->luasJajarGenjang(10, 10);
echo '<br>';
echo '10 Volume Balok: ' . $bangunRuang->volumeBalok(4, 5, 6);
echo '<br>';
echo '11 Volume Tabung ' . $bangunRuang->volumeTabung(10, 20);
echo '<br>';
echo '12 Luas Permukaan Kerucut : ' . $bangunRuang->luasPermukaanKerucut(7, 9);
echo '<br>';
echo '13 Luas Permukaan permukaan bola : ' . $bangunRuang->luasPermukaanBola(5);
echo '<br>';
echo '14 Keliling Balok: ' . $bangunRuang->kelilingBalok(15, 10, 5);
echo '<br>';
echo '15 Volume Limas SegiEmpat: ' . $bangunRuang->volumeLimasSegiEmpat(20, 10, 15);
echo '<br>';
echo '16 Keliling Bola: ' . $bangunRuang->kelilingBola(30);
echo '<br>';
echo '17 Luas Segitiga: ' . $bangunRuang->luasSegitiga(4, 6);
