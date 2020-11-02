<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopikSkripsi extends Model
{
    protected $table = 'topik_tugas_akhir';
    protected $fillable = ['judul_topik', 'deskripsi'];

    /**
     * Mendapatkan seluruh topik skripsi
     * Kolom yang dihasilkan:
     * - nipyDosbing
     * - namaDosbing
     * - avatarDosbing
     * - idTopikSkripsi
     * - idTopikBidangSkripsi
     * - judulTopikSkripsi
     * - deskripsiTopikSkripsi
     * - namaMahasiswaTerpilih
     * - nimMahasiswaTerpilih
     * - statusTopikSkripsi { open, closed}
     * - jumlahPendaftarTopikSkripsi
     * - sisaBlockingDay { tanggal ambil topik - tanggal expired }
     */
    public function getAllTopikSkripsi()
    {
        return DB::select('SELECT dosen.nipy AS nipyDosbing, dosen.avatar AS avatarDosbing, topik.id AS idTopikSkripsi, topik_bidang.topik_bidang AS topikBidangSkripsi, dosen.nama AS namaDosbing, topik.judul_topik AS judulTopikSkripsi, mhs.nama_mahasiswa AS namaMahasiswaTerpilih, topik.deskripsi AS deskripsiTopikSkripsi, topik.status AS statusTopikSkripsi, topik.nim_terpilih_fk AS nimMahasiswaTerpilih, COUNT(ambil.topik_tugas_akhir_id) AS jumlahPendaftarTopikSkripsi, TIMESTAMPDIFF(DAY, ambil.created_at, DATE_FORMAT(date(ambil.created_at) + '.config('constants.blocking_time').', "%Y-%m-%d")) AS sisaBlockingDay
            FROM topik_tugas_akhir topik
            JOIN dosen ON dosen.nipy = topik.nipy_fk_nipy
            LEFT OUTER JOIN mahasiswa mhs ON mhs.nim = topik.nim_terpilih_fk
            JOIN topik_bidang ON topik_bidang.id = topik.topik_bidang_fk_id
            LEFT OUTER JOIN ambil_topik_tugas_akhir ambil ON ambil.topik_tugas_akhir_id = topik.id
            GROUP BY topik.id
            ORDER BY topik.created_at');
    }

    /**
     * Mendapatkan detail satu topik skripsi berdasarkan ID tertentu
     * Kolom yang dihasilkan:
     * - idTopikSkripsi
     * - topik_bidang
     * - judulTopikSkripsi
     * - deskripsiTopikSkripsi
     * - statusTopikSkripsi { open, closed}
     * - namaDosbing
     * - emailDosbing
     * - avatarDosbing
     * - nipyDosbing
     * - namaMahasiswaTerpilih
     * - emailMahasiswaTerpilih
     * - namaPenguji1
     * - namaPenguji2
     * - avatarPenguji1
     * - avatarPenguji2
     * - mahasiswa_terpilih
     * - jumlahPendaftarTopikSkripsi
     */
    public function getDetailTopikSkripsiByID($id)
    {
        return DB::select('SELECT topik_bidang.topik_bidang, dosen.nama AS namaDosbing, dosen.email_dosen AS emailDosbing, topik.nipy_fk_nipy AS nipyDosbing,
            mhs.email_mahasiswa AS emailMahasiswaTerpilih, topik.id AS idTopikSkripsi, topik.judul_topik AS judulTopikSkripsi, topik.deskripsi AS deskripsiTopikSkripsi, topik.status AS statusTopikSkripsi, mhs.nama_mahasiswa AS namaMahasiswaTerpilih, penguji1.nama AS namaPenguji1, penguji2.nama AS namaPenguji2, dosen.avatar AS avatarDosbing, penguji1.avatar AS avatarPenguji1, penguji2.avatar AS avatarPenguji2,
            IF (topik.nim_terpilih_fk = 0, "Belum ada", mhs.nama_mahasiswa) AS mahasiswa_terpilih,
            IF (COUNT(ambil.topik_tugas_akhir_id) = 0, "Belum ada", COUNT(ambil.topik_tugas_akhir_id)) AS jumlahPendaftarTopikSkripsi
            FROM topik_tugas_akhir topik
            JOIN dosen ON dosen.nipy = topik.nipy_fk_nipy
            JOIN topik_bidang ON topik_bidang.id = topik.topik_bidang_fk_id
            LEFT OUTER JOIN ujian ON ujian.idTopikSkripsiFK = topik.id
            LEFT OUTER JOIN dosen penguji1 ON penguji1.nipy = ujian.nipyPenguji1
            LEFT OUTER JOIN dosen penguji2 ON penguji2.nipy = ujian.nipyPenguji2
            LEFT OUTER JOIN mahasiswa mhs ON mhs.nim=topik.nim_terpilih_fk
            LEFT OUTER JOIN ambil_topik_tugas_akhir ambil ON ambil.topik_tugas_akhir_id = topik.id
            WHERE topik.id = ' . $id . '
            GROUP BY topik.id');
    }    

    # Get mahasiswa yang mengambil/mendaftar topik skripsi
    public function getMahasiswaAmbilTopikSkripsi($nim)
    {
        return DB::select('SELECT ambil.topik_tugas_akhir_id AS idTopikSkripsi, TIMESTAMPDIFF(DAY, ambil.created_at, DATE_FORMAT(date(ambil.created_at) + '.config('constants.blocking_time').', "%Y-%m-%d")) AS sisaBlockingDay
            FROM ambil_topik_tugas_akhir ambil
            WHERE ambil.nim_fk_nim = ' . $nim);
    }

    # Mendapatkan total topik skripsi sepanjang masa
    public function totalTopikSkripsi()
    {
        return DB::table('topik_tugas_akhir')->count();
    }

    # Mendapatkan seluruh topik skripsi buat mahasiswa
    public function getAllTopikSkripsiBuatMahasiswa()
    {
        return DB::select('SELECT dosen.nipy, topik.id, topik_bidang.topik_bidang, dosen.nama, topik.judul_topik, mhs.nama_mahasiswa, topik.deskripsi, topik.status, topik.nim_terpilih_fk, dosen.avatar AS avatarPembimbing, COUNT(ambil.topik_tugas_akhir_id) AS jumlah_pendaftar
            FROM topik_tugas_akhir topik
            JOIN dosen ON dosen.nipy = topik.nipy_fk_nipy
            LEFT OUTER JOIN mahasiswa mhs ON mhs.nim=topik.nim_terpilih_fk
            JOIN topik_bidang ON topik_bidang.id = topik.topik_bidang_fk_id
            LEFT OUTER JOIN ambil_topik_tugas_akhir ambil ON ambil.topik_tugas_akhir_id = topik.id
            GROUP BY topik.id
            ORDER BY topik.status');
    }

    /**
     * Mendapatkan daftar mahasiswa yang mendaftar satu topik skripsi tertentu berdasarkan ID topik skripsi
     * 
     * Kolom yang dihasilkan:
     * - namaMahasiswaMendaftarTopikSkripsi
     * - nimMahasiswaMendaftarTopikSkripsi
     * - emailMahasiswaMendaftarTopikSkripsi
     * - judulTopikSkripsi
     */
    
    public function getAllMahasiswaMendaftarTopikSkripsiByID($id)
    {
        return DB::select('SELECT mhs.nama_mahasiswa AS namaMahasiswaMendaftarTopikSkripsi, mhs.nim AS nimMahasiswaMendaftarTopikSkripsi, mhs.email_mahasiswa AS emailMahasiswaMendaftarTopikSkripsi, topik.judul_topik AS judulTopikSkripsi
                FROM ambil_topik_tugas_akhir ambil
                JOIN mahasiswa mhs ON mhs.nim=ambil.nim_fk_nim
                JOIN topik_tugas_akhir topik ON topik.id = ambil.topik_tugas_akhir_id
                WHERE topik.id = ' . $id);
    }

    # Ambil satu topik skripsi tertentu
    public function getTopikSkripsiByID($id)
    {
        return DB::selectOne('SELECT topik_bidang.topik_bidang , topik_tugas_akhir.judul_topik, topik_tugas_akhir.deskripsi, topik_tugas_akhir.topik_bidang_fk_id,topik_tugas_akhir.id 
            FROM topik_bidang JOIN topik_tugas_akhir
            ON topik_bidang.id = topik_tugas_akhir.topik_bidang_fk_id 
            where topik_tugas_akhir.id =' . $id);
    }

    /**
     * Membuat rule ambil topik
     * 
     * Kolom yang dihasilkan:
     * - 
     */
    public function ruleAmbilTopik($nim, $id)
    {
        return  DB::select('SELECT mhs.nama_mahasiswa, mhs.nim, mhs.email_mahasiswa, mhs.status, topik.judul_topik, COUNT(ambil.topik_tugas_akhir_id) as jumlah_topik,
        (SELECT DATEDIFF(CURRENT_DATE(), created_at) AS DateDiff from ambil_topik_tugas_akhir WHERE nim_fk_nim = ' . $nim . ' ORDER by created_at DESC LIMIT 1) as masa_blocking
        FROM ambil_topik_tugas_akhir ambil
        JOIN mahasiswa mhs ON mhs.nim = ambil.nim_fk_nim
        JOIN topik_tugas_akhir topik ON topik.id = ambil.topik_tugas_akhir_id
        WHERE mhs.nim=' . $nim . ' AND ambil.topik_tugas_akhir_id =' . $id);
    }
}
