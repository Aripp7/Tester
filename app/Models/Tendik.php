<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tendik extends Model
{
    protected $table = "tendik";
    public $timestamps = false;

    public function detailData($id)
    {
        return DB::table('tendik')->where('id', $id)->first();
    }
}
