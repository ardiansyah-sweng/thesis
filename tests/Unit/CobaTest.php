<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Box;

class CobaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $box = new Box();
        $this->assertEquals(8, $box->kuadrat(3));
    }
}
