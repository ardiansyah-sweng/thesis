<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopikTugasAkhirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pemrioritasan Kebutuhan Perangkat Lunak menggunakan AHP',
            'deskripsi' => 'Pemrioritasan Kebutuhan Perangkat Lunak menggunakan AHP',
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '029',
            'topik_bidang_fk_id' => '2',
            'judul_topik' => 'Sistem Pakar Deteksi Wajah Mahasiswa untuk Menentukan Kondisi Bokek',
            'deskripsi' => 'Sistem Pakar Deteksi Wajah Mahasiswa untuk Menentukan Kondisi Bokek',
        ]);
    }
}
