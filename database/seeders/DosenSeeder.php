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
            'nidn' => '0006027001',
            'nama' => 'Eko Aribowo, S.T., M.Kom.',
            'jabfung' => 'LK',
            'email_dosen' => '001@tif.uad.ac.id',
            'avatar' => 'eko.jpg'
        ]);
        
        DB::table('dosen')->insert([
            'nipy' => '002',
            'nidn' => '0014107301',
            'nama' => 'Ali Tarmuji, S.T., M.Cs.',
            'jabfung' => 'AA',
            'email_dosen' => '002@tif.uad.ac.id',
            'avatar' => 'ali.jpg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '003',
            'nidn' => '0015118001',
            'nama' => 'Fiftin Noviyanto S.T., M.Cs.',
            'jabfung' => 'L',
            'email_dosen' => '003@tif.uad.ac.id',
            'avatar' => 'fiftin.jpg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '004',
            'nidn' => '0019087601',
            'nama' => 'Nur Rochmah Dyah Pujiastuti, S.T, M.Kom.',
            'jabfung' => 'L',
            'email_dosen' => '004@tif.uad.ac.id',
            'avatar' => 'budyah.jpeg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '005',
            'nidn' => '0020077901',
            'nama' => 'Bambang Robi\'in, S.T.,M.T.',
            'jabfung' => 'L',
            'email_dosen' => '005@tif.uad.ac.id',
            'avatar' => 'bambang.jpeg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '006',
            'nidn' => '0407016801',
            'nama' => 'Drs. Tedy Setiadi, M.T.',
            'jabfung' => 'L',
            'email_dosen' => '006@tif.uad.ac.id',
            'avatar' => 'tedy.jpg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '007',
            'nidn' => '0504088601',
            'nama' => 'Dwi Normawati, S.T., M.Eng.',
            'jabfung' => 'AA',
            'email_dosen' => '007@tif.uad.ac.id',
            'avatar' => 'dwi.jpg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '008',
            'nidn' => '0504116601',
            'nama' => 'Drs. Wahyu Pujiono, M.Kom',
            'jabfung' => 'LK',
            'email_dosen' => '008@tif.uad.ac.id',
            'avatar' => 'wahyu.jpg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '009',
            'nidn' => '0505038301',
            'nama' => 'Andri Pranolo, S.Kom., M.Cs.',
            'jabfung' => 'AA',
            'email_dosen' => '009@tif.uad.ac.id',
            'avatar' => 'andripranolo.jpg',
        ]);

        DB::table('dosen')->insert([
            'nipy' => '010',
            'nidn' => '0505118901',
            'nama' => 'Ahmad Azhari, S.Kom., M.Eng.',
            'jabfung' => 'AA',
            'email_dosen' => 'ahmad.azhari@tif.uad.ac.id',
            'avatar' => 'azhari.jpg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '011',
            'nidn' => '0506016701',
            'nama' => 'Mushlihudin, S.T., M.T.',
            'jabfung' => 'AA',
            'email_dosen' => 'mdin@ee.uad.ac.id',
            'avatar' => 'mushlihudin.jpg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '012',
            'nidn' => '0507087202',
            'nama' => 'Rusydi Umar, S.T., M.T., Ph.D.',
            'jabfung' => 'L',
            'email_dosen' => 'rusydi.umar@tif.uad.ac.id',
            'avatar' => 'rusydi.jpg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '013',
            'nidn' => '0509038402',
            'nama' => 'Guntur Maulana Zamroni, B.Sc., M.Kom.',
            'jabfung' => 'AA',
            'email_dosen' => 'guntur.zamroni[at]tif.uad.ac.id',
            'avatar' => 'guntur.jpeg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '014',
            'nidn' => '0509048901',
            'nama' => 'Nuril Anwar, S.T.,M.Kom.',
            'jabfung' => 'AA',
            'email_dosen' => 'nuril.anwar[at]tif.uad.ac.id',
            'avatar' => 'nuril.jpeg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '015',
            'nidn' => '0510076701',
            'nama' => 'Dr. Abdul Fadlil, M.T.',
            'jabfung' => 'L',
            'email_dosen' => 'fadlil@ee.uad.ac.id',
            'avatar' => 'fadlil.jpeg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '016',
            'nidn' => '0510077302',
            'nama' => 'Murinto, S.Si., M.Kom.',
            'jabfung' => 'L',
            'email_dosen' => 'murintokusno@tif.uad.ac.id',
            'avatar' => 'murinto.jpg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '017',
            'nidn' => '0510088001',
            'nama' => 'Dr. Imam Riyadi, M.Kom.',
            'jabfung' => 'LK',
            'email_dosen' => 'imam_riadi@uad.ac.id',
            'avatar' => 'imamriadi.jpeg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '018',
            'nidn' => '0511037401',
            'nama' => 'Dr. Mursid WH, S.Si., M.Kom.',
            'jabfung' => 'L',
            'email_dosen' => 'mursid@is.uad.ac.id',
            'avatar' => 'mursid.jpeg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '019',
            'nidn' => '0511098401',
            'nama' => 'Lisna Zahrotun, S.T., M.Cs.',
            'jabfung' => 'AA',
            'email_dosen' => 'lisna.zahrotun@tif.uad.ac.id',
            'avatar' => 'lisna.jpg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '020',
            'nidn' => '0512078304',
            'nama' => 'Herman Yuilansyah, S.T., M.Eng.',
            'jabfung' => 'L',
            'email_dosen' => 'herman.yuliansyah@tif.uad.ac.id',
            'avatar' => 'hermannew.jpeg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '021',
            'nidn' => '0515058802',
            'nama' => 'Fitri Indra Indikawati, S.Kom, M.Eng',
            'jabfung' => 'AA',
            'email_dosen' => 'fitri.indikawati@tif.uad.ac.id',
            'avatar' => 'fitri.jpg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '022',
            'nidn' => '0516127501',
            'nama' => 'Sri Winiarti, S.T., M.Cs.',
            'jabfung' => 'LK',
            'email_dosen' => 'sri.winiarti@tif.uad.ac.id',
            'avatar' => 'wiwin.png'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '023',
            'nidn' => '0519108901',
            'nama' => 'Murein Miksa Mardhia, S.T., M.T.',
            'jabfung' => 'L',
            'email_dosen' => 'murein.miksa@tif.uad.ac.id',
            'avatar' => 'murein.jpg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '024',
            'nidn' => '0520046901',
            'nama' => 'Kartika Firdausy, S.T., M.T.',
            'jabfung' => 'L',
            'email_dosen' => 'kartika@ee.uad.ac.id',
            'avatar' => 'kartikaf.jpg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '025',
            'nidn' => '0520098702',
            'nama' => 'Ika Arfiani, S.T., M.Cs.',
            'jabfung' => 'AA',
            'email_dosen' => 'ika.arfiani[at]tif.uad.ac.id',
            'avatar' => 'ika.jpg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '026',
            'nidn' => '0521127303',
            'nama' => 'Taufiq Ismail, S.T., M.Cs.',
            'jabfung' => 'AA',
            'email_dosen' => 'taufiq[at]tif.uad.ac.id',
            'avatar' => 'taufik.jpg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '027',
            'nidn' => '0521128502',
            'nama' => 'Dewi Pramudi Ismi, S.T., M.CompSc',
            'jabfung' => 'AA',
            'email_dosen' => 'dewi.ismi[at]tif.uad.ac.id',
            'avatar' => 'ismi.jpg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '028',
            'nidn' => '0522018302',
            'nama' => 'Anna Hendri Soleliza Jones, S. Kom, M.Cs.',
            'jabfung' => 'AA',
            'email_dosen' => 'annahendri[at]tif.uad.ac.id',
            'avatar' => 'anna.jpg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '029',
            'nidn' => '0523068801',
            'nama' => 'Supriyanto, S.T., M.T.',
            'jabfung' => 'AA',
            'email_dosen' => 'supriyanto[at]tif.uad.ac.id',
            'avatar' => 'supri.jpg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '030',
            'nidn' => '0523077902',
            'nama' => 'Ardiansyah, S.T., M.Cs.',
            'jabfung' => 'L',
            'email_dosen' => 'ardiansyah@tif.uad.ac.id',
            'avatar' => 'ardiansyah.jpg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '031',
            'nidn' => '0524118801',
            'nama' => 'Adhi Prahara, S.Si., M.Cs.',
            'jabfung' => 'AA',
            'email_dosen' => 'adhi.prahara[at]tif.uad.ac.id',
            'avatar' => 'adhi.jpg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '032',
            'nidn' => '0526018502',
            'nama' => 'Arfiani Nur Khusna, S.T., M.Kom.',
            'jabfung' => 'L',
            'email_dosen' => 'arfiani.khusna[at]tif.uad.ac.id',
            'avatar' => 'arfiani.jpg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '033',
            'nidn' => '0528058401',
            'nama' => 'Jefree Fahana, ST., M.Kom.',
            'jabfung' => 'AA',
            'email_dosen' => 'jefree.fahana[at]tif.uad.ac.id',
            'avatar' => 'jefree.jpg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '034',
            'nidn' => '0529056601',
            'nama' => 'Dr. Ir. Ardi Pujiyanta, M.T.',
            'jabfung' => 'L',
            'email_dosen' => 'ardipujiyanta[at]tif.uad.ac.id',
            'avatar' => 'ardi.jpg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '035',
            'nidn' => '0530077601',
            'nama' => 'Dewi Soyusiawati, S.T., M.T.',
            'jabfung' => 'L',
            'email_dosen' => 'dewi.soyusiawati[at]tif.uad.ac.id',
            'avatar' => 'dewi.jpg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '036',
            'nidn' => '0515069001',
            'nama' => 'Miftahurrahma Rosyda, S.Kom, M.Eng.',
            'jabfung' => 'AA',
            'email_dosen' => 'miftahurrahma.rosyda[at]tif.uad.ac.id',
            'avatar' => 'miftah.jpeg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '037',
            'nidn' => '0506079301',
            'nama' => 'Faisal Fajri Rahani S.Si., M.Cs',
            'jabfung' => 'AA',
            'email_dosen' => 'faisal.fajri[at]tif.uad.ac.id',
            'avatar' => 'faisal.jpeg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '038',
            'nidn' => '0514079201',
            'nama' => 'Dinan Yulianto, S.T., M.Eng',
            'jabfung' => 'AA',
            'email_dosen' => 'dinan.yulianto[at]tif.uad.ac.id',
            'avatar' => 'dinan.jpeg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '039',
            'nidn' => '0530077701',
            'nama' => 'Sri Handayaningsih, S.T., M.T.',
            'jabfung' => 'AA',
            'email_dosen' => 'sriningsih[at]is.uad.ac.id',
            'avatar' => 'nining.jpg'
        ]);

        DB::table('dosen')->insert([
            'nipy' => '040',
            'nidn' => '0516017701',
            'nama' => 'Muhammad Aziz, S.T., M.Cs',
            'jabfung' => 'AA',
            'email_dosen' => 'moch.aziz[at]tif.uad.ac.id',
            'avatar' => 'aziz.jpg'
        ]);
    }
}
