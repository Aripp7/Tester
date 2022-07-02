<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Guru::all();
        return view('guru.index', compact('datas'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Guru();
        return view('guru.add', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Guru();
        $model->nama = $request->nama;
        $model->Jenis_kelamin = $request->Jenis_kelamin;
        $model->tgl_lahir = $request->tgl_lahir;
        $model->tempat_lahir = $request->tempat_lahir;
        $model->nip = $request->nip;
        $model->alamat_jalan = $request->alamat_jalan;
        $model->agama = $request->agama;
        $model->nama_dusun = $request->nama_dusun;
        $model->kecamatan = $request->kecamatan;
        $model->desa_kelurahan = $request->desa_kelurahan;
        $model->pangkat_golongan = $request->pangkat_golongan;

        $model->save();

        // return $request;



        return redirect()->route('guru.index')->with('success', 'Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model =  Guru::find($id);
        return view('guru.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model =  Guru::find($id);
        $model->nama = $request->nama;
        $model->alamat = $request->alamat;
        $model->nohp = $request->nohp;
        $model->update();




        return redirect()->route('guru.index')->with('success', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model =  Guru::find($id);
        $model->delete();

        return redirect()->route('guru.index')->with('success', 'Data Berhasil Dihapus');
    }
}
