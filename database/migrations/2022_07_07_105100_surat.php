<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Surat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->id('id_surat');
            $table->string('jenis_surat', 50);
            $table->string('nomor_surat', 50);
            $table->date('tgl_surat');
            $table->string('tujuan', 50);
            $table->string('keterangan', 50);
            $table->string('file_surat', 50);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas');
    }
}
