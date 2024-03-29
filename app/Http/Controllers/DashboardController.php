<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\BoyerMooyer;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Tendik;
use App\Models\Surat;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    function Construct()
    {
        Siswa::all();
        Guru::all();
        Tendik::all();
        Surat::all();
        Kelas::all();
    }



    private $searchList = [
        'nama_siswa',
        'nisn',
        'nama_guru',
        'nip',
        'nama_tendik',
        'nomor_surat',
        'tgl_surat',
        'tujuan',
        'keterangan',
        'file_surat',
        'nama_kelas',
    ];
    public function index()
    {
        // count total data
        $siswa =  Siswa::count();
        $guru = Guru::count();
        $tendik = Tendik::count();
        $kelas = Kelas::count();

        //pemanggilan boyer moore
        $search = request('search');
        $data1 = DB::table('siswa')->get();
        $data2 = DB::table('guru')->get();
        $data3 = DB::table('surats')->get();
        $data4 = DB::table('tendik')->get();
        $data5 = DB::table('kelas')->get();

        $searchSpeed = null;
        if ($search) {
            $result = BoyerMooyer::searchData($data1, $this->searchList, $search);

            $tabel = $result['result'];
            $data2 = $result['result'];
            $data3 = $result['result'];
            $data4 = $result['result'];
            $data5 = $result['result'];

            $searchSpeed = $result['search_speed'];
        }

        // return view('dashboard', compact('siswa', 'tendik', 'kelas', 'guru', 'tabel',  'searchSpeed'));
        return view('dashboard', compact('siswa', 'tendik', 'kelas', 'guru', 'data1', 'data2', 'data3', 'data4',  'data5',  'searchSpeed'));
    }
}
