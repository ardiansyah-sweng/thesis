<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nipy_fk', 3);
            $table->tinyInteger('senin')->default(0);
            $table->tinyInteger('selasa')->default(0);
            $table->tinyInteger('rabu')->default(0);
            $table->tinyInteger('kamis')->default(0);
            $table->tinyInteger('jumat')->default(0);
            $table->tinyInteger('sabtu')->default(0);
            $table->tinyInteger('minggu')->default(1);
            $table->dateTime('mulai');
            $table->dateTime('selesai');
            
            $table->foreign('nipy_fk')
                ->references('nipy')
                ->on('dosen');    

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
        Schema::dropIfExists('jadwal');
    }
}
