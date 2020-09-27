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
        $actualValue = 3;
        $this->assertEquals($expectedValue, $pangkatDua->kuadrat($actualValue));
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
        $actualValue1 = 4;
        $actualValue2 = 5;
        $actualValue3 = 6;
        $this->assertEquals($expectedValue, $volumeBalok->volumeBalok($actualValue1, $actualValue2, $actualValue3));
    }

    /** @test */
    public function tes_keliling_balok()
    {
        $kelilingBalok = new BangunRuang();
        $expectedValue = 3000;
        $actualValue1 = 15;
        $actualValue2 = 10;
        $actualValue3 = 5;
        $this->assertEquals($expectedValue, $kelilingBalok->kelilingBalok($actualValue1, $actualValue2, $actualValue3));
    }
  
    /** @test */
    public function tes_Volume_Limas_Segiempat()
    {
        $volumeLimasSegiEmpat= new BangunRuang();
        $expectedValue = 297;
        $actualValue1 = 20;
        $actualValue2 = 5;
        $actualValue3 = 9;
        $this->assertEquals($expectedValue, $volumeLimasSegiEmpat->volumeLimasSegiEmpat($actualValue1, $actualValue2, $actualValue3));
    }

}
