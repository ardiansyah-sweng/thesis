<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DosenSeeder::class);
        $this->call(TopikBidangSeeder::class);
        $this->call(MahasiswaSeeder::class);
        $this->call(TopikTugasAkhirSeeder::class);
        $this->call(AmbilTopikTugasAkhirSeeder::class);
    }
}
