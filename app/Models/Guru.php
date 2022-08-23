<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Guru extends Model
{
    protected $table = "guru";
    protected $primaryKey = 'id_guru';
    public $timestamps = false;
    protected $fillable = [
        'nama_guru', 'Jenis_kelamin', 'nip', 'tempat_lahir', 'tgl_lahir', 'agama', 'alamat_jalan', 'rt', 'rw', 'nama_dusun', 'desa_kelurahan', 'kecamatan', 'pangkat_golongan'
    ];


    public function detailData($id_guru)
    {
        return DB::table('guru')->where('id_guru', $id_guru)->first();
    }

    public function relasi()
    {
        return $this->belongsTo(relasi::class);
    }
}
