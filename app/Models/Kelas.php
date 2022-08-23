<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = "kelas";
    protected $primaryKey = 'id_kelas';
    protected $fillable = [
        'id_kelas',
        'nama_kelas'
    ];
    public $timestamps = false;

    public function Jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }
    public function relasi()
    {
        return $this->belongsTo(relasi::class);
    }
}
