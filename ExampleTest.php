<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_route_basic()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_halaman_login_sebagai_dosen()
    {
        $response = $this->get('/dosen');
        $response->assertSeeInOrder(['Login Sebagai Dosen', 'Masukkan NIPY Dosen', 'Masuk']);
    }
}