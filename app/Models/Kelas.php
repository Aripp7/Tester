<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = "kelas";

    protected $fillable = [
        'nama_kelas'
    ];
    public $timestamps = false;

    public function Jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }
}
