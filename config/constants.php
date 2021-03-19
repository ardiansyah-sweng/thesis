<?php

/**
 *  PERHATIAN!
 *  Setiap kali memodifikasi config, harus diakhiri dengan perintah: "php artisan config:cache"
 *  Agar config terbaru bisa aktif  
 */

return array(

    /**
     * STATUS MAHASISWA SKRIPSI
     * open: Mahasiswa masih bisa memilih/mendaftar topik skripsi
     * blocked: Mahasiswa dalam masa karantina, tidak bisa mendaftar topik skripsi lain, dalam kurun waktu tertentu
     * metopen: Mahasiswa sedang dalam masa metopen
     * skripsi: Mahasiswa sedang dalam masa skripsi
     * lulus: mahasiswa sudah lulus pendadaran
     */
    'status_mahasiswa' => array( 'open' => 0, 'blocked' => 1, 'metopen' => 2, 'skripsi' => 3, 'lulus' => 4 ),
    
    /**
     * STATUS TOPIK TUGAS AKHIR
     * open: Topik masih dibuka, sehingga mahasiswa bisa mendaftar topik tersebut
     * closed: Topik sudah ditutup, mahasiswa terpilih sudah definitif
     * finished: Topik sudah selesai, mahasiswa sudah lulus pendadaran
     */
    'status_topik_skripsi' => array( 'open' => 0, 'closed' => 1, 'finished' => 2),

    /**
     * Lama skripsi ideal dalam bulan
     */
    'lama_skripsi_ideal' => 6,

    /**
     * Jam awal dan akhir kerja tiap hari
     */
    'jam_kerja' => array('awal' => '07:00:00', 'akhir' => '17:00:00'),

    /**
     * Jenis ujian 
     */
    'jenis_ujian' => array('seminar_proposal' => 0, 'pendadaran' => 1),

    /**
     * Durasi ujian pendadaran dalam detik
     */
    'durasi_pendadaran' => 7200,

    /**
     * Lama seorang mahasiswa diblock dalam hari, sehingga tidak bisa memilih/mendaftar suatu topik skripsi
     */
    'blocking_time' => 5,

    /**
     * Jumlah penguji
     */
    'jumlah_penguji' => 2,

    /**
     * Susunan penguji sudah fixed atau belum
     */
    'isFixed' => 1,
);