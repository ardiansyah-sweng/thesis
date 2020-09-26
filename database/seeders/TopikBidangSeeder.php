<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopikBidangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topik_bidang')->insert([
            'topik_bidang' => 'Pengolahan Citra',
        ]);

        DB::table('topik_bidang')->insert([
            'topik_bidang' => 'Sistem Pakar',
        ]);

        DB::table('topik_bidang')->insert([
            'topik_bidang' => 'Pengolahan Teks',
        ]);

        DB::table('topik_bidang')->insert([
            'topik_bidang' => 'Media Pembelajaran',
        ]);

        DB::table('topik_bidang')->insert([
            'topik_bidang' => 'Estimasi Effort Perangkat Lunak',
        ]);

        DB::table('topik_bidang')->insert([
            'topik_bidang' => 'Sistem Informasi',
        ]);

        DB::table('topik_bidang')->insert([
            'topik_bidang' => 'Kebutuhan Perangkat Lunak',
        ]);

        DB::table('topik_bidang')->insert([
            'topik_bidang' => 'Pengembangan Perangkat Lunak',
        ]);
    }
}
