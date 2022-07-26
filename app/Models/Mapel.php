<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mapel extends Model
{
    protected $primaryKey = 'id_mapel';
    protected $table = "mapel";
    public $timestamps = false;

    protected $fillable = [
        'kode_mapel', 'mapel'
    ];

    public function detailData($id_mapel)
    {
        return DB::table('mapel')->where('id_mapel', $id_mapel)->first();
    }

    public function Jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }
}
