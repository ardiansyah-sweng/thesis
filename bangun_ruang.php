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
     * Menghitung Luas Lingkaran by Jari_jari
     * Rumus: Phir x jari-jari x jari-jari
     */
    function luasLingkaranByJariJari($jariJari)
    {
        return $this->PHI * $jariJari * $jariJari;
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
     * Menghitung Keliling Lingkaran
     * Rumus: phi x diameter
     */
    function kelilingLingkaranbyDiameter($diameter)
    {
        return $this->PHI * $diameter;
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
     * Menghitung Luas salah satu sisi kubus
     * Rumus: sisi*sisi
     */
    function luasPermukaanSalahSatuSisiKubus($sisi)
    {
        return $sisi * $sisi;
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
     * Menghitung Luas Balok
     * Rumus: 2 * ( panjang * lebar + panjang * tinggi + lebar * tinggi)
     */
    function luasBalok($panjang, $lebar, $tinggi)
    {
        $DUA = 2;
        return ($DUA * (($panjang * $lebar) + ($panjang * $tinggi) + ($lebar * $tinggi)));
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
     * Menghitung Volume Kerucut
     * Rumus 1/3 * PHI * jari-jari * jari-jari * tinggi
     */
    function volumeKerucut($jariJari, $tinggi)
    {
        $SATUPERTIGA = 0.33;

        return $SATUPERTIGA * $this->PHI * $this->kuadrat($jariJari) * $tinggi;
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
     * Menghitung Volume Prisma
     * rumus : luasAlas * Tinggi
     */

    function volumePrisma($luasAlas, $tinggi)
    {
        return $luasAlas * $tinggi;
    }

    /**
     * Menghitung Luas Permukaan Tabung
     * Rumus: (2 x luas alas) + (keliling alas x tinggi ) atau (2 x phi x jariJari kuadrat) + (phi x diameter x tinggi)
     */
    function luasPermukaanTabung($jariJari, $tinggi)
    {
        $DUA = 2;
        $diameter = $jariJari + $jariJari;
        return ($DUA * $this->PHI * $this->kuadrat($jariJari)) + ($this->PHI * $diameter * $tinggi);
    }

    /**
     * Menghitung Luas trapesium
     * Rumus: 1/2 * (jumlah sisi sejajar) * tinggi
     */
    function luasTrapesium($sisiAtas, $sisiBawah, $tinggi)
    {
        return 1 / 2 * ($sisiAtas + $sisiBawah) * $tinggi;
    }

    /**
     * Menghitung volume keliling alas pada tabung
     * rumus : 2 x phi x r
     */
    function volumeKelilingAlasTabung($PHI, $jariJari)
    {
        $DUA = 2;
        return $DUA * $PHI * $jariJari;
    }
    /**
     * Menghitung Keliling Persegi
     * Rumus: 4 x sisi
     */
    function kelilingPersegi($sisi)
    {
        $EMPAT = 4;
        return $EMPAT *  $sisi;
    }

    /**
     * Menghitung luas permukaan prisma segitiga
     * rumus : (keliling alas x t) + (2 x luas alas
     */
    function luasPermukaanPrismaSegitiga($kelilingAlas, $tinggi, $luasAlasSegitiga)
    {
        $DUA = 2;
        return ($kelilingAlas * $tinggi) + ($DUA * $luasAlasSegitiga);
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
     * Menghitung Luas Selimut Tabung
     * rumus : 2 * PHI * jariJari * tinggi
     */
    function luasSelimutTabung($jariJari, $tinggi)
    {
        $DUA = 2;
        return $DUA * $this->PHI * $jariJari * $tinggi;
    }

    /**
     * Menghitung volume setengah bola
     * rumus : 1/2 * 4/3 * phi * jariJari * jariJari * jariJari
     */

    function volumeSetengahBola($jariJari)
    {
        $SATUPERDUA = 1 / 2;
        $EMPATPERTIGA = 4 / 3;
        return $SATUPERDUA * $EMPATPERTIGA * $this->PHI * $jariJari * $jariJari * $jariJari;
    }

    /**
     * Menghitung Luas Setengah Lingkaran
     * rumus : 1/2 * 1/4 * phi * jari-jari kuadrat
     */

    function LuasSetengahLingkaran($diameter)
    {
        $SEPEREMPAT = 0.25;
        $SETENGAH   = 0.5;
        return $SETENGAH * $SEPEREMPAT * $this->PHI * $this->kuadrat($diameter);
    }
     /**
     * menghitung Prisma Segitiga Sikusiku
     * V= (1/2 x alas * tinggisegitiga * tinggiprisma
     */
    function volumePrismaSegitigaSikusiku($alas, $tinggiSegitiga, $tinggiPrisma)
    {
        $SATUPERDUA = 1/2;
    return ($SATUPERDUA * $alas * $tinggiSegitiga) * $tinggiPrisma;
    }

    /**
     * menghitung Volume prisma segi empat 
     *
     * V = (panjang × lebar) × tinggi prisma
     */
    function volumePrismaSegiEmpat($panjang, $lebar, $tinggiPrisma)
    {
    return ($panjang * $lebar) * $tinggiPrisma;
    }

    /**
     * Menghitung Volume Setengah Kerucut
     * Rumus 1/2 * 1/3 * PHI * jari-jari * jari-jari * tinggi
     */
    function volumeSetengahKerucut($jariJari, $tinggi)
    {
        $SATUPERDUA = 0.5;
        $SATUPERTIGA = 0.33;

        return $SATUPERDUA * $SATUPERTIGA * $this->PHI * $this->kuadrat($jariJari) * $tinggi;
    }

    
}

$bangunRuang = new BangunRuang();
echo 'Luas lingkaran: ' . $bangunRuang->luasLingkaran(30);
echo '<br>';
echo 'Keliling lingkaran: ' . $bangunRuang->kelilingLingkaran(21);
echo '<br>';
echo 'Luas permukaan kubus: ' . $bangunRuang->luasPermukaanKubus(13);
echo '<br>';
echo 'Luas permukaan kubus: ' . $bangunRuang->luasPermukaanKubus(13);
echo '<br>';
echo 'Luas salah satu sisi kubus: ' . $bangunRuang->luasPermukaanSalahSatuSisiKubus(20);
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
echo 'Luas Balok : ' . $bangunRuang->luasBalok(11, 22, 33);
echo '<br>';
echo 'Volume Limas SegiEmpat: ' . $bangunRuang->volumeLimasSegiEmpat(20, 10, 15);
echo '<br>';
echo 'Keliling Bola: ' . $bangunRuang->kelilingBola(30);
echo '<br>';
echo 'Volume Kerucut: ' . $bangunRuang->volumeKerucut(10, 8);
echo '<br>';
echo 'Volume Bola :' . $bangunRuang->volumeBola(3);
echo '<br>';
echo 'Volume Prisma : ' . $bangunRuang->volumePrisma(50, 3);
echo '<br>';
echo 'Luas Permukaan Tabung: ' . $bangunRuang->luasPermukaanTabung(5, 10);
echo '<br>';
echo 'Luas Trapesium: ' . $bangunRuang->luasTrapesium(5, 7, 6);
echo '<br>';
echo 'volume Keliling AlasTabung: ' . $bangunRuang->volumeKelilingAlasTabung(5, 10);
echo '<br>';
echo 'Keliling Persegi: ' . $bangunRuang->kelilingPersegi(9);
echo '<br>';
echo 'luas permukaan prisma segitiga : ' . $bangunRuang->luasPermukaanPrismaSegitiga(20, 5, 10);
echo '<br>';
echo 'Keliling Jajar genjang :' . $bangunRuang->kelilingJajarGenjang(8, 6);
echo '<br>';
echo 'Luas Persegi: '. $bangunRuang->luasPersegi(5);
echo '<br>';
echo 'luas permukaan prisma segitiga : '.$bangunRuang->luasPermukaanPrismaSegitiga(20,5,10);
echo '<br>';
echo 'Volume Setengah Bola: ' . $bangunRuang->volumeSetengahBola(7);
echo '<br>';
echo 'Keliling lingkaran (diameter): ' . $bangunRuang->kelilingLingkaranbyDiameter(30);
echo '<br>';
echo 'Luas lingkaran (jari jari): ' . $bangunRuang->luasLingkaranByJariJari(22);
echo '<br>';
echo 'Luas Setengah Lingkaran: ' . $bangunRuang->LuasSetengahLingkaran(30);
echo '<br>';
echo 'volume Prisma Segitiga Sikusiku: '.$bangunRuang->volumePrismaSegitigaSikusiku(6,8,10);
echo '<br>';
echo 'volume prisma segi empat: '.$bangunRuang->volumePrismaSegiEmpat(19,2,5);
echo '<br>';
echo 'Volume Setengah Kerucut: ' . $bangunRuang->volumeSetengahKerucut(10, 10);
echo '<br>';

