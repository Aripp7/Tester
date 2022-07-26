<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Siswa extends Model
{
    protected $primaryKey = 'id_siswa';
    protected $table = "siswa";
    public $timestamps = false;
    protected $fillable = [
        'id_siswa', 'nama_siswa', 'Jenis_kelamin', 'nisn', 'tempat_lahir', 'tgl_lahir', 'agama', 'alamat', 'nama_ayah', 'nama_ibu', 'kelas'
    ];

    public function allData()
    {
        $siswa = DB::table('siswa')
            ->leftJoin('kelas', 'kelas.id_kelas', '=', 'siswa.id_siswa')
            ->get();
    }

    public function detailData($id_siswa)
    {
        return DB::table('siswa')->where('id_siswa', $id_siswa)->first();
    }

    public function Jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }
}
