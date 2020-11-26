<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AmbilTopikTugasAkhirUpdateAtDefaultValue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // DB::statement("ALTER TABLE ambil_topik_tugas_akhir CHANGE updated_at updated_at  TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('ambil_topik_tugas_akhir', function (Blueprint $table) {
        //     $table->timestamp('updated_at')->default(NULL)->change();
        // });
    }
}
