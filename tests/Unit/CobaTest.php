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

    public function testPositiveForassertTrue()
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
}
