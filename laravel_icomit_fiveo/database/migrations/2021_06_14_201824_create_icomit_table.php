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
            $table->integer('id_admin_kom');
            $table->string('nama_kom', 20);
            $table->string('id_prov', 20);
            $table->string('id_kota', 20);
            $table->year('th_berdiri');
            $table->integer('jml_anggota');
            $table->integer('link_wa');
            $table->string('link_ig', 10);
            $table->text('desc_kom');
            $table->string('logo_kom');
        });

        Schema::create('provinsi', function (Blueprint $table) {
            $table->string('id_prov', 6);
            $table->string('nama_prov', 40);
        });

        Schema::create('kab_kota', function (Blueprint $table) {
            $table->string('id_kabkot', 10);
            $table->string('id_prov', 6);
            $table->string('nama_kab_kota', 40);
        });

        Schema::create('akun_admin_kom', function (Blueprint $table) {
            $table->increments('id_admin_kom');
            $table->string('username', 10)->unique();
            $table->string('email', 60)->unique();
            $table->string('level', 60);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 8);
            $table->string('ver_pass', 8);
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
