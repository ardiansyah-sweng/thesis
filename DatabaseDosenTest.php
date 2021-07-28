<?php

namespace Tests\Feature\Auth;

namespace App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class DatabaseDosenTest extends TestCase
{
    use DatabaseTransactions;
    
    public function test_insert_into_tabel_dosen()
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