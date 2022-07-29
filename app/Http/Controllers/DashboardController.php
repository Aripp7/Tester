<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\BoyerMooyer;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Tendik;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{

    private $searchList = [
        'nama_siswa',
        'nama_guru',
        'nama_tendik',
        'file_surat',
        'keterangan',
        'nomor_surat',
        'alamat',
        'alamat_jalan',
        'pangkat_golongan',
        'nip',
        'nisn',
        'tujuan',
    ];
    public function index()
    {
        // count total data
        $siswa =  Siswa::count();
        $guru = Guru::count();
        $tendik = Tendik::count();
        $kelas = Kelas::count();


        $search = request('search');

        $siswa1 = DB::table('siswa')
            ->orderBy('id_siswa')
            ->get();
        $guru2 = DB::table('guru')
            ->orderBy('id_guru')
            ->get();
        $surat = DB::table('surats')
            ->orderBy('id_surat')
            ->get();
        $tendik1 = DB::table('tendik')
            ->orderBy('id_tendik')
            ->get();
        $kelas1 = DB::table('kelas')
            ->orderBy('id_kelas')
            ->get();
        $tahun = DB::table('tahun_ajaran')
            ->orderBy('id_tahun')
            ->get();
        $mapel = DB::table('mapel')
            ->orderBy('id_mapel')
            ->get();


        $searchSpeed = null;
        if ($search) {
            // $result = BoyerMooyer::searchData($siswa, $siswa1,  $guru, $this->searchList, $search);
            $result = BoyerMooyer::searchData($siswa, $siswa1, $mapel, $tahun, $kelas1, $surat, $guru2,  $tendik1,  $guru, $this->searchList, $search);
            // $mapel, $tahun, $kelas1, $surat, $guru2,  $tendik1,
            $siswa1 = $result['result'];
            $guru2 = $result['result'];
            $tendik1 = $result['result'];
            $kelas1 = $result['result'];
            $tahun = $result['result'];
            $mapel = $result['result'];
            $surat = $result['result'];
            $searchSpeed = $result['search_speed'];
        }


        return view('dashboard', compact('siswa', 'siswa1', 'mapel', 'tahun', 'kelas1', 'surat', 'guru2', 'tendik', 'kelas',  'tendik1', 'guru', 'searchSpeed'));
        // return view('dashboard', compact('siswa', 'tendik', 'kelas', 'guru', 'searchSpeed'));
    }
}
