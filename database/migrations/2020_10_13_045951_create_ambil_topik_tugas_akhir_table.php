<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbilTopikTugasAkhirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambil_topik_tugas_akhir', function (Blueprint $table) {
            //$table->bigIncrements('id');
            
            $table->string('nim_fk_nim', 10);
            
            $table->unsignedBigInteger('topik_tugas_akhir_id');
            
            $table->primary(['nim_fk_nim', 'topik_tugas_akhir_id']);
           
            $table->index('nim_fk_nim');
            $table->foreign('nim_fk_nim')
                ->references('nim')
                ->on('mahasiswa');    
            
            $table->foreign('topik_tugas_akhir_id')
                ->references('id')
                ->on('topik_tugas_akhir');

            $table->tinyInteger('blocking_time');
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
        Schema::dropIfExists('ambil_topik_tugas_akhir');
    }
}
