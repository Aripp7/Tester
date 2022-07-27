<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Siswa;

use App\Models\Kelas;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class SiswaController extends Controller
{


    public function __construct()
    {
        $this->SiswaModel = new Siswa();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datas = Siswa::all();


        return view('siswa.index', compact('datas'));

        // $datas = DB::table('siswa')->get();

        // return view('siswa.index', ['siswa' => $datas]);
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
        $model->nama_siswa = $request->nama_siswa;
        $model->tgl_lahir = $request->tgl_lahir;
        $model->tempat_lahir = $request->tempat_lahir;
        $model->agama = $request->agama;
        $model->nama_ayah = $request->nama_ayah;
        $model->nama_ibu = $request->nama_ibu;
        $model->alamat = $request->alamat;
        $model->jenis_kelamin = $request->jenis_kelamin;
        $model->kelas = $request->kelas;


        $model->save();
        // return response()->json($model);


        return redirect()->route('siswa.index')->with('success', 'Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_siswa)
    {
        $model = [
            'siswa' => $this->SiswaModel->detailData($id_siswa),
        ];
        return view('siswa.show', $model);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_siswa)
    {
        $model =  Siswa::find($id_siswa);
        return view('siswa.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_siswa)
    {
        // return $request;

        $model =  Siswa::find($id_siswa);
        $model->nama_siswa = $request->nama_siswa;
        $model->nisn = $request->nisn;
        $model->Jenis_kelamin = $request->Jenis_kelamin;
        $model->tgl_lahir = $request->tgl_lahir;
        $model->tempat_lahir = $request->tempat_lahir;
        $model->agama = $request->agama;
        $model->alamat = $request->alamat;
        $model->nama_ayah = $request->nama_ayah;
        $model->nama_ibu = $request->nama_ibu;
        $model->kelas = $request->kelas;
        $model->update();


        return redirect()->route('siswa.index')->with('success', 'Data Berhasil di Update');
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
