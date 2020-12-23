<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    
    /** @test */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    
    /** @test */
    public function testDosen()
    {
        $response = $this->call('GET', '/dosen');

        $this->assertEquals(200, $response->status());
    }
}
