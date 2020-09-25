<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen')->insert([
            'nipy' => '001',
            'nama' => 'Eko Aribowo, S.T., M.Kom.',
            'jabfung' => 'LK',
        ]);
        
        DB::table('dosen')->insert([
            'nipy' => '002',
            'nama' => 'Ali Tarmuji, S.T., M. Cs.',
            'jabfung' => 'AA',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '003',
            'nama' => 'Fiftin Noviyanto S.T., M. Cs.',
            'jabfung' => 'L',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '004',
            'nama' => 'Nur Rochmah Dyah Pujiastuti, S.T, M.Kom.',
            'jabfung' => 'L',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '005',
            'nama' => 'Bambang Robi\'in, S.T.,M.T.',
            'jabfung' => 'L',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '006',
            'nama' => 'Drs. Tedy Setiadi, M.T.',
            'jabfung' => 'L',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '007',
            'nama' => 'Dwi Normawati, S.T., M.Eng.',
            'jabfung' => 'AA',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '008',
            'nama' => 'Drs. Wahyu Pujiono, M.Kom',
            'jabfung' => 'LK',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '009',
            'nama' => 'Andri Pranolo, S.Kom., M. Cs.',
            'jabfung' => 'AA',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '010',
            'nama' => 'Ahmad Azhari, S.Kom., M.Eng.',
            'jabfung' => 'AA',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '011',
            'nama' => 'Mushlihudin, S.T., M.T.',
            'jabfung' => 'AA',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '012',
            'nama' => 'Rusydi Umar, S.T., M.T., Ph.D.',
            'jabfung' => 'L',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '013',
            'nama' => 'Guntur Maulana Zamroni, B.Sc., M.Kom.',
            'jabfung' => 'AA',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '014',
            'nama' => 'Nuril Anwar, S.T.,M.Kom.',
            'jabfung' => 'AA',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '015',
            'nama' => 'Dr. Abdul Fadlil, M.T.',
            'jabfung' => 'L',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '016',
            'nama' => 'Murinto, S.Si., M.Kom.',
            'jabfung' => 'L',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '017',
            'nama' => 'Dr. Imam Riyadi, M.Kom.',
            'jabfung' => 'LK',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '018',
            'nama' => 'Dr. Mursid WH, S.Si., M.Kom.',
            'jabfung' => 'L',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '019',
            'nama' => 'Lisna Zahrotun, S.T., M.Cs.',
            'jabfung' => 'AA',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '020',
            'nama' => 'Herman Yuilansyah, S.T., M.Eng.',
            'jabfung' => 'L',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '021',
            'nama' => 'Fitri Indra Indikawati, S.Kom, M.Eng',
            'jabfung' => 'AA',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '022',
            'nama' => 'Sri Winiarti, S.T., M.Cs.',
            'jabfung' => 'LK',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '023',
            'nama' => 'Murein Miksa Mardhia, S.T., M.T.',
            'jabfung' => 'L',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '024',
            'nama' => 'Kartika Firdausy, S.T., M.T.',
            'jabfung' => 'L',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '025',
            'nama' => 'Ika Arfiani, S.T., M.Cs.',
            'jabfung' => 'AA',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '026',
            'nama' => 'Taufiq Ismail, S.T., M.Cs.',
            'jabfung' => 'AA',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '027',
            'nama' => 'Dewi Pramudi Ismi, S.T., M.CompSc',
            'jabfung' => 'AA',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '028',
            'nama' => 'Anna Hendri Soleliza Jones, S. Kom, M.Cs.',
            'jabfung' => 'AA',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '029',
            'nama' => 'Supriyanto, S.T., M.T.',
            'jabfung' => 'AA',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '030',
            'nama' => 'Ardiansyah, S.T., M.Cs.',
            'jabfung' => 'L',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '031',
            'nama' => 'Adhi Prahara, S.Si., M.Cs.',
            'jabfung' => 'AA',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '032',
            'nama' => 'Arfiani Nur Khusna, S.T., M.Kom.',
            'jabfung' => 'L',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '033',
            'nama' => 'Jefree Fahana, ST., M.Kom.',
            'jabfung' => 'AA',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '034',
            'nama' => 'Dr. Ir. Ardi Pujiyanta, M.T.',
            'jabfung' => 'L',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '035',
            'nama' => 'Dewi Soyusiawati, S.T., M.T.',
            'jabfung' => 'L',
        ]);
    }
}
