<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopikTaTable extends Migration
{
    /**
     * Membuat tabel topik_tugas_akhir
     * Kolom: id (PK), topik_bidang_fk_id, judul_topik, deskripsi, dan status
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('topik_tugas_akhir', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nipy_fk_nipy', 3);
            $table->index('nipy_fk_nipy');
            $table->foreign('nipy_fk_nipy')
                ->references('nipy')->on('dosen')
                ->onDelete('cascade');

            $table->unsignedBigInteger('topik_bidang_fk_id');
            $table->index('topik_bidang_fk_id');
            $table->foreign('topik_bidang_fk_id')
                ->references('id')->on('topik_bidang')
                ->onDelete('cascade');

            $table->string('judul_topik');
            $table->text('deskripsi');

            $table->string('nim_terpilih_fk', 10)->default(0);
            // $table->index('nim_terpilih_fk');
            // $table->foreign('nim_terpilih_fk')
            //     ->references('nim')->on('mahasiswa')
            //     ->onDelete('cascade');

            $table->string('periode', 50);
            $table->tinyInteger('status')->default(0);
            $table->json('rekomendasi_penguji')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topik_tugas_akhir');
    }
}
