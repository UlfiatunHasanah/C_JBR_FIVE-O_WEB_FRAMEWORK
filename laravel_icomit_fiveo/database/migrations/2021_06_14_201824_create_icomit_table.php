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
        Schema::create('profile_kom', function (Blueprint $table) {
            $table->increments('id_kom');
            $table->string('nama_kom', 20);
            $table->string('id_prov', 6);
            $table->string('id_kota', 6);
            $table->year('th_berdiri');
            $table->integer('jml_anggota');
            $table->integer('no_wa');
            $table->string('instagram', 10);
            $table->text('desc_kom');
            $table->string('logo_kom');
        });

        Schema::create('provinsi', function (Blueprint $table) {
            $table->string('id_prov', 6);
            $table->string('nama_prov', 40);
        });

        Schema::create('kab_kota', function (Blueprint $table) {
            $table->string('id_kabkot', 6);
            $table->string('nama_kab_kota', 40);
        });

        Schema::create('akun_admin_kom', function (Blueprint $table) {
            $table->increments('id_admin_kom');
            $table->string('username', 10);
            $table->string('email', 30);
            $table->string('password', 6);
        });

        Schema::create('akun_admin_web', function (Blueprint $table) {
            $table->increments('id_admin_web');
            $table->string('username', 10);
            $table->string('email', 30);
            $table->string('password', 6);
        });

        Schema::create('akun_user', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('username', 10);
            $table->string('email', 30);
            $table->string('password', 6);
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
