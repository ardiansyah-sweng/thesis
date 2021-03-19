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

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Sistem Authoring Tools Untuk Publikasi Jurnal Ilmiah Berbasis Web',
            'nim_terpilih_fk' => '12018200',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Isyarat Tooltip Untuk Meningkatkan Performa Membaca Pada Buku Elektronik (E-Book)',
            'nim_terpilih_fk' => '1300018118',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Aplikasi Authoring Tools Buku Teks Elektronik (E-Text Book) Berbasis Web',
            'nim_terpilih_fk' => '11018004',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Aplikasi Authoring Tools Skripsi Berbasis Web',
            'nim_terpilih_fk' => '12018133',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Sistem Pendukung Keputusan Menggunakan Metode Analytical Hierarchy Process (AHP) Untuk Pemilihan Buku Teks Kuliah Di Perguruan Tinggi',
            'nim_terpilih_fk' => '12018176',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan User Interface (UI) dan User Experience (UX) Aplikasi Cashoop untuk Pengelolaan Keuangan Pribadi',
            'nim_terpilih_fk' => '12018086',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Web Admin dan Backend Web Services Untuk Aplikasi Manajemen Presensi Rapat',
            'nim_terpilih_fk' => '12018118',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Aplikasi Pos Mikro Berbasis Mobile Android Untuk Bisnis Waralaba',
            'nim_terpilih_fk' => '12018128',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Web Service Pos Mikro Berbasis Software AS A Service (SaaS) Dengan Arsitektur Multitenancy Pada Bisnis Waralaba',
            'nim_terpilih_fk' => '12018138',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Sistem Manajemen Presensi Rapat Menggunakan QR Code Pada Android',
            'nim_terpilih_fk' => '12018141',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan User Interface (UI) dan User eksperince (UX) Aplikasi Mutaba\'ah Untuk Evaluasi Ibadah Harian Berbasis Android',
            'nim_terpilih_fk' => '12018144',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Sistem Web Backend Untuk Administrasi dan Analytic Pada Aplikasi Pos Mikro',
            'nim_terpilih_fk' => '12018073',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Aplikasi Mutaba\'ah Untuk Evaluasi Ibadah Harian Berbasis Android',
            'nim_terpilih_fk' => '12018092',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan User Experience (UX) dan User Interface (UI) Aplikasi Sistem Manajemen Perpustakaan Desa Berbasis Mobile',
            'nim_terpilih_fk' => '12018109',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Aplikasi Iperpus Berbasis Mobile Sebagai Implementasi Sistem Perpustakaan Desa Berbasis SaaS',
            'nim_terpilih_fk' => '12018142',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Rancang Bangun UI/UX Aplikasi Manajemen Skripsi Pada Program Studi Teknik Informatika Universitas Ahmad Dahlan',
            'nim_terpilih_fk' => '12018146',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Kakas Estimasi Perangkat Lunak Dengan Function Point dan Use Case Point Untuk Praktikum Rekayasa Perangkat Lunak',
            'nim_terpilih_fk' => '12018183',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Kakas Estimasi Perangkat Lunak Dengan Function Point dan Use Case Point Untuk Praktikum Rekayasa Perangkat Lunak',
            'nim_terpilih_fk' => '12018202',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Sistem Pengelolaan Pelanggan Pada Aplikasi Pos Mikro',
            'nim_terpilih_fk' => '12018202',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan User Experience (UX) dan User Interface (UI)  Aplikasi Ibeauty Berbasis Android',
            'nim_terpilih_fk' => '12018021',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Aplikasi Mobile Learning Untuk Pembelajaran Rambu Lalu Lintas Pada Anak Usia 4-7 Tahun',
            'nim_terpilih_fk' => '11018023',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Perancangan dan Pengembangan Aplikasi Mobile Android E-Collection Untuk Pencatatan Data Cicilan Kredit Nasabah Bank BPR Yogyakarta',
            'nim_terpilih_fk' => '11018106',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Rancang Bangun Aplikasi Web Backend Sebagai Administrator Untuk Pemesanan Menu Di Restoran',
            'nim_terpilih_fk' => '11018046',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan User Experience(UX) dan User Interface (UI) Aplikasi Tabloo Sebagai Pembaca Skripsi Di Perpustakaan Kampus III UAD Menggunakan Tablet',
            'nim_terpilih_fk' => '11018134',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Sistem E-Marketplace Travel Agent Untuk Mempermudah Pencarian Paket Wisata',
            'nim_terpilih_fk' => '09018034',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Native Front-End Aplikasi Pembaca Skripsi Di Perpustakaan Kampus III UAD Menggunakan Android Tablet',
            'nim_terpilih_fk' => '11018183',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Aplikasi Android Pengelolaan Keuangan Keluarga Modul Perencanaan Keuangan Masa Depan Berbasis Web Service',
            'nim_terpilih_fk' => '11018184',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Web Service Backend Untuk Aplikasi Pembaca Skripsi Perpustakaan Kampus III Universitas Ahmad Dahlan',
            'nim_terpilih_fk' => '11018138',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan User Experience (UX) dan User Interface (UI) Sistem Manajemen Perpustakaan Desa Berbasis SAAS',
            'nim_terpilih_fk' => '11018148',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan User Experience (UX) dan User Interface (UI) Pada Aplikasi Mobile Learning Untuk Pembelajaran Rambu Lalu Lintas Pada Anak Usia 4-7 Tahun',
            'nim_terpilih_fk' => '11018007',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan User Experience Dan User Interface Aplikasi iGometer Taksi',
            'nim_terpilih_fk' => '11018029',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan User Interface (UI) dan User Experience (UX) Aplikasi Mobile Alert Notification Untuk Mempercepat Pemenuhan Kebutuhan Darah Pasien Gawat Darurat Berbasis Social Network & Location Based Service',
            'nim_terpilih_fk' => '11018091',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Web Service Backend Manajemen Perpustakaan Desa Berbasis Konsep Software AS A Service (SaaS)',
            'nim_terpilih_fk' => '11018163',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Web Service Backend Untuk Aplikasi Pemesanan Menu di Restoran',
            'nim_terpilih_fk' => '11018057',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan User Experence (UX) dan User Interface (UI) Untuk Aplikasi E-Reader Skripsi Berbasis HTML5',
            'nim_terpilih_fk' => '11018052',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Aplikasi Native Android Sebagai  Front End Pemesanan Menu Makanan Di Restoran Menggunakan Web Service',
            'nim_terpilih_fk' => '11018041',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Look and Feel Sampul dan Daftar Isi Hypertext Book Berdasarkan Aspek User Experience dan User Interface',
            'nim_terpilih_fk' => '08018286',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Integrasi Aplikasi "Lagidimana" dengan Social Network untuk Meningkatkan Jumlah Pengguna',
            'nim_terpilih_fk' => '09018005',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Front Office System Menggunakan M-Government Untuk Meningkatkan Interaksi Masyarakat dan Pemerintah Yogyakarta',
            'nim_terpilih_fk' => '09018210',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Rancang Bangun Sistem Manajemen Studio Rekaman Berbasis Web',
            'nim_terpilih_fk' => '09018019',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Aplikasi Lagidimana Berbasis Android',
            'nim_terpilih_fk' => '09018230',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Aplikasi Kartu Nama Virtual Berbasis Web Mobile',
            'nim_terpilih_fk' => '07018303',
            'status' => 1
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Aplikasi Mobile Kumpulan Doa Harian Islam Untuk Mempermudah Menghafal Doa Berbasis Android',
            'nim_terpilih_fk' => '09018295',
            'status' => 1
        ]);
        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pembangunan Aplikasi E-Menu pada Restoran Berbasis Android',
            'nim_terpilih_fk' => '08018197',
            'status' => 1
        ]);
        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Desain dan Implementasi Jejaring Sosial Bagi Penggemar Sepakbola Berbasis Web',
            'nim_terpilih_fk' => '08018300',
            'status' => 1
        ]);
        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Rancang Bangun Aplikasi Mobile Chatt Room Menggunakan Koneksi Bluetooth',
            'nim_terpilih_fk' => '06018105',
            'status' => 1
        ]);
        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Visualisasi Struktur Bangunan Rumah Tahan Gempa Berbasis 3D',
            'nim_terpilih_fk' => '07018046',
            'status' => 1
        ]);
        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Aplikasi Meeting Note Berbasis Android',
            'nim_terpilih_fk' => '08018252',
            'status' => 1
        ]);
        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Sistem Pemesanan Taksi Menggunakan Layanan Berbasis Lokasi',
            'nim_terpilih_fk' => '08018035',
            'status' => 1
        ]);
        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Rancang bangun Web Service Aplikasi Management Event (Acara)',
            'nim_terpilih_fk' => '08018139',
            'status' => 1
        ]);
        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Sistem Informasi Perbandingan Harga Handphone se Bantul Berbasis Web',
            'nim_terpilih_fk' => '07018320',
            'status' => 1
        ]);
        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Website Update Skor Pertandingan Sepak Bola Liga Indonesia',
            'nim_terpilih_fk' => '06018061',
            'status' => 1
        ]);
        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Aplikasi Pengelolaan Keuangan Untuk Organisasi Non Profit Berbasis Cloud Computing',
            'nim_terpilih_fk' => '07018059',
            'status' => 1
        ]);
        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Aplikasi Multimedia Interaktif Pengenalan Topologi Jaringan dan TCP/IP',
            'nim_terpilih_fk' => '05018071',
            'status' => 1
        ]);
        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Sistem Informasi Pengelolaan dan Inventory ATK Studi Kasus di BIFAS UAD',
            'nim_terpilih_fk' => '06018060',
            'status' => 1
        ]);
        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '7',
            'judul_topik' => 'Pengembangan Aplikasi Mobile Web Percakapan Bahasa Korea Berbasis Lokasi Menggunakan Foursquare API',
            'nim_terpilih_fk' => '07018173',
            'status' => 1
        ]);

    }
}
