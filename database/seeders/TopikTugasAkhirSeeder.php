<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'nipy_fk_nipy' => "001",
            'topik_bidang_fk_id' => "2",
            'judul_topik' => 'Matching Pembimbing',
            'deskripsi' => 'Pemilihan pembimbing secara otomatis',
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => "003",
            'topik_bidang_fk_id' => "6",
            'judul_topik' => 'Penjadwalan seminar otomatis',
            'deskripsi' => 'Sistem memberikan jadwal secara otomatis',
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => "005",
            'topik_bidang_fk_id' => "2",
            'judul_topik' => 'Penentuan penguji otomatis',
            'deskripsi' => 'Sistem menentukan penguji secara otomatis',
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => "007",
            'topik_bidang_fk_id' => "16",
            'judul_topik' => 'Trend Topik Tugas Akhir',
            'deskripsi' => 'Sistem menampilkan topik tugas akhir yang menarik',
        ]);
    }
}
