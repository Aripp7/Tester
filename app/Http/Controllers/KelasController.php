<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Helper\BoyerMooyer;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $searchList = [
        'nama_kelas',



    ];
    public function index()
    {

        $search = request('search');
        $datas = DB::table('kelas')->get();
        $searchSpeed = null;
        if ($search) {
            $result = BoyerMooyer::searchData($datas,  $this->searchList, $search);
            $datas = $result['result'];
            $searchSpeed = $result['search_speed'];
        }

        return view('kelas.index', compact('datas',  'searchSpeed'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Kelas();
        return view('kelas.add', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required',

        ]);

        $model = new Kelas();
        $model->nama_kelas = $request->nama_kelas;
        $model->save();

        return redirect()->route('kelas.index')->with('success', 'Data Kelas Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model =  Kelas::find($id);
        return view('kelas.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model =  Kelas::find($id);
        $model->nama_kelas = $request->nama_kelas;

        $model->update();



        return redirect('kelas')->with('success', 'Data Berhasil di Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model =  Kelas::find($id);
        $model->delete();
        return redirect()->route('kelas.index')->with('success', 'Data Kelas Berhasil di Dihapus');
    }
}
