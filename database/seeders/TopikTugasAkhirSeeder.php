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
            'deskripsi' => 'Refaktor dan Pengembangan Test Suite Otomatis pada Sistem Manajemen Tugas AkhirRefaktor dan Pengembangan Test Suite Otomatis pada Sistem Manajemen Tugas Akhir',
            'rekomendasi_penguji' => '[{"cosim":0.178,"pembimbing":"0407016801","judul":"Penerapan text mining pengelompokkan judul manajemen tugas proyek menggunakan metode k-means dengan cosine similarity"},{"cosim":0.178,"pembimbing":" 0523077902","judul":"Pengembangan Aplikasi Pengelolaan Tugas Akhir Menggunakan Metode Agile"},{"cosim":0.157,"pembimbing":"0015118001","judul":"Penerapan Sistem Pendukung Keputusan Pada Sistem Irigasi Otomatis Menggunakan Wireless Sensor Network (WSN)"},{"cosim":0.149,"pembimbing":"0520098702","judul":"Penerapan metode frame by frame pada iklan layanan masyarakat menejemen tugas proyek teknik informatika universitas ahmad dahlan."},{"cosim":0.143,"pembimbing":"0523077902","judul":"Penentuan Reviewer Otomatis Pada Open Jurnal System Menggunakan Latent Semantic Analysis"},{"cosim":0.133,"pembimbing":"0516127501","judul":"Pengembangan Aplikasi Topik Tugas Akhir Mahasiswa Sastra Inggris dengan Menggunakan Cosine Similarity"},{"cosim":0.125,"pembimbing":"0519108901","judul":"Analysis & Implementasi kelayakan website Bimawa UAD dengan Metode Usability Testing"},{"cosim":0.125,"pembimbing":"0019087601","judul":"Evaluasi Kualitas Website Digilib UAD Menggunakan Metode Usability Testing"},{"cosim":0.097,"pembimbing":"0523077902","judul":"Rekomendasi Pembimbing dan Penguji Tugas Akhir Menggunakan Vector Space Model"},{"cosim":0.081,"pembimbing":"0530077601","judul":"Implementasi Cosine Similarity dalam Pengecekan Keaslian Dokumen Tugas Pemrograman Mahasiswa"},{"cosim":0.072,"pembimbing":"0505118901","judul":"Pengembangan Sistem Informasi Distribusi Zakat di LAZISmu DIY"},{"cosim":0.069,"pembimbing":"0523068801","judul":"Pengembangan rekomendasi sistem pada reservasi wisata dengan menerapkan metode profile matching"},{"cosim":0.06,"pembimbing":"0505118901","judul":"Sistem Pendukung Keputusan Penentuan Serbuk Kayu Untuk Menentukan Tumbuh Kembang Jamur Menggunakan Metode Simple Additive Weighting"},{"cosim":0.048,"pembimbing":"0523068801","judul":"pengembangan model karakter game legenda karna anak sang surya"},{"cosim":0.047,"pembimbing":"0523068801","judul":"Pengembangan Model 3d Untuk Game Portal Akademik Menggunakan Metode Digital Sculpting"},{"cosim":0.047,"pembimbing":"0530077601","judul":"Pengembangan Stemming Bahasa Jawa Menggunakan Metode Algoritma Porter Untuk Mencari Akar Kata"},{"cosim":0.046,"pembimbing":"0530077601","judul":"Pengembangan Aplikasi Stemming Pencarian Kata Dasar Dalam bahasa Inggris Menggunakan Algoritma Porter"},{"cosim":0.043,"pembimbing":"0523068801","judul":"Penambahan Chapter 3 pada Game Legenda Karna : Sang Anak Surya dengan metode Rapid Application Development"},{"cosim":0.037,"pembimbing":"0505118901","judul":"Perancangan Game The Adventure of West-Born Guardian Menggunakan Metode Multimedia Development Life Cycle Berbasis Adobe Flash"},{"cosim":0.036,"pembimbing":"0521127303","judul":"Investigasi Forensik pada E-Mail Spooting Menggunakan Metode Networks Forensik Development Life Cycle (NFDLC)"},{"cosim":0.035,"pembimbing":"0504116601","judul":"Pengembangan Media Big Book Untuk Meningkatkan Minat Belajar Sejarah Kerajaan Kelas IV SD Muhammadiyah Pepe"},{"cosim":0.033,"pembimbing":"0521127303","judul":"Pengembangan Media Pembelajaran IPA Kelas III SD Materi Gerak Benda Berbasis Media Pembelajaran Interaktif"},{"cosim":0.033,"pembimbing":"0504116601","judul":"Pengembangan Game Anak Soleh Berbasis Role Playingg Game (RPG) Pada Materi Sejarah Nabi dan Rosul Sebagai Media Pembelajaran Mandiri"},{"cosim":0.027,"pembimbing":"0020077901","judul":"Media Pembelajaran Augmented Reality, Pengembangan Media Pembelajaran Berbasis Augmented Reality di Pembelajaran Ilmu Pengetahuan Alam Sekolah Dasar"},{"cosim":0.022,"pembimbing":"0522018302","judul":"Sistem pendukung keputusan Diagnosa kerusakan pada komputer"},{"cosim":0.022,"pembimbing":"0507087202","judul":"Sistem Informasi Penjualan dengan Berbasis Web dengan Metode CRM"},{"cosim":0.02,"pembimbing":"0507087202","judul":"Sistem Informasi Penjualan dengan Berbasis Mobile dengan Metode CRM"},{"cosim":0.02,"pembimbing":"0407016801","judul":"Sistem Informasi pada Kantor Agama (KUA)"},{"cosim":0.019,"pembimbing":"0521128502","judul":"Sistem Pakar Diagnosa Masalah Kehamilan Menggunakan Metode Fuzzy Tsukamoto"},{"cosim":0.019,"pembimbing":"0512078304","judul":"Sistem Rekomendasi Pemilihan Program Studi dengan Metode FCM"},{"cosim":0.018,"pembimbing":"0510077302","judul":"Sistem Pendukung Keputusan Pemilihan Suppllied Kain Menggunakan Metode Promotehee"},{"cosim":0.018,"pembimbing":"0504088601","judul":"Sistem Pendukung Keputusan Pemilihan Kamera DSLR dengan Metode AHP"},{"cosim":0.018,"pembimbing":"0524118801","judul":"Perancangan Sistem Pembelajaran Augmen Reality Berbasis Mobile"},{"cosim":0.018,"pembimbing":"0504088601","judul":"Sistem Pendukung Keputusan Penentuan Jenis Kualitas Kayu Jati"},{"cosim":0.018,"pembimbing":"0516127501","judul":"Sistem pakar diagnosa kerusakan transmisi manual pada mobil "},{"cosim":0.018,"pembimbing":"0507087202","judul":"Sistem Pendukung Keputusan Persetujuan Kredit Usaha Mikro dengan Metode (Moora)"},{"cosim":0.017,"pembimbing":"0407016801","judul":"Sistem Rekomendasi Konten Dalam Jejaring Sosial Youtube"},{"cosim":0.017,"pembimbing":"0516127501","judul":"Sistem Penentuan Kelayakan Usaha Industri Rumahan Dengan Metode Profile Matching"},{"cosim":0.017,"pembimbing":"0522018302","judul":"Sistem Pendukung eputusan Diagnosa Gangguan Kepribadian Antisosial"},{"cosim":0.016,"pembimbing":"0521128502","judul":"Sistem Pakar Diagnosa Penyakit Sapi Menggunakan Metode Fuzzy C-Means Clustering"},{"cosim":0.016,"pembimbing":"0407016801","judul":"Sistem Rekomendasi Kuliner Kota Yogyakarta Dengan Graph Database"},{"cosim":0.015,"pembimbing":"0505118901","judul":"Sistem pendukung keputusan pemilihan smartphone menggunakan metode analitical hierarchy process "},{"cosim":0.015,"pembimbing":"0522018302","judul":"Sistem Pendukung Keputusan Analisis Efisiensi Modal Kerja Pada Perusahaan Yang Terdaftar di BEI"},{"cosim":0.015,"pembimbing":"0521128502","judul":"Sistem Pakar Diagnosa Kerusakan Mobil Mitsubishi MVP dengan Menggunakan Metode Fuzzy K-NN"},{"cosim":0.015,"pembimbing":"0507087202","judul":"Sistem Pendukung Pengambilan Keputusan untuk Penerimaan Pegawai dengan Metode SAW (Simple Additive Weighting)"},{"cosim":0.015,"pembimbing":"0519108901","judul":"Sistem Rekomendasi Pembelian Smartphone Menggunakan Metode K-Nearst Neighboard (KNN)"},{"cosim":0.015,"pembimbing":"0006027001","judul":"Implementasi Resful Web Service Untuk Integrasi Sistem Informasi Penjualan Reseller"},{"cosim":0.015,"pembimbing":"0504116601","judul":"Analisis dan Implementasi Back Office Sistem Laporan Sekolah Berbasis Website"},{"cosim":0.015,"pembimbing":"0507087202","judul":"Sistem Pendukung Keputusan Penentuan Prioritas Bantuan Start-Up Menggunakan Anlitical Herarechy Process"},{"cosim":0.014,"pembimbing":"0516127501","judul":"Sistem Pendukung Keputusan Pentuan Kelayakan Industri Rumahan dengan Metode Simple Additive Weighting (SAW)"},{"cosim":0.014,"pembimbing":"0521128502","judul":"Sistem Pakar Diagnosa Penyakit Gigi dan Mulut dengan Metode Na\u00efve Bayes"},{"cosim":0.014,"pembimbing":"0505118901","judul":"Sistem Pendukung Keputusan Pemilihan Kain Tenun Ende Lio Menggunakan Metode Simple Additive Weighting"},{"cosim":0.014,"pembimbing":"0523077902","judul":"Implementasi Chatbot Pada Sistem Penerimaan Mahasiswa Baru Universitas Ahmad Dahlam Dengan Metode Vector Space Model"},{"cosim":0.014,"pembimbing":"0522018302","judul":"Sistem pengambilan keputusan inventory obat pada puskesmas sukorejo 1 kendal dengan metode fifo"},{"cosim":0.013,"pembimbing":"0521128502","judul":"Sistem Pakar Diagnosis Hama dan Penyakit Tanaman Kelapa Sawit Menggunakan Metode Dempster Shafer"},{"cosim":0.013,"pembimbing":"0522018302","judul":"Sistem Pakar Diagnosa Infeksi Saluran Pernapasan Akut (ISPA) Pada Balita Menggunakan C4.5"},{"cosim":0.013,"pembimbing":"0509048901","judul":"Optimasi Keamanan Plug-in pada Open Journal Sistem (OJS Versi 0.3)"},{"cosim":0.013,"pembimbing":"0521127303","judul":"Rancang Bangun Sistem Informasi Bursa Kerja Khusus Berbasis Web Dengan Menggunakan Metode MVC (Studi Kasus pada SMKN 1 Cijulang)"},{"cosim":0.013,"pembimbing":"0523077902","judul":"Sistem Rekomendasi Khutbah Jumat Berdasarkan Trending Topic Twitter Menggunakan Vector Space Model"},{"cosim":0.013,"pembimbing":"0507087202","judul":"Sistem Informasi Tracking Sales Menggunakan Google Direction API Berbasis Android di Yuka Fashion"},{"cosim":0.013,"pembimbing":"0516127501","judul":"Sistem Penentuan Potensi Daerah Industri Rumahan Wilayah Kabupaten Bantuk Dengan Metode Transfer Learning"},{"cosim":0.013,"pembimbing":"0015118001","judul":"Implementasi Wireless Sensor Network (WSN) Pada Pemantauan Sistem Irigasi Sawah Menggunakan Micro Computer"},{"cosim":0.013,"pembimbing":"0505118901","judul":"Sistem Pengenalan Dosen Di Kampus Melalui Kamera Pengawas Dengan Metode Background Subtraction dan Eigenface"},{"cosim":0.012,"pembimbing":"0504088601","judul":"Sistem Klasifikasi Diagnosis Penyakit Gagal Ginjal Berbasis Web Menggunakan Metode Algoritma C4.5 (Studi Kasus di RSUD Ciamis)"},{"cosim":0.012,"pembimbing":"0526018502","judul":"Sistem Pendeteksi Kemiripan Dokumen Artikel Dosen Pada Eprint UAD Menggunakan Metode Latent Semantic Analysis (LSA)"},{"cosim":0.012,"pembimbing":"0407016801","judul":"Analisis dan Perancangan Sistem Informasi Pustaka Islam Bustanul Ulum Berbasis Web Menggunakan Arsitektur MVC dengan Framework Codeigniter"},{"cosim":0.01,"pembimbing":"0506016701","judul":"Sistem Pendukung Keputusan Pembagian Daging Hewan Qurban Dipadukuhan Samirono Dengan Metode Fuzzy Multi Decission Making (FDADM) dan Simple Addative Weighting (SAW)"},{"cosim":0.01,"pembimbing":"0520098702","judul":"Penerapan Metode Stop Motion Animation Pada Video Profil Kelompok Keilmuan Relata Dan Sistem Cerdas Prodi Teknik Informatika UAD"}]'
        ]);

        DB::table('topik_tugas_akhir')->insert([
            'nipy_fk_nipy' => '030',
            'topik_bidang_fk_id' => '2',
            'nim_terpilih_fk' => '1300018024',
            'judul_topik' => 'Pengembangan Multimedia Edukasi Dasar-Dasar Pengelolaan Keuangan Keluarga',
            'status' => 1,
            'deskripsi' => 'Pengembangan Multimedia Edukasi Dasar-Dasar Pengelolaan Keuangan Keluarga',
            'rekomendasi_penguji' => '[{"cosim":0.243,"pembimbing":"0512078304","judul":"Sistem Rekomendasi Pemilihan Program Studi dengan Metode FCM"},{"cosim":0.237,"pembimbing":"0521127303","judul":"Rancang Bangun Sistem Informasi Bursa Kerja Khusus Berbasis Web Dengan Menggunakan Metode MVC (Studi Kasus pada SMKN 1 Cijulang)"},{"cosim":0.209,"pembimbing":"0523077902","judul":"Penjadwalan Pendadaran dengan metode matriks"},{"cosim":0.173,"pembimbing":"0014107301","judul":"Rancang Bangun Aplikasi Penentu Harga Pokok Produksi Menggunakan Metode Job Order Costing Pada Toko Jersey Ojan Sport"},{"cosim":0.144,"pembimbing":"0014107301","judul":"Rancang Bangun e-commerce untuk penjualan produk pemeliharaan sawit berbasis pwa (Progressive Web Apps) Studi Kasus Toko Aroldi Jaya, Belanti Jaya, Batanghari, Jambi"},{"cosim":0.136,"pembimbing":"0512078304","judul":"Penerapan Association Rules menggunakan algoritma fp growth untuk analisis pola pelaksanaan skripsi pada program studi teknik Informatika UAD"},{"cosim":0.127,"pembimbing":"0504116601","judul":"Pembangunan Aplikasi Pembelajaran Doa Sehari Hari Anak Soleh Berbasis Android Menggunakan Android Studio"},{"cosim":0.097,"pembimbing":"0006027001","judul":"Rancangan Skema Login Menggunakan Metode Steganografi Least Significant Bit (LSB) Untuk Mengurangi Kemungkinan Keylogger"},{"cosim":0.089,"pembimbing":"0512078304","judul":"Prediksi lama studi mahasiswa FTI dengan metode naive bayes"},{"cosim":0.071,"pembimbing":"0511098401","judul":"Prediksi persentase masa studi kelulusan tepat waktu teknik industri dengan metode c45 pak"},{"cosim":0.063,"pembimbing":"0526018502","judul":"Text Mining Pada Media Sosial Twitter (Studi Kasus: Topik #2019gantipresiden)"},{"cosim":0.062,"pembimbing":"0505118901","judul":"Implementasi Metode Forward Chaining Untuk Pelevelan Game Puzzle Studi Kasus Paud Dini Laras Yogyakarta"},{"cosim":0.06,"pembimbing":" 0523077902","judul":"Pengembangan Aplikasi Pengelolaan Tugas Akhir Menggunakan Metode Agile"},{"cosim":0.06,"pembimbing":"0511098401","judul":"Penerapan Metode Crips Data Mining dengan Algoritma FP-Growth untuk Mendapatkan Pola Asosiasi (Studi Kasus SeblakCuzz Pusat Yogyakarta) "},{"cosim":0.058,"pembimbing":"0006027001","judul":"Aplikasi Steganografi Menggunakan Metode LSB Pada Citra Digital"},{"cosim":0.058,"pembimbing":"0504088601","judul":"Sistem Klasifikasi Diagnosis Penyakit Gagal Ginjal Berbasis Web Menggunakan Metode Algoritma C4.5 (Studi Kasus di RSUD Ciamis)"},{"cosim":0.057,"pembimbing":" 0521128502","judul":"Aplikasi Peringkas Teks Bahasa Indonesia Dengan Metode Clustering"},{"cosim":0.057,"pembimbing":"0530077601","judul":"Aplikasi Kamus Slang Menggunakan Metode Brute Force"},{"cosim":0.056,"pembimbing":"0530077601","judul":"Penerapan Metode InterPenerapan Metode Interpolation Search Pada Aplikasi Kamus Istilah Ekonomi"},{"cosim":0.054,"pembimbing":"0019087601","judul":"Analisis Bukti Digital Forensik pada Aplikasi Wechat dengan Metode NIST"},{"cosim":0.053,"pembimbing":"0509048901","judul":"Optimasi keamanan Plug-in pada Open Journal Sistem(OJS Versi 0.3)2.Rancang Bangun IoT Forensics pada perangkat Mobile 3.IoT Attack berbasis Open Router"},{"cosim":0.052,"pembimbing":"0407016801","judul":"Pembuatan Model Prediksi Dampak Kecelakaan Lalu Lintas pada Pengguna Jalan Menggunakan Klasifikasi Data Mining dengan Metode Pohon Keputusan (studi kasus : Polres Bantul)"},{"cosim":0.05,"pembimbing":" 0407016801","judul":"Studi dan Implementasi Teori Graf Untuk Mengukur Tingkat Kepentingan Aktor dalam SOP Akademik UAD"},{"cosim":0.047,"pembimbing":"0506016701","judul":"Aplikasi kamus bahasa indonesia -ngapak berbasis web dengan metode sequential search"},{"cosim":0.044,"pembimbing":"0407016801","judul":"Studi dan Implementasi Data Mining Asociation Rule Untuk Menentukan Pola Layouting Katalog Penawaran Kaos Jogja Distri Muslim"},{"cosim":0.043,"pembimbing":"0530077601","judul":"Penerapan Algoritma Boyer-Moore Dalam Aplikasi Kamus Istilah Broadcasting"},{"cosim":0.043,"pembimbing":"0510088001","judul":"Analisis ForensikDigital pada Aplikasi Twitter untuk Penanganan Cybercrime"},{"cosim":0.04,"pembimbing":"0504116601","judul":"Aplikasi Pembelajaran Anak Soleh Menggunakan Media Permainan Puzzle Berbasis Android"},{"cosim":0.04,"pembimbing":"0510077302","judul":"Aplikasi Multimedia Interaktif dengan Model Addie Pada Mata Pelajaran Pancasila"},{"cosim":0.039,"pembimbing":"0521127303","judul":"Analisis Pencarian Berita Hoax pada Aplikasi Whatsapp Messenger Berbasis Web"},{"cosim":0.038,"pembimbing":"0530077601","judul":"Pengembangan Aplikasi Stemming Pencarian Kata Dasar Dalam bahasa Inggris Menggunakan Algoritma Porter"},{"cosim":0.038,"pembimbing":"0516127501","judul":"Pengembangan Aplikasi Topik Tugas Akhir Mahasiswa Sastra Inggris dengan Menggunakan Cosine Similarity"},{"cosim":0.037,"pembimbing":"0019087601","judul":"Analisis Firewall Aplikasi Web Untuk Pencegahan SQL Injection Menggunakan Naysi"},{"cosim":0.037,"pembimbing":"0530077601","judul":"Pembuatan Aplikasi Kamus Percakapan Bahasa Indonesia - Bahasa Jepang"},{"cosim":0.036,"pembimbing":"0509048901","judul":"Forensic Mobile Pada Aplikasi Android E-commerve Menggunakan Logical Extraction Method"},{"cosim":0.034,"pembimbing":"0019087601","judul":"Aplikasi Pengamanan Dokumen Keuangan Digital Signature Menggunakan Advance Encryption Standard"},{"cosim":0.033,"pembimbing":"0504116601","judul":"Perancangan Aplikasi Android Macam-macam Shalat dan Gerakannya Untuk Media Pembelajaran Anak Sholeh Usia Dini"},{"cosim":0.032,"pembimbing":"0506016701","judul":"Analisa dan Perbandingan Bukti Forensik Aplikasi Media Sosial Facebook dan Twitter pada Smartphone Android"},{"cosim":0.031,"pembimbing":"0504116601","judul":"Aplikasi Android Pembelajaran Anak Sholeh Tentang Game Tebak Gambar Untuk Anak PAUD Menggunakan Android Studio"},{"cosim":0.03,"pembimbing":"0523068801","judul":"Penerapan Markerless Defined Target Untuk Aplikasi Perencana Tata Letak Perabot Berbasis Augmented Reality"},{"cosim":0.03,"pembimbing":"0523068801","judul":"Perancangan Desain User Interface dan User Experience Aplikasi Chains"},{"cosim":0.03,"pembimbing":"0504116601","judul":"Aplikasi Android Pembelajaran Anak Sholeh Tentang Game Tebak Huruf Hijaiyah Untuk Anak Paud Menggunakan Android Studio"},{"cosim":0.027,"pembimbing":"0507087202","judul":"Implementasi Service Oriented Architecture Pada Aplikasi Pemesanan Makanan Berbasis Mobile Android Di Kantin ADI Kampus 3 UAD"},{"cosim":0.021,"pembimbing":"0530077601","judul":"Perancangan Aplikasi Kamus Istilah Kesenian Pada Fakultas Seni Rupa Institut Seni Indonesia (ISI) Yogyakarta Dengan Menggunakan Spellcheck Leuenstein Distance Berbasis Web"},{"cosim":0.013,"pembimbing":" 0407016801","judul":"Penentuan Kelayakan Tempat Tinggal Dengan Menggunakan Metode K-Means Clustering"},{"cosim":0.012,"pembimbing":"0507087202","judul":"Sistem Informasi Penjualan dengan Berbasis Web dengan Metode CRM"},{"cosim":0.012,"pembimbing":"0511098401","judul":"Penerapan Text Mining Dalam Pengelompokkan Data Kerja Praktek Menggunakan Metode K-Means"},{"cosim":0.012,"pembimbing":"0507087202","judul":"Sistem Informasi Penjualan dengan Berbasis Mobile dengan Metode CRM"},{"cosim":0.011,"pembimbing":"0512078304","judul":"Clustering data Mahasiswa FTI dengan Metode Fuzzy C-Means"},{"cosim":0.011,"pembimbing":"0511098401","judul":"Pengelompokan data bank sampah menggunakan metode AHC"},{"cosim":0.011,"pembimbing":"0511098401","judul":"Pengelompokkan Data Kerja Praktek Teknik Kimia Menggunakan Metode K-Medoids"},{"cosim":0.011,"pembimbing":"0530077601","judul":"Pemeriksaan Makna Kalimat dengan Metode N-Grams"},{"cosim":0.011,"pembimbing":"0521128502","judul":"Sistem Pakar Diagnosa Masalah Kehamilan Menggunakan Metode Fuzzy Tsukamoto"},{"cosim":0.01,"pembimbing":"0510088001","judul":"Analisis Forentik Malicious pada Hardisk dengan Menggunakan Metode (NPJ)"},{"cosim":0.01,"pembimbing":" 0407016801","judul":"penerapan data mining untuk clustering prediksi penyakit ispa dengan metode k-means"},{"cosim":0.01,"pembimbing":"0510077302","judul":"Deteksi Perubahan Objek Menggunakan Metode Template Matching"},{"cosim":0.01,"pembimbing":"0522018302","judul":"Implementasi Metode Cart Untuk Mendiagnosa Penyakit Hepatitis A pada Anak"},{"cosim":0.01,"pembimbing":"0521127303","judul":"Forensik Email untuk Mendeteksi Serangan Phishing Menggunakan Metode NIST"},{"cosim":0.01,"pembimbing":"0407016801","judul":"Implementasi pengelompokan data kerja praktek prodi teknik informatika menggunakan metode K-Means"},{"cosim":0.01,"pembimbing":"0512078304","judul":"penggunaan metode c45 clustering dalam penentuan penerima beasiswa universitas ahmad dahlan yogyakarta"},{"cosim":0.01,"pembimbing":"0510077302","judul":"Sistem Pendukung Keputusan Pemilihan Suppllied Kain Menggunakan Metode Promotehee"},{"cosim":0.01,"pembimbing":"0504088601","judul":"Sistem Pendukung Keputusan Pemilihan Kamera DSLR dengan Metode AHP"},{"cosim":0.01,"pembimbing":" 0523077902","judul":"Clustering Analisis Sentimen Pada Indeks Kinerja Dosen Menggunakan Metode K Means"},{"cosim":0.01,"pembimbing":"0507087202","judul":"Pencarian SPBU Terdekat di Kota Yogyakarta Menggunakan Metode Djikstra Berbasis Android"},{"cosim":0.01,"pembimbing":"0516127501","judul":"Sistem Penentuan Kelayakan Usaha Industri Rumahan Dengan Metode Profile Matching"},{"cosim":0.01,"pembimbing":"0510088001","judul":"Analisis Investigasi Forensik Telegram Messenger Berbasis Web Metode NIST"},{"cosim":0.01,"pembimbing":"0523068801","judul":"Penerapan Metode Dictation Grammar Pada Virtual Asistant Cloud"},{"cosim":0.01,"pembimbing":"0507087202","judul":"Sistem Pendukung Keputusan Persetujuan Kredit Usaha Mikro dengan Metode (Moora)"},{"cosim":0.01,"pembimbing":"0407016801","judul":"Penerapan Data Mining untuk Klasterisasi Pemustaka dengan Metode KMeans Berdasarkan Kunjungan"},{"cosim":0.01,"pembimbing":"0521127303","judul":"Analisis Bukti Digital Serangan Bomb Mail Menggunakan Metode NIST"},{"cosim":0.01,"pembimbing":"0523068801","judul":"Pengembangan rekomendasi sistem pada reservasi wisata dengan menerapkan metode profile matching"},{"cosim":0.01,"pembimbing":"0521128502","judul":"Sistem Pakar Diagnosa Penyakit Sapi Menggunakan Metode Fuzzy C-Means Clustering"},{"cosim":0.009,"pembimbing":"0510077302","judul":"Penerapan Data Mining Penjualan Sepatu Menggunakan Metode Klasifikasi Algoritma Apriori dan C45"},{"cosim":0.009,"pembimbing":"0511098401","judul":"Penerapan Metode Naive Bayes dalam pengidentifikasian kualitas kesuburan tanah"},{"cosim":0.009,"pembimbing":"0511098401","judul":"Pengelompokkan Judul Penelitian Dosen Menggunakan Metode Suffix Tree Clustering"},{"cosim":0.009,"pembimbing":"0407016801","judul":"Penerapan data mining untuk memprediksi kelulusan mahasiswa berdasarkan kunjungan di perpustakaan dengan metode C45"},{"cosim":0.009,"pembimbing":"0522018302","judul":"SPK investasi perusahaan di bei dengan metode rasio keuangan"},{"cosim":0.009,"pembimbing":"0519108901","judul":"Analysis & Implementasi kelayakan website Bimawa UAD dengan Metode Usability Testing"},{"cosim":0.009,"pembimbing":"0019087601","judul":"Evaluasi Kualitas Website Digilib UAD Menggunakan Metode Usability Testing"},{"cosim":0.009,"pembimbing":"0006027001","judul":"Steganografi Gambar Dengan Metode LSB Untuk Proteksi Komunikasi Pada Media Online"},{"cosim":0.009,"pembimbing":"0530077601","judul":"Perancangan Chatbot Penerimaan Mahasiswa baru Menggunakan Metode AIML Sebagai Virtual Assistant Berbasis Web"},{"cosim":0.009,"pembimbing":"0523068801","judul":"Pengembangan Model 3d Untuk Game Portal Akademik Menggunakan Metode Digital Sculpting"},{"cosim":0.009,"pembimbing":"0509048901","judul":"Mobile Forensic Instant Messenger Berbasis Android Menggunakan Metode Live Forensic"},{"cosim":0.009,"pembimbing":"0530077601","judul":"Pengembangan Stemming Bahasa Jawa Menggunakan Metode Algoritma Porter Untuk Mencari Akar Kata"},{"cosim":0.009,"pembimbing":"0521128502","judul":"Sistem Pakar Diagnosa Penyakit Gigi dan Mulut dengan Metode Na\u00efve Bayes"},{"cosim":0.009,"pembimbing":"0510088001","judul":"Investigasi Forensik Tindak Kejahatan E-Commerce dengan Metode Eksperiment Reaserch"},{"cosim":0.009,"pembimbing":"0519108901","judul":"Sistem Rekomendasi Pembelian Smartphone Menggunakan Metode K-Nearst Neighboard (KNN)"},{"cosim":0.009,"pembimbing":"0526018502","judul":"Aplkasi Pendeteksi Kemiripan Portal Berita Online Menggunakan Metode Lavenstein Distance"},{"cosim":0.009,"pembimbing":"0505118901","judul":"Sistem pendukung keputusan pemilihan smartphone menggunakan metode analitical hierarchy process "},{"cosim":0.009,"pembimbing":"0507087202","judul":"Sistem Pendukung Pengambilan Keputusan untuk Penerimaan Pegawai dengan Metode SAW (Simple Additive Weighting)"},{"cosim":0.008,"pembimbing":"0512078304","judul":"Text mining dalam klarifikasi dan pencarian judul buku pada perpustakaan menggunakan metode naive bayes"},{"cosim":0.008,"pembimbing":"0520098702","judul":"Penerapan Metode Motion Graphic Pada Video Animasi Kerja Praktek DI Teknik Informaika Universitas Ahmad Dahlan"},{"cosim":0.008,"pembimbing":"0520098702","judul":"Implementasi Metode Motion Graphic Pada Video Animation Pendaftaran Offline di Universitas Ahmad Dahlan"},{"cosim":0.008,"pembimbing":"0530077601","judul":"Pengelompokkan Hasil Temuan Audit Mutu Internal Universitas Ahmad Dahlan Dengan Metode K-Means"},{"cosim":0.008,"pembimbing":"0526018502","judul":"Rekomendasi Website Pemesanan Hotel Menggunakan Metode Analytic Network Proccess (AMP)"},{"cosim":0.008,"pembimbing":"0521128502","judul":"Sistem Pakar Diagnosa Kerusakan Mobil Mitsubishi MVP dengan Menggunakan Metode Fuzzy K-NN"},{"cosim":0.008,"pembimbing":"0516127501","judul":"Sistem Pendukung Keputusan Pentuan Kelayakan Industri Rumahan dengan Metode Simple Additive Weighting (SAW)"},{"cosim":0.008,"pembimbing":"0523077902","judul":"Implementasi Chatbot Pada Sistem Penerimaan Mahasiswa Baru Universitas Ahmad Dahlam Dengan Metode Vector Space Model"},{"cosim":0.008,"pembimbing":"0407016801","judul":"Penerapan text mining pengelompokkan judul manajemen tugas proyek menggunakan metode k-means dengan cosine similarity"},{"cosim":0.008,"pembimbing":"0511098401","judul":"Penerapan Data Mining dalam Melakukan Analisis Pola Asosiasi Menggunakan Metode FP.Growht Pada Data Nilai Mahasiswa T.Industri"},{"cosim":0.008,"pembimbing":"0505118901","judul":"Sistem Pendukung Keputusan Penentuan Serbuk Kayu Untuk Menentukan Tumbuh Kembang Jamur Menggunakan Metode Simple Additive Weighting"},{"cosim":0.008,"pembimbing":"0516127501","judul":"Penerapan Data Mining untuk Memprediksi Penentuan Skripsi Prodi Sastra Inggris UAD Menggunakan Metode Cosine Similarity"},{"cosim":0.008,"pembimbing":"0520098702","judul":"Penerapan Metode Image Stitching Pada Pembuatan Virtual Reality Pengenalan Islamic Center Universitas Ahmad Dahlan"},{"cosim":0.008,"pembimbing":"0505118901","judul":"Analisis Pengaruh Game Pada Aktivitas Kognitif Anak Menggunakan Alat EEG dengan Metode K-Means dan Cluster"},{"cosim":0.008,"pembimbing":"0522018302","judul":"Sistem pengambilan keputusan inventory obat pada puskesmas sukorejo 1 kendal dengan metode fifo"},{"cosim":0.008,"pembimbing":"0530077701","judul":"Menentukan Kualitas Daun Teh Kering Menggunakan Metode Gray Level Co-Occurrence Matrix"},{"cosim":0.008,"pembimbing":"0505118901","judul":"Sistem Pendukung Keputusan Pemilihan Kain Tenun Ende Lio Menggunakan Metode Simple Additive Weighting"},{"cosim":0.008,"pembimbing":"0521128502","judul":"Sistem Pakar Diagnosis Hama dan Penyakit Tanaman Kelapa Sawit Menggunakan Metode Dempster Shafer"},{"cosim":0.008,"pembimbing":"0507087202","judul":"Pencarian Atm BNI Terdekat di Kota Yogyakarta Menggunakan Metode Koloni Berbasis Android"},{"cosim":0.008,"pembimbing":"0526018502","judul":"penerapan Search Engine Optimisation dengan metode result rich snippet google pada muslim-bloggers.com"},{"cosim":0.008,"pembimbing":"0511098401","judul":"Penerapan Data Mining untuk Pengelompokkan Data Pelanggan Agen Lion Parcel dengan Metode Fuzzy C-means"},{"cosim":0.008,"pembimbing":"0015118001","judul":"Rekomendasi Jenis Tanaman Pangan Berdasarkan Data Prediksi Cuaca Menggunakan Metode Simple Additive Weighting (SAW)"},{"cosim":0.008,"pembimbing":"0505118901","judul":"Klassifikasi Jenis Kayu Berdasarkan Kode Mutu Kayu Dengan Menggunakan Metode K-Means"},{"cosim":0.008,"pembimbing":"0523068801","judul":"Penambahan Chapter 3 pada Game Legenda Karna : Sang Anak Surya dengan metode Rapid Application Development"},{"cosim":0.008,"pembimbing":"0505118901","judul":"Sistem Pengenalan Dosen Di Kampus Melalui Kamera Pengawas Dengan Metode Background Subtraction dan Eigenface"},{"cosim":0.007,"pembimbing":"0523068801","judul":"Penerapan Metode Flexible Pointer Pada Simulasi Interaktif Pengenalan Anatomi Gigi Manusia Berbasis Virtual Reality"},{"cosim":0.007,"pembimbing":"0516127501","judul":"Sistem Penentuan Potensi Daerah Industri Rumahan Wilayah Kabupaten Bantuk Dengan Metode Transfer Learning"},{"cosim":0.007,"pembimbing":"0526018502","judul":"Sistem Pendeteksi Kemiripan Dokumen Artikel Dosen Pada Eprint UAD Menggunakan Metode Latent Semantic Analysis (LSA)"},{"cosim":0.007,"pembimbing":"0521127303","judul":"Investigasi Forensik pada E-Mail Spooting Menggunakan Metode Networks Forensik Development Life Cycle (NFDLC)"},{"cosim":0.007,"pembimbing":"0015118001","judul":"Penentuan Masa Tanam Tanaman Pangan Berdasarkan Cuaca dan Hasil Panen Menggunakan Metode Na\u00efve Bayes"},{"cosim":0.007,"pembimbing":"0019087601","judul":"Evaluasi Kualitas Website PPDB.smkn1karimun.sch.id menggunakan Framework webquel. Dan Analisa Metode Quality Function Deployment (QFD)"},{"cosim":0.007,"pembimbing":"0505118901","judul":"Perancangan Game The Adventure of West-Born Guardian Menggunakan Metode Multimedia Development Life Cycle Berbasis Adobe Flash"},{"cosim":0.007,"pembimbing":"0523068801","judul":"Game Edukasi Huruf Hijaiyah dan Surah Berbasis Android Sebagai Media Digital Belajar Anak Usia Dini Dengan Teknik Animasi Komputer Menggunakan Metode MDLC"},{"cosim":0.007,"pembimbing":"0510077302","judul":"Deteksi Kematangan Buah Naga Menggunakan Metode Na\u00efve Bayes Berbasis Ruang Warna Hue Saturation Value"},{"cosim":0.006,"pembimbing":"0520098702","judul":"Penerapan Metode Stop Motion Animation Pada Video Profil Kelompok Keilmuan Relata Dan Sistem Cerdas Prodi Teknik Informatika UAD"},{"cosim":0.006,"pembimbing":"0520098702","judul":"Penerapan metode frame by frame pada iklan layanan masyarakat menejemen tugas proyek teknik informatika universitas ahmad dahlan."},{"cosim":0.006,"pembimbing":"0019087601","judul":"Penerapan Kriptografi Advanced Encryption Standard (AES) dan Steganografi Metode Least Significant Bit (LSB) Untuk Mengingkatkan Keamanan Data Cloud Computing"},{"cosim":0.006,"pembimbing":"0521128502","judul":"Penerapan metode Association Rules menggunakan algoritma apriori untuk mengidentifikasi fitur yang sering diakses bersamaan pada log data akses portal dosen universitas ahmad dahlan"},{"cosim":0.006,"pembimbing":"0506016701","judul":"Sistem Pendukung Keputusan Pembagian Daging Hewan Qurban Dipadukuhan Samirono Dengan Metode Fuzzy Multi Decission Making (FDADM) dan Simple Addative Weighting (SAW)"}]'
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
    }
}
