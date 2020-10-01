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
        $expectedValue = 9;
        $nilai = 3;
        $actualValue = $pangkatDua->kuadrat($nilai);
        $this->assertEquals($expectedValue, $actualValue);
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
     public function tes_luas_jajar_genjang()
    {
        $luasjajarGenjang = new BangunRuang();
        $expectedValue = 300;
        $alas = 15;
        $tinggi = 20;
        $actualValue = $luasjajarGenjang->luasJajarGenjang($alas, $tinggi);
        $this->assertEquals($expectedValue, $actualValue);
    }
}