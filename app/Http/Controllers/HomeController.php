<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\BoyerMooyer;
use Illuminate\Support\Facades\DB;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\relasi;
use App\Models\Siswa;
use App\Models\Tendik;
use App\Models\Surat;

class HomeController extends Controller
{
    private $searchList = [

        'id_siswa',
        'nipa',

    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request('search2');
        $datas = Relasi::join('siswa', 'siswa.id_siswa', '=', 'relasi.id_siswa')
            ->leftjoin('guru', 'guru.id_guru', '=', 'relasi.id_guru')
            ->leftjoin('tendik', 'tendik.id_tendik', '=', 'relasi.id_tendik')
            ->leftjoin('kelas', 'kelas.id_kelas', '=', 'relasi.id_kelas')
            ->leftjoin('surats', 'surats.id_surat', '=', 'relasi.id_surat')
            ->get(['siswa.*', 'guru.*', 'tendik.*', 'kelas.*', 'surats.*']);
        // ->get();

        $searchSpeed = null;
        if ($search) {
            $result = BoyerMooyer::searchData($datas,  $this->searchList, $search);
            $datas = $result['result'];

            $searchSpeed = $result['search_speed'];
        }

        return view('home', compact('datas', 'searchSpeed'));
    }
}
