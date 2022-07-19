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

    function badCharHeuristic($str, $size, &$badchar)
    {
        for ($i = 0; $i < 256; $i++)
            $badchar[$i] = -1;

        for ($i = 0; $i < $size; $i++)
            $badchar[ord($str[$i])] = $i;
    }
    function SearchString($str, $pat)
    {
        $m = strlen($pat);
        $n = strlen($str);
        $i = 0;

        $this->badCharHeuristic($pat, $m, $badchar);

        $s = 0;
        while ($s <= ($n - $m)) {
            $j = $m - 1;

            while ($j >= 0 && $pat[$j] == $str[$s + $j])
                $j--;

            if ($j < 0) {
                $arr[$i++] = $s;
                $s += ($s + $m < $n) ? $m - $badchar[ord($str[$s + $m])] : 1;
            } else
                $s += max(1, $j - $badchar[ord($str[$s + $j])]);
        }

        for ($j = 0; $j < $i; $j++) {
            $result[$j] = $arr[$j];
        }

        return $result;
    }
    // public function searchItem(Request $request)
    // {
    //     $data = DB::table('tbl_orders_detail')
    //         ->select(DB::raw("CONCAT(item_name,' Kondisi ',item_condition) as item"))->get();

    //     $value = $this->SearchString($data, $request->item);
    //     // dd($value);
    // }
}
