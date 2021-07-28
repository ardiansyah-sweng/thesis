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
    public function tes_luas_kerucut()
    {   
        $luasKerucut = new BangunRuang();
        $luas_alas = 22/7 * $jari_jari * $jari_jari;
        $selimut = 22/7 *$jari-jari + $selimut;
        $volume = 1/3 * $luas_alas * $tinggi;
        $actualValue = $luasKerucut->luasKerucut($luas_alas, $selimut, $tinggi);
        $this->assertEquals($expectedValue, $actualValue);

    }

}