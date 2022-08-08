<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Helper\BoyerMooyer;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $searchList = [
        'nomor_surat',
        'tgl_surat',
        'tujuan',
        'keterangan',
        'file_surat',



    ];
    public function index()
    {


        $search = request('search');
        $datas = DB::table('surats')->get();
        $searchSpeed = null;
        if ($search) {
            $result = BoyerMooyer::searchData($datas,  $this->searchList, $search);
            $datas = $result['result'];
            $searchSpeed = $result['search_speed'];
        }
        return view('surat.index', compact('datas', 'searchSpeed'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Surat();
        return view('surat.add', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //penamaan dan penyimpanan file surat
        $file_surat = $request->file('file_surat');
        $name = 'Surat_' . date('Ymdhis') . '.' . $request->file('file_surat')->getClientOriginalExtension();
        $file_surat->move('dokumen/', $name);

        $model = new Surat;
        $model->jenis_surat = $request->jenis_surat;
        $model->nomor_surat = $request->nomor_surat;
        $model->tgl_surat = $request->tgl_surat;
        $model->tujuan = $request->tujuan;
        $model->keterangan = $request->keterangan;
        $model->file_surat = $name;
        $model->save();



        return redirect('surat')->with('success', 'Surat Berhasil di Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function show(Surat $surat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function edit($id_surat)
    {
        $model = Surat::find($id_surat);
        return view('surat.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Surat $surat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_surat)
    {
        $model =  Surat::find($id_surat);
        $model->delete();

        return redirect()->route('surat.index')->with('success', 'Data Berhasil di Dihapus');
    }
}
