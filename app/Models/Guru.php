<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Guru extends Model
{
    protected $table = "guru";
    public $timestamps = false;


    public function detailData($id)
    {
        return DB::table('guru')->where('id', $id)->first();
    }
}
