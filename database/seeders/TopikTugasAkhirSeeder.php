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
            'judul_topik' => 'Refaktor dan Pengembangan Test Suite Otomatis pada Sistem Manajemen Tugas Akhir',
            'deskripsi' => 'Refaktor dan Pengembangan Test Suite Otomatis pada Sistem Manajemen Tugas AkhirRefaktor dan Pengembangan Test Suite Otomatis pada Sistem Manajemen Tugas Akhir'
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '2',
            'nim_terpilih_fk' => '1300018024',
            'judul_topik' => 'Pengembangan Multimedia Edukasi Dasar-Dasar Pengelolaan Keuangan Keluarga',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '010',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'PENGENALAN POLA BELAJAR ANAK REMAJA BERDASARKAN ATENSI DAN KONSENTRASI',
            'nim_terpilih_fk' => '1600018001',
            'periode' => 'Ganjil 2020/2021',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '010',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Simulasi Museum Muhammadiyah 3D Berbasis Virtual Reality Menggunakan Metode Cel Shading',
            'nim_terpilih_fk' => '1700018095',
            'periode' => 'Ganjil 2020/2021',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '002',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Sistem Informasi Pelaporan Perguruan Tinggi Muhammadiyah dan Aisyah dengan metode Ratonal Unified Process (RUP) berbasis web',
            'nim_terpilih_fk' => '1700018108',
            'periode' => 'Ganjil 2020/2021',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '002',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Rancang Bangun Aplikasi Belajar Budaya Jawa Tengah Untuk Anak Usia Dini Menggunakan Metode User-Centered Design (UCD) Berbasis Android',
            'nim_terpilih_fk' => '1700018104',
            'periode' => 'Ganjil 2020/2021',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '002',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'sistem informasi data organisasi berbasis web',
            'nim_terpilih_fk' => '1700018093',
            'periode' => 'Ganjil 2020/2021',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '002',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Rancang Bangun Sistem Informasi pelaporan PTMA basis web menggunakan metode RAD',
            'nim_terpilih_fk' => '1700018105',
            'periode' => 'Ganjil 2020/2021',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '002',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pembuatan UI/UX pelaporan ptma berbasis web menggunakan metode the five planes',
            'nim_terpilih_fk' => '1700018103',
            'periode' => 'Ganjil 2020/2021',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '002',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan sistem informasi penerimaan peserta didik baru (PPDB)  berbasis web dengan framework bootstrap di SMA Negeri 8 Halmahera selatan, maluku utara',
            'nim_terpilih_fk' => '1700018021',
            'periode' => 'Ganjil 2020/2021',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '002',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Implementasi Dan Monitoring Data Menggunakan Metode Web Engineering Pada Program Pengenalan Kampus',
            'nim_terpilih_fk' => '1700018016',
            'periode' => 'Ganjil 2020/2021',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '002',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Sistem Pengolahan Data Penduduk dan Kelembagaan Desa Ciangir Berbasis Web Dengan Menggunakan Metode Incremental',
            'nim_terpilih_fk' => '1700018048',
            'periode' => 'Ganjil 2020/2021',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '002',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Rancangan Bangun Sistem Penjualan Barang Berbasis BloC (Business Logic Component)  Menggunakan Framework Flutter',
            'nim_terpilih_fk' => '1700018013',
            'periode' => 'Ganjil 2020/2021',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '028',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'memahami kosmologi perempuan dengan certainty factor',
            'nim_terpilih_fk' => '1700018204',
            'periode' => 'Ganjil 2020/2021',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pemrosesan Diagram Use Case Menggunakan Template Matching Untuk Menentukan Use Case Complexity Pada Estimasi Perangkat Lunak Berbasis Use Case Point',
            'nim_terpilih_fk' => '1600018010',
            'periode' => 'Genap 2019/2020',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Optimasi Estimasi Effort Perangkat Lunak Berbasis Use Case Point Menggunakan Algoritma Genetika',
            'nim_terpilih_fk' => '1600018234',
            'periode' => 'Genap 2019/2020',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Optimasi Estimasi Effort Perangkat Lunak berbasis Use Case Points Menggunakan Particle Swarm Optimization',
            'nim_terpilih_fk' => '1600018045',
            'periode' => 'Genap 2019/2020',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Rancang Bangun Aplikasi Penjadwalan Agenda Rapat Program Studi Menggunakan Metode Waterfall',
            'nim_terpilih_fk' => '1600018100',
            'periode' => 'Genap 2019/2020',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Refaktor dan Pengembangan Test Suite Otomatis pada Sistem Manajemen Tugas Akhir',
            'nim_terpilih_fk' => '1700018117',
            'periode' => 'Ganjil 2020/2021',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Refaktor dan Pengembangan Test Suite Otomatis pada Sistem Penjadwalan Pendadaran Tugas Akhir',
            'nim_terpilih_fk' => '1700018174',
            'periode' => 'Ganjil 2020/2021',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Front-End Aplikasi Mobile untuk Sistem Pengelolaan Tugas Akhir',
            'nim_terpilih_fk' => '1700018192',
            'periode' => 'Ganjil 2020/2021',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Text Mining dan Klasifikasi Trend Topik Tugas Akhir Informatika yang Terintegrasi Pada Sistem Manajemen Tugas Akhir',
            'nim_terpilih_fk' => '1700018142',
            'periode' => 'Ganjil 2020/2021',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Analisis Sentimen Komentar Tulisan Blog Menggunakan Metode K-Nearest Neighbour',
            'nim_terpilih_fk' => '1400018156',
            'periode' => 'Ganjil 2018/2019',
            'status' => 1
        ]);


        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Penanganan Missing Value pada Data set Estimaasi Effort Perangkat Lunak menggunakan Naive Bayes',
            'nim_terpilih_fk' => '1500018172',
            'periode' => 'Ganjil 2019/2020',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Rekomendasi Pembimbing Dan Penguji Tugas Akhir Menggunakan Vector Space Model',
            'nim_terpilih_fk' => '1500018242',
            'periode' => 'Ganjil 2019/2020',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Sistem Rekomendasi Khotbah Jumat Berdasarkan Trending Topic Twitter Menggunakan Vector Space Model',
            'nim_terpilih_fk' => '1500018161',
            'periode' => 'Ganjil 2019/2020',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Aplikasi Pengelolaan Tugas Akhir Menggunakan Metode SCRUM',
            'nim_terpilih_fk' => '1500018005',
            'periode' => 'Ganjil 2019/2020',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Association Rule Mining Peminjaman Buku Perpustakaan Universitas Ahmad Dahlan Menggunakan Algoritma FP Growth',
            'nim_terpilih_fk' => '1500018004',
            'periode' => 'Ganjil 2019/2020',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Kakas Bantu Estimasi Effort Perangkat Lunak Berbasis Use Case Point',
            'nim_terpilih_fk' => '1500018003',
            'periode' => 'Ganjil 2019/2020',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Clustering Dosen Berdasarkan Indeks Kinerja Menggunakan Metode K-Means',
            'nim_terpilih_fk' => '1500018002',
            'periode' => 'Ganjil 2019/2020',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Penjadwalan Pendadaran Otomatis Menggunakan Metode Matriks',
            'nim_terpilih_fk' => '1600018080',
            'periode' => 'Genap 2019/2020',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Penentuan Reviewer Otomatis pada Open Jurnal System Menggunakan Latent Semantic Analysis (LSA)',
            'nim_terpilih_fk' => '1500018280',
            'periode' => 'Ganjil 2019/2020',
            'status' => 1,
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Association Rule Mining Peminjaman Buku Perpustakaan Universitas Ahmad Dahlan Menggunakan Algoritma Apriori',
            'nim_terpilih_fk' => '1400018068',
            'periode' => 'Ganjil 2018/2019',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Penentuan Reviewer Otomatis Pada Open Jurnal System Menggunakan Vector Space Model',
            'nim_terpilih_fk' => '1400018093',
            'periode' => 'Ganjil 2018/2019',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Analisis Sentimen Pada Sistem Indeks Kinerja Dosen Menggunakan Metode Naive Bayes',
            'nim_terpilih_fk' => '1400018176',
            'periode' => 'Ganjil 2018/2019',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Layanan Informasi Lokasi Event Menggunakan LBS Berbasis jQuery Mobile',
            'nim_terpilih_fk' => '09318012',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Perancangan UX (User Experience) UI (User Interface) Aplikasi Manajemen dan Schadulling Personal Goal',
            'nim_terpilih_fk' => '12018032',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengukuran kualitas perangkat lunak Cashoop dengan menggunakan Metode McCall',
            'nim_terpilih_fk' => '11018049',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Landing Page dan Pemanfaatan Simulasi Financial Untuk Meningkatkan Traksi Pada Situs Keuangan Keluarga Dengan Metode A/B Test',
            'nim_terpilih_fk' => '12018001',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Multimedia Edukasi Investasi Berbasis Reksadana di Lingkungan Masyarakat',
            'nim_terpilih_fk' => '12018057',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengukuran Performa Membaca Buku Elektronik (E-Book) Berbasis PDF (Portable Document Format) dan Hypertextbook',
            'nim_terpilih_fk' => '1300018106',
            'status' => 1
        ]);
    }
}
