<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Tendik;

class DashboardController extends Controller
{
    public function index()
    {
        $siswa =  Siswa::count();
        $guru = Guru::count();
        $tendik = Tendik::count();
        $kelas = Kelas::count();

        return view('dashboard', compact('siswa', 'guru', 'tendik', 'kelas'));
    }
}
