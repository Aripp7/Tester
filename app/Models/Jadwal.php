<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = "jadwal_pelajaran";
    public $timestamps = false;
    use HasFactory;

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
    public function Tahun()
    {
        return $this->hasMany(Tahun::class);
    }

    public function Mapel()
    {
        return $this->hasMany(Mapel::class);
    }
}
