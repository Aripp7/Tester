<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Guru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nama', 100);
            $table->string('Jenis_kelamin', 50);
            $table->string('tempat_lahir', 50);
            $table->date('tgl_lahir');
            $table->biginteger('nip', 20);
            $table->string('agama', 50);
            $table->string('alamat_jalan', 50);
            $table->integer('rt');
            $table->integer('rw');
            $table->string('nama_dusun', 50);
            $table->string('desa_kelurahan', 50);
            $table->string('kecamatan', 50);
            $table->string('pangkat_golongan', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guru');
    }
}
