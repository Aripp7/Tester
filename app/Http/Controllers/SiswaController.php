<?php

namespace App\Http\Controllers;


use App\Models\Siswa;

use App\Models\Kelas;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Siswa::all();


        return view('siswa.index', compact('datas'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $kelas = Kelas::all();
        $model = new Siswa();
        return view('siswa.add', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $model = new Siswa();
        $model->nisn = $request->nisn;
        $model->nama = $request->nama;
        $model->tgl_lahir = $request->tgl_lahir;
        $model->tempat_lahir = $request->tempat_lahir;
        $model->agama = $request->agama;
        $model->nama_ayah = $request->nama_ayah;
        $model->nama_ibu = $request->nama_ibu;
        $model->alamat = $request->alamat;
        $model->jenis_kelamin = $request->jenis_kelamin;
        $model->kelas = $request->kelas;


        $model->save();



        return redirect()->route('siswa.index')->with('success', 'Data Berhasil di Input');
        // return back()->with([
        //     'error' => 'Login Gagal!'
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $model =  Siswa::find($id);
        // return view('siswa.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model =  Siswa::find($id);
        return view('siswa.edit', compact('model'));
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

        $model =  Siswa::find($id);
        $model->nisn = $request->nisn;
        $model->nama = $request->nama;
        $model->jenis_kelamin = $request->jenis_kelamin;
        $model->tgl_lahir = $request->tgl_lahir;
        $model->tempat_lahir = $request->tempat_lahir;
        $model->agama = $request->agama;
        $model->nama_ayah = $request->nama_ayah;
        $model->nama_ibu = $request->nama_ibu;
        $model->alamat = $request->alamat;
        $model->kelas = $request->kelas;
        $model->update();


        return redirect()->route('siswa.index')->with('succes', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model =  Siswa::find($id);
        $model->delete();


        return redirect()->route('siswa.index')->with('success', 'Data Berhasil di Dihapus');
    }
}
