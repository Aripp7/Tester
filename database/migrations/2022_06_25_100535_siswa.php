<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Siswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nama', 100);
            $table->string('jenis_kelamin', 50);
            $table->string('nisn', 20);
            $table->string('tempat_lahir', 50);
            $table->date('tgl_lahir');
            $table->string('agama', 50);
            $table->string('alamat', 50);
            $table->string('nama_ayah', 50);
            $table->string('nama_ibu', 50);
            $table->string('kelas', 50);
            $table->integer('id_kelas', 50)->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
