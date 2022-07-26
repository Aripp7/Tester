<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tendik extends Model
{
    protected $primaryKey = 'id_tendik';
    protected $table = "tendik";
    public $timestamps = false;
    protected $fillable = [
        'nama_tendik', 'Jenis_kelamin', 'nip', 'tempat_lahir', 'tgl_lahir', 'agama', 'alamat_jalan', 'kecamatan', 'pangkat_golongan'
    ];


    public function detailData($id_tendik)
    {
        return DB::table('tendik')->where('id_tendik', $id_tendik)->first();
    }
}
