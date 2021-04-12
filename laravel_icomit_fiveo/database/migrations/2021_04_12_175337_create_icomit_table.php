<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIcomitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_user', function (Blueprint $table) {
            $table->bigIncrements('id_user');
            $table->string('nama_user');
            $table->timestamps();
        });

        Schema::create('tb_admin', function (Blueprint $table) {
            $table->bigIncrements('id_admin');
            $table->string('nama_admin');
            $table->timestamps();
        });

        Schema::create('tb_komunitas', function (Blueprint $table) {
            $table->string('kd_kom');
            $table->string('nama_kom');
            $table->string('email_kom');
            $table->string('kd_asal_kom');
            $table->string('kd_kategori_kom');
            $table->string('kd_admin_kom');
            $table->timestamps();
        });

        Schema::create('tb_detail_kategori', function (Blueprint $table) {
            $table->string('kd_kategori');
            $table->string('desc_kategori');
            $table->timestamps();
        });

        Schema::create('tb_detail_admin_kom', function (Blueprint $table) {
            $table->string('kd_admin_kom');
            $table->string('nama_admin_kom');
            $table->string('alamat_admin_kom');
            $table->string('no_telp_admin_kom');
            $table->timestamps();
        });

        Schema::create('tb_detail_asal_kom', function (Blueprint $table) {
            $table->string('kd_asal');
            $table->string('nama_kota_kab');
            $table->string('nama_provinsi');
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
        Schema::dropIfExists('icomit');
    }
}
