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
    public function tes_volume_prisma()
    {
        $volumePrisma = new BangunRuang();
        $expectedValue = 150;
        $luasAlas = 50;
        $tinggi = 3;
        $actualValue = $volumePrisma->volumePrisma($luasAlas,$tinggi);
        $this->assertEquals($expectedValue, $actualValue);
    }
    
}

     
