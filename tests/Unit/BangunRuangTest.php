<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\BangunRuang;

class BangunRuangTest extends TestCase
{
    /** @test */
    public function nilai_kuadrat_harus_pangkat_dua()
    {
        $pangkatDua = new BangunRuang();
        $expectedValue = 9;
        $nilai = 3;
        $actualValue = $pangkatDua->kuadrat($nilai);
        $this->assertEquals($expectedValue, $actualValue);
    }

    /** @test */
    public function tes_luas_lingkaran()
    {
        $luasLingkaran = new BangunRuang();
        $expectedValue = 706.5;
        $actualValue = 30;
        $this->assertEquals($expectedValue, $luasLingkaran->luasLingkaran($actualValue));
    }

    /** @test */
    public function positif_assert_true()
    {
        $x = new BangunRuang();
        $assertvalue = $x->benar();
        // Assert function to test whether assert 
        // value is true or not 
        $this->assertTrue(
            $assertvalue,
            "assert value is true or not"
        );
    }

    /** @test */
    public function jika_tidak_sisa_genap_jika_sisa_ganjil()
    {
        $ganjilGenap = new BangunRuang();
        $expectedValue = "genap";
        $actualValue = $ganjilGenap->cekGanjilGenap(300);
        $this->assertEquals($expectedValue, $actualValue);
    }

    /** @test */
    public function cekNULL()
    {
        $cekNull = new BangunRuang();
        $actual_value = $cekNull->cekNULL(null);
        $this->assertNull($actual_value, 'Null atau tidak');
    }

    /** assertContains untuk mengecek nilai yang ada dalam suatu array */
    /** @test */
    public function jika_nilai_ada_dalam_array()
    {
        $cekContains = new BangunRuang();
        $nilaiHendakDicari = 9;
        $larik = $cekContains->cekContains();
        $this->assertContains($nilaiHendakDicari, $larik);
    }

    /** assertNotContains untuk mengecek nilai yang dicari tidak ada dalam suatu array */
    /** @test */
    public function jika_nilai_tidak_ada_dalam_array()
    {
        $cekContains = new BangunRuang();
        $nilaiHendakDicari = 5;
        $larik = $cekContains->cekContains();
        $this->assertNotContains($nilaiHendakDicari, $larik);
    }

    /** assertCount untuk mengecek jumlah elemen di dalam array sesuai */
    /** @test */
    public function jika_jumlahElemen_sama()
    {
        $cekCount = new BangunRuang();
        $jumlahElemen = 4;
        $larik = $cekCount->cekContains();
        $this->assertCount($jumlahElemen, $larik);
    }

    /** assertCount untuk mengecek jumlah elemen di dalam array tidak sama */
    /** @test */
    public function jika_jumlahElemen_tidak_sama()
    {
        $cekCount = new BangunRuang();
        $jumlahElemen = 2;
        $larik = $cekCount->cekContains();
        $this->assertNotCount($jumlahElemen, $larik);
    }

    /** assertCount untuk mengecek jumlah elemen di dalam array */
    /** @test */
    public function jika_isi_array_kosong()
    {
        $cekKosong = new BangunRuang();
        $nilai = $cekKosong->arrayKosong();
        $this->assertEmpty($nilai);
    }

    /** assertCount untuk mengecek jumlah elemen di dalam array */
    /** @test */
    public function jika_isi_array_tidak_kosong()
    {
        $cekIsi = new BangunRuang();
        $nilai = $cekIsi->arrayIsi();
        $this->assertNotEmpty($nilai);
    }

    /** @test */
    public function tes_volume_balok()
    {
        $volumeBalok = new BangunRuang();
        $expectedValue = 120;
        $panjang = 4;
        $lebar = 5;
        $tinggi = 6;
        $actualValue = $volumeBalok->volumeBalok($panjang, $lebar, $tinggi);
        $this->assertEquals($expectedValue, $actualValue);
    }

    /** @test */
    public function tes_keliling_balok()
    {
        $kelilingBalok = new BangunRuang();
        $expectedValue = 3000;
        $panjang = 15;
        $lebar = 10;
        $tinggi = 5;
        $actualValue = $kelilingBalok->kelilingBalok($panjang, $lebar, $tinggi);
        $this->assertEquals($expectedValue, $actualValue);
    }

    /** @test */
    public function tes_Volume_Limas_Segiempat()
    {
        $volumeLimasSegiEmpat = new BangunRuang();
        $expectedValue = 297;
        $panjang = 20;
        $lebar = 5;
        $tinggi = 9;
        $actualValue = $volumeLimasSegiEmpat->volumeLimasSegiEmpat($panjang, $lebar, $tinggi);
        $this->assertEquals($expectedValue, $actualValue);
    }

    /** @test */
    public function tes_Volume_Kubus()
    {
        $volumeKubus = new BangunRuang();
        $expectedValue = 125;
        $sisi = 5;
        $actualValue = $volumeKubus->volumeKubus($sisi);
        $this->assertEquals($expectedValue, $actualValue);
    }
    
    /** @test */
    public function tes_Volume_Limas_Segitiga()
    {
        $volumeLimasSegiTiga = new BangunRuang();
        $expectedValue = 100;
        $luasAlas = 30;
        $tinggi = 10;
        $actualValue = $volumeLimasSegiTiga->volumeLimasSegiTiga($luasAlas, $tinggi);
        $this->assertEquals($expectedValue, $actualValue);
    }
    
    /** @test */
    public function tes_Luas_Permukaan_Limas_Segitiga()
    {
        $volumeLimasSegiTiga = new BangunRuang();
        $expectedValue = 70;
        $luasAlas = 30;
        $luasSelubungLimasSegiTiga = 40;
        $actualValue = $volumeLimasSegiTiga->luasPermukaanLimasSegiTiga($luasAlas, $luasSelubungLimasSegiTiga);
        $this->assertEquals($expectedValue, $actualValue);
    }
    
     /** @test */
     public function tes_Luas_Trapesium()
     {
         $luasTrapesium = new BangunRuang();
         $expectedValue = 36;
         $sisiAtas = 5;
         $sisiBawah = 7;
         $tinggi = 6;
         $actualValue = $luasTrapesium->luasTrapesium($sisiAtas, $sisiBawah, $tinggi);
         $this->assertEquals($expectedValue, $actualValue);
     }

     /** @test */
    public function tes_Luas_Permukaan_Kerucut()
    {
        $luasPermukaanKerucut = new BangunRuang();
        $expectedValue = 351.68;
        $jarijari = 7;
        $garisPelukis = 9;
        $actualValue = $luasPermukaanKerucut->luasPermukaanKerucut($jarijari,$garisPelukis);
        $this->assertEquals($expectedValue, $actualValue);
    }

    /** @test */
    public function tes_Volume_Kerucut()
    {
        $volumeKerucut = new BangunRuang();
        $expectedValue = 828.96;
        $jariJari = 10;
        $tinggi = 8;
        $actualValue = $volumeKerucut->volumeKerucut($jariJari, $tinggi);
        $this->assertEquals($expectedValue, $actualValue);
    }

    /** @test */
    public function tes_Keliling_Jajar_Genjang()
    {
        $kelilingJajarGenjsng = new BangunRuang();
        $expectedValue = 28;
        $alas = 8;
        $sisi = 6;
        $actualValue = $kelilingJajarGenjsng->kelilingJajarGenjang($alas, $sisi);
        $this->assertEquals($expectedValue, $actualValue);
    }

    /** @test */
    public function tes_Keliling_Bola()
    {
        $kelilingBola = new BangunRuang();
        $expectedValue = 3768;
        $jarijari = 30;
        $actualValue = $kelilingBola->kelilingBola($jarijari);
        $this->assertEquals($expectedValue, $actualValue);
    }

    /** @test */
    public function tes_Volume_Bola()
    {
        $volumeBola = new BangunRuang();
        $expectedValue = 113.04;
        $jariJari = 3;
        $actualValue = $volumeBola->volumeBola($jariJari);
        $this->assertEquals($expectedValue, $actualValue);
    } 
	
	/** @test */
    public function tes_luasBalok()
    {
		$luasBola = new BangunRuang();
		$expectedValue = 2662;
		$panjang = 11;
		$lebar = 22;
		$tinggai = 33;
        $actualValue = $luasBalok->luasBalok($panjang, $lebar, $tinggi);
        $this->assertEquals($expectedValue, $actualValue);
    }
}
