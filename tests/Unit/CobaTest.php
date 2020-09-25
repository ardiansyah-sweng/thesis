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
}
