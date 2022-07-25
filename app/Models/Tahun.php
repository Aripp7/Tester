<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahun extends Model
{
    protected $table = "tahun_ajaran";
    protected $primaryKey = 'id_tahun';
    protected $fillable = [
        'tahun', 'status'
    ];
    public $timestamps = false;

    public function Jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }
}
