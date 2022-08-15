<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\pdf;
use App\Helper\BoyerMooyer;
use App\Exports\GuruExport;
use Maatwebsite\Excel\Facades\Excel;




class GuruController extends Controller
{
    public function __construct()
    {
        $this->GuruModel = new Guru();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $searchList = [
        'nama_guru',
        'nip',
        // 'agama',
        // 'nama_dusun',
        // 'alamat_jalan',
        // 'kecamatan',
        // 'desa_kelurahan',
        // 'pangkat_golongan',
        // 'tempat_lahir',


    ];
    public function index()
    {
        $search = request('search');
        $datas = DB::table('guru')->get();
        $searchSpeed = null;
        if ($search) {
            $result = BoyerMooyer::searchData($datas,  $this->searchList, $search);
            $datas = $result['result'];
            $searchSpeed = $result['search_speed'];
        }

        return view('guru.index', compact('datas', 'searchSpeed'));
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
        $model->nama_guru = $request->nama_guru;
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
        $model = [
            'guru' => $this->GuruModel->detailData($id),
        ];
        return view('guru.show', $model);
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
        $model->nama_guru = $request->nama_guru;
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

    public function exportPDFGuru()
    {

        // $data = Guru::all();
        $data = DB::table('guru')
            ->orderBy('nip', 'DESC')
            ->get();
        view()->share('data', $data);
        $pdf = pdf::loadView('pdf.guru');
        return $pdf->download('dataGuru.pdf');
    }

    public function exportExcelGuru()
    {

        return Excel::download(new GuruExport, 'data-guru.xlsx');
    }
}
