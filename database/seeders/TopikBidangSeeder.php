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

        DB::table('topik_bidang')->insert([
            'topik_bidang' => 'Augmented dan Virtual Reality',
        ]);

        DB::table('topik_bidang')->insert([
            'topik_bidang' => 'Interaksi Manusia dan Komputer',
        ]);

        DB::table('topik_bidang')->insert([
            'topik_bidang' => 'Social Network and Graph',
        ]);

        DB::table('topik_bidang')->insert([
            'topik_bidang' => 'Multimedia dan Grafika',
        ]);

        DB::table('topik_bidang')->insert([
            'topik_bidang' => 'Forensik Digital',
        ]);

        DB::table('topik_bidang')->insert([
            'topik_bidang' => 'Kriptografi',
        ]);

        DB::table('topik_bidang')->insert([
            'topik_bidang' => 'Keamanan Komputer',
        ]);

        DB::table('topik_bidang')->insert([
            'topik_bidang' => 'Sistem Pendukung Keputusan',
        ]);

        DB::table('topik_bidang')->insert([
            'topik_bidang' => 'Machine Learning dan Data Mining',
        ]);

        DB::table('topik_bidang')->insert([
            'topik_bidang' => 'Network dan Sistem Terdistribusi',
        ]);
    }
}
