<?php

namespace App\Http\Controllers;

use App\Models\Tendik;
use App\Exports\TendikExport;
use Illuminate\Http\Request;
use PHPUnit\Framework\Test;
use Illuminate\Support\Facades\DB;
use App\Helper\BoyerMooyer;
use Barryvdh\DomPDF\Facade\pdf;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;

class TendikController extends Controller
{
    public function __construct()
    {
        $this->TendikModel = new Tendik();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $searchList = [
        'nama_tendik',
        'tempat_lahir',
        'tgl_lahir',
        'nip',
        'agama',

        'alamat_jalan',
        'kecamatan',

        'pangkat_golongan',


    ];
    public function index()
    {
        $search = request('search');
        $datas = DB::table('tendik')->get();
        $searchSpeed = null;
        if ($search) {
            $result = BoyerMooyer::searchData($datas,  $this->searchList, $search);
            $cari = $result['result'];
            $searchSpeed = $result['search_speed'];
        }



        return view('tendik.index', compact('datas', 'searchSpeed'));
        //
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
        $model = [
            'tendik' => $this->TendikModel->detailData($id),
        ];
        return view('tendik.show', $model);
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
        $model = Tendik::find($id);
        $model->nama_tendik = $request->nama_tendik;
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

    public function exportTendik()
    {

        $data = DB::table('tendik')
            ->orderBy('nip', 'DESC')
            ->get();
        view()->share('data', $data);
        $pdf = pdf::loadView('pdf.tendik');
        return $pdf->download('dataTendik.pdf');
    }
    public function exportExcel()
    {

        return Excel::download(new TendikExport, 'tendik.xlsx');
    }
}
