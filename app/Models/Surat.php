<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $primaryKey = 'id_surat';
    protected $table = "surats";
    protected $fillable = [
        'id_surat', 'jenis_surat', 'nomor_surat', 'tgl_surat', 'tujuan', 'keterangan', 'file_surat'
    ];
    public $timestamps = false;
}
