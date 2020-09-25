<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\BangunRuang;

class CobaTest extends TestCase
{
    /** @test */
    public function nilai_kuadrat_harus_pangkat_dua()
    {
        $pangkatDua = new BangunRuang();
        $this->assertEquals(9, $pangkatDua->kuadrat(3));
    }

    /** @test */
    public function luas_lingkaran()
    {
        $luasLingkaran = new BangunRuang();
        $this->assertEquals(706.5, $luasLingkaran->luasLingkaran(30));
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

    /** assertContains untuk mengecek nilai yang dicari ada dalam suatu array */
    /** @test */
    public function jika_nilai_ada_PASS_jika_tidak_ada_FAIL()
    {
        $cekContains = new BangunRuang();
        $nilaiHendakDicari = 9;
        $larik = $cekContains->cekContains();
        $this->assertContains($nilaiHendakDicari, $larik);
    }

    /** assertCount untuk mengecek jumlah elemen di dalam array */
    /** @test */
    public function jika_jumlahElemen_sama_PASS_jika_tidak_FAIL()
    {
        $cekCount = new BangunRuang();
        $jumlahElemen = 4;
        $larik = $cekCount->cekContains();
        $this->assertCount($jumlahElemen, $larik);
    }

    /** assertCount untuk mengecek jumlah elemen di dalam array */
    /** @test */
    public function jika_isi_FAIL_jika_kosong_pass()
    {
        $cekKosong = new BangunRuang();
        $nilai = $cekKosong->cekEmpty();
        $this->assertEmpty($nilai);
    }
}
