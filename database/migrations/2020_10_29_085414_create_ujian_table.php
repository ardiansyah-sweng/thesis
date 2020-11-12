<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUjianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ujian', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('idTopikSkripsiFK');
            $table->index('idTopikSkripsiFK');
            $table->foreign('idTopikSkripsiFK')
                ->references('id')->on('topik_tugas_akhir')
                ->onDelete('cascade');

            $table->tinyInteger('jenisUjian');
            $table->dateTime('tanggalSemprop');
            $table->dateTime('tanggalPendadaran');

            $table->string('nipyPenguji1', 10);
            // $table->index('nipyPenguji1');
            // $table->foreign('nipyPenguji1')
            //     ->references('nipy')->on('dosen')
            //     ->onDelete('cascade');

            $table->string('nipyPenguji2', 10);
            // $table->index('nipyPenguji2');
            // $table->foreign('nipyPenguji2')
            //     ->references('nipy')->on('dosen')
            //     ->onDelete('cascade');
            $table->tinyInteger('isFixed')->default(0);
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
        Schema::dropIfExists('ujian');
    }
}
