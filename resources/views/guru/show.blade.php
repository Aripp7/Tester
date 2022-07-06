@extends('layout.main',['title' => 'Detail Guru '] )

@section('content-header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Detail guru</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item "><a href="/guru">Guru</a></li>
                <li class="breadcrumb-item active">Detail Guru</li>
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
                                        <td style="text-transform:none;">{{$guru->nama}}</td>
                                    </tr>
                                    <tr>
                                        <th>NIP</th>
                                        <td>{{$guru->nip}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tempat Lahir</th>
                                        <td>{{$guru->tempat_lahir}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td>{{$guru->tgl_lahir}} </td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>{{$guru->Jenis_kelamin}}</td>
                                    </tr>
                                    <tr>
                                        <th>Agama</th>
                                        <td>{{$guru->agama}}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat Asal</th>
                                        <td colspan="2">{{$guru->alamat_jalan}}</td>
                                    </tr>
                                    <tr>
                                        <th>RW</th>
                                        <td colspan="2">{{$guru->rw}}</td>
                                    </tr>
                                    <tr>
                                        <th>RT</th>
                                        <td colspan="2">{{$guru->rt}}</td>
                                    </tr>

                                    <tr>
                                        <th>Kecamatan</th>
                                        <td colspan="2">{{$guru->kecamatan}}</td>
                                    </tr>

                                    <tr>
                                        <th>Desa Kelurahan</th>
                                        <td colspan="2">{{$guru->desa_kelurahan}}</td>
                                    </tr>

                                    <tr>
                                        <th>Pangkat</th>
                                        <td colspan="2">{{$guru->pangkat_golongan}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </tbody>
                    </div>
                    <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-success btn-block"> <span class="fas fa-edit"> Edit</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection