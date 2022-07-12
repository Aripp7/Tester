<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Absensi::all();
        return view('absensi.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Absensi();
        return view('absensi.add', compact('model'));
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
            'nama_Absensi' => 'required',

        ]);

        $model = new Absensi();
        $model->nama_Absensi = $request->nama_Absensi;
        $model->save();

        return redirect()->route('absensi.index')->with('success', 'Data Absensi Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absensi  $Absensi
     * @return \Illuminate\Http\Response
     */
    public function show(Absensi $Absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absensi  $Absensi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model =  Absensi::find($id);
        return view('absensi.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absensi  $Absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model =  Absensi::find($id);
        $model->nama_Absensi = $request->nama_Absensi;

        $model->update();



        return redirect('absensi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model =  Absensi::find($id);
        $model->delete();
        return redirect()->route('absensi.index')->with('success', 'Data Absensi Berhasil di Dihapus');
    }
}
