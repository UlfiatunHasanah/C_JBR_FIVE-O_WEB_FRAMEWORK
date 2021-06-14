<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataIcomitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_kom', function (Blueprint $table) {
            $table->increments('id_kom');
            $table->string('nama_kom', 20);
            $table->string('id_prov', 6);
            $table->string('id_kota', 3);
            $table->year('th_berdiri');
            $table->integer('jml_anggota');
            $table->integer('no_wa');
            $table->string('instagram', 10);
            $table->text('desc_kom');
            $table->string('logo_kom');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_icomit');
    }
}
