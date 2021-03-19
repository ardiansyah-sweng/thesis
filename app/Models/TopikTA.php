<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopikTA extends Model
{
    use HasFactory;

    protected $table = 'topik_tugas_akhir';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nipy_fk_nipy', 'topik_bidang_fk_id ', 'judul_topik', 'deskripsi', 'nim_terpilih_fk', 'status'
    ];

}
