@extends('layout.main',['title' => 'Detail tendik '] )

@section('content-header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Detail tendik</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item "><a href="/tendik">Tendik</a></li>
                <li class="breadcrumb-item active">Detail tendik</li>
            </ol>
        </div>
    </div>
</div>
<!-- Main content -->

<section class="content" style="margin-left: 20px;">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="table table-bordered no-margin">
                        <tbody>
                            <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                            <table class="table-landscape" style="text-align:left; width:100%;">
                                <tbody>
                                    <tr>
                                        <th>Nama</th>
                                        <td style="text-transform:none;">{{$tendik->nama_tendik}}</td>

                                    </tr>
                                    <tr>
                                        <th>NIP</th>
                                        <td>{{$tendik->nip}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tempat Lahir</th>
                                        <td>{{$tendik->tempat_lahir}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td>{{$tendik->tgl_lahir}} </td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>{{$tendik->Jenis_kelamin}}</td>
                                    </tr>
                                    <tr>
                                        <th>Agama</th>
                                        <td>{{$tendik->agama}}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat Asal</th>
                                        <td colspan="2">{{$tendik->alamat_jalan}}</td>
                                    </tr>

                                    <tr>
                                        <th>Kecamatan</th>
                                        <td colspan="2">{{$tendik->kecamatan}}</td>
                                    </tr>
                                    <tr>
                                        <th>Pangkat</th>
                                        <td colspan="2">{{$tendik->pangkat_golongan}}</td>
                                    </tr>

                                </tbody>

                            </table>



                        </tbody>

                    </div>
                    <a href="{{ route('tendik.edit', $tendik->id_tendik) }}" class="btn btn-success btn-block"> <span class="fas fa-edit"> Edit</span></a>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection