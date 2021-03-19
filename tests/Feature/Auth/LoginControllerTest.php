<?php

namespace Tests\Feature\Auth;

namespace App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    use DatabaseTransactions;

    public function test_route_login()
    {
        $response = $this->get(route('login'));
        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
    }

    public function test_login_dosen_gagal_karena_nipy_tidak_diisi()
    {
        // route login dosen
        $response = $this->get(route('dosen'));
        $response->assertStatus(200);

        // View login dosen
        $response->assertViewIs('login');

        // See tulisan Login Sebagai Dosen pada form login dosen
        $response->assertSee('Login Sebagai Dosen');

        // inputan NIPY tidak diisi
        $data = ['nipy' => ''];
        $this->post('/aksiLoginDosen', $data);
    }

    public function test_login_dosen_gagal_karena_nipy_tidak_sesuai()
    {
        // route login dosen
        $response = $this->get(route('dosen'));
        $response->assertStatus(200);

        // View login dosen
        $response->assertViewIs('login');

        // See tulisan Login Sebagai Dosen pada form login dosen
        $response->assertSee('Login Sebagai Dosen');

        // nipy 123 tidak ada pada tabel dosen
        $data = ['nipy' => '000'];
        $response = $this->post('/aksiLoginDosen', $data);
        $this->assertDatabaseMissing('dosen', $data);

        // View pesan NIPY Tidak Terdaftar
        //$response->assertRedirect('/dosen');
        //$response->assertSessionHas('flash_notification.0.level','danger');

        // Halaman redirect ke '/dosen'
    }

    public function test_login_dosen_sukses_karena_nipy_sesuai()
    {
        // route login dosen
        $response = $this->get(route('dosen'));
        $response->assertStatus(200);

        // View login dosen
        $response->assertViewIs('login');

        // See tulisan Login Sebagai Dosen pada form login dosen
        $response->assertSee('Login Sebagai Dosen');

        // nipy 002 ada pada tabel dosen
        $data = ['nipy' => '002'];
        $response = $this->post("/aksiLoginDosen", $data);
        $this->assertDatabaseHas('dosen', $data);
        
        // redirect ke route 'dashboardDosen'

        // Melihat tulisan "Dashboard" di page dashboardDosen
    }

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