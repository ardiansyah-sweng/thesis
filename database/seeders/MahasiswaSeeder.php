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
            'nim' => '001',
            'nama_mahasiswa' => 'Eko Rilo Pambudi',
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '002',
            'nama_mahasiswa' => 'Muhadi',
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '003',
            'nama_mahasiswa' => 'Maria Trisnawati',
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '004',
            'nama_mahasiswa' => 'Muhammad Yamin',
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '005',
            'nama_mahasiswa' => 'Elon Musk',
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '006',
            'nama_mahasiswa' => 'Armala',
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '007',
            'nama_mahasiswa' => 'Ibrohim',
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '008',
            'nama_mahasiswa' => 'Tibroni',
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '009',
            'nama_mahasiswa' => 'Guntur Aprilyanto',
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '010',
            'nama_mahasiswa' => 'Heni Dian Novita',
        ]);
    }
}
