<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relasi extends Model
{
    use HasFactory;
    protected $table = "relasi";
    public $timestamps = false;


    public function Guru()
    {
        return $this->hasMany(Guru::class);
    }

    public function Siswa()
    {
        return $this->hasMany(Siswa::class);
    }
    public function Kelas()
    {
        return $this->hasMany(Kelas::class);
    }

    public function Tendik()
    {
        return $this->hasMany(Tendik::class);
    }
    public function Surat()
    {
        return $this->hasMany(Surat::class);
    }
}
