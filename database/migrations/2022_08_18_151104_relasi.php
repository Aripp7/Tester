<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Relasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relasi', function (Blueprint $table) {

            $table->integer('id_siswa');

            $table->integer('id_guru');
            $table->integer('id_tendik');
            $table->integer('id_kelas');
            $table->integer('id_surat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relasi');
    }
}
