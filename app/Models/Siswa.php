<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Siswa extends Model
{
    protected $table = "siswa";
    public $timestamps = false;

    public function allData()
    {
        $siswa = DB::table('siswa')
            ->leftJoin('kelas', 'kelas.id', '=', 'siswa.id')
            ->get();
    }

    public function detailData($id)
    {
        return DB::table('siswa')->where('id', $id)->first();
    }
}
