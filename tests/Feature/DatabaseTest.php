<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    
    use DatabaseTransactions;
    
    /** @test */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    
    /** @test */
    public function doseninsertTest()
    {
        $dosen = Dosen::create([
            'nipy'=> '999',
            'nidn' => '123456789',
            'nama' => 'Stevanus',
            'jabfung' => 'LK',
            'email_dosen' => 'stevanus@tif.uad.ac.id',
            'avatar' => 'eko.jpg'
        ]);

        $this->assertEquals('999', $dosen->nipy);
        $this->assertEquals('123456789', $dosen->nidn);
        $this->assertEquals('Stevanus', $dosen->nama);
        $this->assertEquals('LK', $dosen->jabfung);
        $this->assertEquals('stevanus@tif.uad.ac.id', $dosen->email_dosen);
        $this->assertEquals('eko.jpg', $dosen->avatar);
    }
}
