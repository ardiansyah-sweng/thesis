<?php
# app/BangunRuang.php

namespace App;

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
     * Menghitung volume bola
     * rumus : 4/3 * phi * jariJari * jariJari * jariJari 
     */

    function volumeBola($jariJari)
    {
        $EMPATPERTIGA = 4 / 3;
        return $EMPATPERTIGA * $this->PHI * $jariJari * $jariJari * $jariJari;
    }

    function benar()
    {
        return TRUE;
    }

    function cekGanjilGenap($nilai)
    {
        $DUA = 2;
        if ($nilai % $DUA == 0) {
            return "genap";
        }
        if ($nilai % $DUA != 0) {
            return "ganjil";
        }
    }

    function cekNULL($nilai)
    {
        $array_nilai = $nilai;
        return $array_nilai;
    }

    /**
     * Cek apakah ada nilai di dalam larik
     */
    function cekContains()
    {
        $array_nilai = array(4, 6, 7, 9);
        return $array_nilai;
    }

    /** ada nilai atau tidak */
    function arrayKosong()
    {
        $array_nilai = array();
        return $array_nilai;
    }

    /** ada nilai atau tidak */
    function arrayIsi()
    {
        $array_nilai = array(4,5,6);
        return $array_nilai;
    }
    /**
     * Menghitung Luas trapesium
     * Rumus: 1/2 * (jumlah sisi sejajar) * tinggi
     */
    function luasTrapesium($sisiAtas, $sisiBawah, $tinggi)
    {
        return 1/2 * ($sisiAtas + $sisiBawah) * $tinggi;
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
  
    /**
     * Menghitung keliling jajargenjang
     * rumus : 2 * (alas + sisi)
     */
    function kelilingJajarGenjang($alas, $sisi)
    {
        $DUA = 2;
        return $DUA * ($alas + $sisi);
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
echo 'Luas Permukaan permukaan bola : ' . $bangunRuang->luasPermukaanBola(5);
echo '<br>';
echo 'Keliling Balok: ' . $bangunRuang->kelilingBalok(15, 10, 5);
echo '<br>';
echo 'Volume Limas SegiEmpat: ' . $bangunRuang->volumeLimasSegiEmpat(20, 10, 15);
echo '<br>';
echo 'Luas Trapesium: '.$bangunRuang->luasTrapesium(5,7,6);
echo '<br>';
echo 'Volume Kerucut: ' . $bangunRuang->volumeKerucut(10,8);
echo '<br>';
echo 'Keliling Jajar genjang :' . $bangunRuang->kelilingJajarGenjang(8, 6);
echo '<br>';
echo 'Keliling Bola: ' . $bangunRuang->kelilingBola(30);
echo '<br>';
echo 'Volume Bola :' . $bangunRuang->volumeBola(3);
echo '<br>';