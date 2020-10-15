<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'nim' => '17001',
            'nama_mahasiswa' => 'Eko Rilo Pambudi',
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '17002',
            'nama_mahasiswa' => 'Muhadi',
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '17003',
            'nama_mahasiswa' => 'Maria Trisnawati',
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '17004',
            'nama_mahasiswa' => 'Muhammad Yamin',
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '17005',
            'nama_mahasiswa' => 'Elon Musk',
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '17006',
            'nama_mahasiswa' => 'Armala',
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '17007',
            'nama_mahasiswa' => 'Ibrohim',
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '17008',
            'nama_mahasiswa' => 'Tibroni',
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '17009',
            'nama_mahasiswa' => 'Guntur Aprilyanto',
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '17010',
            'nama_mahasiswa' => 'Heni Dian Novita',
        ]);
    }
}
