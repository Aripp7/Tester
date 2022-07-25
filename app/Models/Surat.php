<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = "surats";
    protected $fillable = [
        'jenis_surat', 'nomor_surat', 'tgl_surat', 'tujuan', 'keterangan', 'file_surat'
    ];
    public $timestamps = false;
}
