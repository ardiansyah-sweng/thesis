<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopikTugasAkhir extends Model
{
    protected $table = 'topik_tugas_akhir';
    protected $fillable = ['judul_topik', 'deskripsi'];

    # Mendapatkan seluruh topik skripsi buat Dosen
    public function getAllTopikSkripsi()
    {
        return DB::select('SELECT dosen.nipy, dosen.avatar AS avatarPembimbing, topik.id, topik_bidang.topik_bidang, dosen.nama, topik.judul_topik, mhs.nama_mahasiswa, topik.deskripsi, topik.status, topik.nim_terpilih_fk, COUNT(ambil.topik_tugas_akhir_id) AS jumlah_pendaftar
            FROM topik_tugas_akhir topik
            JOIN dosen ON dosen.nipy = topik.nipy_fk_nipy
            LEFT OUTER JOIN mahasiswa mhs ON mhs.nim=topik.nim_terpilih_fk
            JOIN topik_bidang ON topik_bidang.id = topik.topik_bidang_fk_id
            LEFT OUTER JOIN ambil_topik_tugas_akhir ambil ON ambil.topik_tugas_akhir_id = topik.id
            GROUP BY topik.id
            ORDER BY topik.created_at');
    }

    # Get mahasiswa yang mengambil/mendaftar topik skripsi
    public function getMahasiswaAmbilTopikSkripsi($nim)
    {
        return DB::select('SELECT ambil.nim_fk_nim 
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
        return DB::select('SELECT dosen.nipy, topik.id, topik_bidang.topik_bidang, dosen.nama, topik.judul_topik, mhs.nama_mahasiswa, ambil.nim_fk_nim, topik.deskripsi, topik.status, topik.nim_terpilih_fk, dosen.avatar AS avatarPembimbing, COUNT(ambil.topik_tugas_akhir_id) AS jumlah_pendaftar
            FROM topik_tugas_akhir topik
            JOIN dosen ON dosen.nipy = topik.nipy_fk_nipy
            LEFT OUTER JOIN mahasiswa mhs ON mhs.nim=topik.nim_terpilih_fk
            JOIN topik_bidang ON topik_bidang.id = topik.topik_bidang_fk_id
            LEFT OUTER JOIN ambil_topik_tugas_akhir ambil ON ambil.topik_tugas_akhir_id = topik.id
            GROUP BY topik.id
            ORDER BY topik.status');
    }

    # Mendapatkan detail topik skripsi berdasarkan ID
    public function getDetailTopikSkripsiByID($id)
    {
        return DB::select('SELECT topik_bidang.topik_bidang, dosen.nama, dosen.email_dosen, 
            mhs.email_mahasiswa, topik.id, topik.judul_topik, topik.deskripsi, topik.status, mhs.nama_mahasiswa, 
            IF (topik.nim_terpilih_fk = 0, "Belum ada", mhs.nama_mahasiswa) AS mahasiswa_terpilih,
            IF (COUNT(ambil.topik_tugas_akhir_id) = 0, "Belum ada", COUNT(ambil.topik_tugas_akhir_id)) AS jumlah_pendaftar
            FROM topik_tugas_akhir topik
            JOIN dosen ON dosen.nipy = topik.nipy_fk_nipy
            JOIN topik_bidang ON topik_bidang.id = topik.topik_bidang_fk_id
            LEFT OUTER JOIN mahasiswa mhs ON mhs.nim=topik.nim_terpilih_fk
            LEFT OUTER JOIN ambil_topik_tugas_akhir ambil ON ambil.topik_tugas_akhir_id = topik.id
            WHERE topik.id = ' . $id . '
            GROUP BY topik.id');
    }

    # Mendapatkan daftar mahasiswa yang mendaftar topik skripsi tertentu
    public function getAllMahasiswaMendaftarTopikSkripsiByID($id)
    {
        return DB::select('SELECT mhs.nama_mahasiswa, mhs.nim, mhs.email_mahasiswa, topik.judul_topik
                FROM ambil_topik_tugas_akhir ambil
                JOIN mahasiswa mhs ON mhs.nim=ambil.nim_fk_nim
                JOIN topik_tugas_akhir topik ON topik.id=ambil.topik_tugas_akhir_id
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

    # Membuat rule ambil topik
    public function ruleAmbilTopik($nim, $id)
    {
        return  DB::select('SELECT mhs.nama_mahasiswa, mhs.nim, mhs.email_mahasiswa, topik.judul_topik, COUNT(ambil.topik_tugas_akhir_id) as jumlah_topik,
        (SELECT DATEDIFF(CURRENT_DATE(), created_at) AS DateDiff from ambil_topik_tugas_akhir WHERE nim_fk_nim = ' . $nim . ' ORDER by created_at DESC LIMIT 1) as masa_blocking
        FROM ambil_topik_tugas_akhir ambil
        JOIN mahasiswa mhs ON mhs.nim=ambil.nim_fk_nim
        JOIN topik_tugas_akhir topik ON topik.id=ambil.topik_tugas_akhir_id
        WHERE mhs.nim=' . $nim . ' AND ambil.topik_tugas_akhir_id =' . $id);
    }
}
