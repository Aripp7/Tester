<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mapel extends Model
{
    protected $table = "mapel";
    public $timestamps = false;

    public function detailData($id)
    {
        return DB::table('mapel')->where('id', $id)->first();
    }
}
