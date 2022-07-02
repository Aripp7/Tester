<?php

namespace App\Http\Controllers;

use App\Models\Tendik;
use Illuminate\Http\Request;
use PHPUnit\Framework\Test;

class TendikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Tendik::all();
        return view('tendik.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Tendik();
        return view('tendik.add', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Tendik();
        $model->nama = $request->nama;
        $model->Jenis_kelamin = $request->Jenis_kelamin;
        $model->tgl_lahir = $request->tgl_lahir;
        $model->tempat_lahir = $request->tempat_lahir;
        $model->nip = $request->nip;
        $model->alamat_jalan = $request->alamat_jalan;
        $model->agama = $request->agama;

        $model->kecamatan = $request->kecamatan;

        $model->pangkat_golongan = $request->pangkat_golongan;

        $model->save();

        // return $request;



        return redirect()->route('tendik.index')->with('success', 'Data Berhasil di Input');
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
        $model =  Tendik::find($id);
        return view('tendik.edit', compact('model'));
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
        $model = new Tendik();
        $model->nama = $request->nama;
        $model->Jenis_kelamin = $request->Jenis_kelamin;
        $model->tgl_lahir = $request->tgl_lahir;
        $model->tempat_lahir = $request->tempat_lahir;
        $model->nip = $request->nip;
        $model->alamat_jalan = $request->alamat_jalan;
        $model->agama = $request->agama;

        $model->kecamatan = $request->kecamatan;

        $model->pangkat_golongan = $request->pangkat_golongan;

        $model->update();

        // return $request;



        return redirect()->route('tendik.index')->with('success', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model =  Tendik::find($id);
        $model->delete();
        return redirect()->route('tendik.index')->with('success', 'Data Berhasil dihapus');
    }
}
