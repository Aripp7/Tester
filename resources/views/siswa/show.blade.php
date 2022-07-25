@extends('layout.main',['title' => 'Detail Siswa '] )

@section('content-header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Detail Siswa</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item "><a href="/siswa">Siswa</a></li>
                <li class="breadcrumb-item active">Detail Siswa</li>
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
                                        <td style="text-transform:none;">{{$siswa->nama_siswa}}</td>

                                    </tr>
                                    <tr>
                                        <th>NISN</th>
                                        <td>{{$siswa->nisn}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tempat Lahir</th>
                                        <td>{{$siswa->tempat_lahir}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td>{{$siswa->tgl_lahir}} </td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>{{$siswa->Jenis_kelamin}}</td>
                                    </tr>
                                    <tr>
                                        <th>Agama</th>
                                        <td>{{$siswa->agama}}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat Asal</th>
                                        <td colspan="2">{{$siswa->alamat}}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Ayah</th>
                                        <td colspan="2">{{$siswa->nama_ayah}}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Ibu</th>
                                        <td colspan="2">{{$siswa->nama_ibu}}</td>
                                    </tr>
                                    <tr>
                                        <th>Kelas</th>
                                        <td colspan="2">{{$siswa->kelas}}</td>
                                    </tr>

                                </tbody>

                            </table>



                        </tbody>

                    </div>
                    <a href="{{ route('siswa.edit', $siswa->id_siswa) }}" class="btn btn-success btn-block"> <span class="fas fa-edit"> Edit</span></a>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection