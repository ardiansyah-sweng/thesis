<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    # Jumlah bimbingan sepanjang masa (skripsi + metopen + lulus)
    public function getJumlahAllBimbingan($nipy)
    {
        // Refaktor menggunakan query builder
        return DB::select('SELECT COUNT(*) as jumlahBimbingan
            FROM topik_tugas_akhir topik
            JOIN mahasiswa mhs ON mhs.nim = topik.nim_terpilih_fk
            WHERE topik.nipy_fk_nipy = ' . $nipy);
    }

    # Ambil jumlah bimbingan aktif (skripsi + metopen)
    public function getJumlahBimbinganAktif($nipy)
    {
        // Refaktor menggunakan query builder
        return DB::select('SELECT COUNT(*) as jumlahBimbinganSkripsiMetopen
            FROM topik_tugas_akhir topik
            JOIN mahasiswa mhs ON mhs.nim = topik.nim_terpilih_fk
            WHERE topik.nipy_fk_nipy = ' . $nipy . ' AND (mhs.status = ' . config('constants.status_mahasiswa.metopen') . ' OR mhs.status = ' . config('constants.status_mahasiswa.skripsi') . ')
        ');
    }

    # Rerata lama pengerjaan skripsi mahasiswa yang telah lulus
    public function rerataLamaSkripsi($nipy)
    {
        // Refaktor menggunakan query builder
        return DB::select('SELECT AVG(TIMESTAMPDIFF(month, uji.tanggalSemprop, uji.tanggalPendadaran)) AS rerataLamaSkripsi
            FROM topik_tugas_akhir topik
            JOIN mahasiswa mhs ON mhs.nim = topik.nim_terpilih_fk
            JOIN ujian uji ON uji.idTopikSkripsiFK = topik.id
            WHERE topik.nipy_fk_nipy = ' . $nipy . ' AND mhs.status = ' . config('constants.status_mahasiswa.lulus') . '
        ');
    }

    /**
     * Persentase mahasiswa yang menyelesaikan skripsi tepat waktu
     * Persentase = jumlah bimbingan yang lulus tepat waktu / jumlah bimbingan yang lulus
     * Return nilai 
     */
    
    public function persentaseBimbinganTepatWaktu($nipy)
    {
        // Refaktor menggunakan query builder
        $jumBimbinganTepatWaktu = DB::select('SELECT COUNT(*) AS jumlahBimbinganTepatWaktu
                FROM topik_tugas_akhir topik
                JOIN mahasiswa mhs ON mhs.nim = topik.nim_terpilih_fk
                JOIN ujian uji ON uji.idTopikSkripsiFK = topik.id
                WHERE topik.nipy_fk_nipy = ' . $nipy . ' AND mhs.status = ' . config('constants.status_mahasiswa.lulus') . ' AND TIMESTAMPDIFF(month, uji.tanggalSemprop, uji.tanggalPendadaran) <= ' . config('constants.lama_skripsi_ideal') . '
        ');

        $jumlahAllBimbingan = $this->getJumlahAllBimbingan($nipy);

        // Refaktor tidak perlu pakai foreach atau buat dalam satu query saja
        foreach ($jumBimbinganTepatWaktu as $x) {
            foreach ($jumlahAllBimbingan as $y) {
                if ($x->jumlahBimbinganTepatWaktu == 0 or $y->jumlahBimbingan == 0) {
                    return 0;
                } else {
                    return $x->jumlahBimbinganTepatWaktu / $y->jumlahBimbingan;
                }
            }
        }
    }

    /**
     * Mendapatkan seluruh mahasiswa bimbingan
     * 
     * Kolom:
     * - id
     * - nim
     * - nama_mahasiswa
     * - judul_topik
     * - periode
     * - nipyPenguji1
     * - namaPenguji1
     * - avatarPenguji1
     * - nipyPenguji2
     * - namaPenguji2
     * - avatarPenguji2
     * - lamaSkripsiHinggaLulusDalamBulan
     * - lamaPropsesSedangSkripsiDalamBulan
     */
    public function getAllMahasiswaBimbingan($nipy)
    {
        $lulus = config('constants.status_mahasiswa.lulus');
        $metopen = config('constants.status_mahasiswa.metopen');
        $skripsi = config('constants.status_mahasiswa.skripsi');
        $open = config('constants.status_mahasiswa.open');
        $blocked = config('constants.status_mahasiswa.blocked');

        // Refaktor: menggunakan hash untuk mempercepat
        return DB::select('SELECT topik.id, mhs.nim, mhs.nama_mahasiswa, topik.judul_topik, topik.periode, penguji1.nipy AS nipyPenguji1, penguji1.nama AS namaPenguji1, penguji1.avatar AS avatarPenguji1, penguji2.nipy AS nipyPenguji2, penguji2.nama AS namaPenguji2, penguji2.avatar AS avatarPenguji2, TIMESTAMPDIFF(month, uji.tanggalSemprop, uji.tanggalPendadaran) AS lamaSkripsiHinggaLulusDalamBulan, TIMESTAMPDIFF(month, uji.tanggalSemprop, CURRENT_DATE()) AS lamaProsesSedangSkripsiDalamBulan,
            CASE mhs.status 
                WHEN '.$open.' THEN '.$open.'
                WHEN '.$blocked.' THEN '.$blocked.'
                WHEN '.$metopen.' THEN '.$metopen.'
                WHEN '.$skripsi.' THEN '.$skripsi.'
                WHEN '.$lulus.' THEN  '.$lulus.'
            END AS statusSkripsiMahasiswa
            FROM topik_tugas_akhir topik
            JOIN mahasiswa mhs ON mhs.nim = topik.nim_terpilih_fk
            LEFT OUTER JOIN ujian uji ON uji.idTopikSkripsiFK = topik.id
            LEFT JOIN dosen penguji1 ON penguji1.nipy = uji.nipyPenguji1
            LEFT JOIN dosen penguji2 ON penguji2.nipy = uji.nipyPenguji2
            WHERE topik.nipy_fk_nipy = ' . $nipy . '
            ORDER BY statusSkripsiMahasiswa = '.$skripsi.' DESC');
    }
}
