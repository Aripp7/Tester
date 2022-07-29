<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Jadwal::all();
        // $datas = Country::join('state', 'state.country_id', '=', 'country.country_id')
        //       		->join('city', 'city.state_id', '=', 'state.state_id')
        //       		->get(['country.country_name', 'state.state_name', 'city.city_name']);

        /*Above code will produce following query

        Select 
        	`country`.`country_name`, 
        	`state`.`state_name`, 
        	`city`.`city_name` 
        from `country` 
        inner join `state` 
        	on `state`.`country_id` = `country`.`country_id` 
        inner join `city` 
        	on `city`.`state_id` = `state`.`state_id`

        */
        return view('jadwal.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Jadwal();


        return view('jadwal.add', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $model = new Jadwal();
        $model->nama_Jadwal = $request->nama_Jadwal;
        $model->save();

        return redirect()->route('jadwal.index')->with('success', 'Data Jadwal Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $Jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $Jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $Jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model =  Jadwal::find($id);
        return view('jadwal.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $Jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model =  Jadwal::find($id);
        $model->nama_Jadwal = $request->nama_Jadwal;

        $model->update();



        return redirect('jadwal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model =  Jadwal::find($id);
        $model->delete();
        return redirect()->route('jadwal.index')->with('success', 'Data Jadwal Berhasil di Dihapus');
    }
}
