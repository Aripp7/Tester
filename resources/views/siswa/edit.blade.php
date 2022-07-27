@extends('layout.main',['title' => 'Edit Siswa '] )

@section('content-header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Edit Siswa</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item "><a href="/siswa">Data Siswa</a></li>
                <li class="breadcrumb-item active">Edit Siswa</li>
            </ol>
        </div>
    </div>
</div>
<!-- Main content -->

<section class="content" style="margin-left: 20px;">
    <div class="col">
        <form class="form-horizontal" action="{{url ('siswaUpdate/'.$model->id_siswa) }}" method="POST">
            {{ csrf_field() }}
            @method('PUT')

            <div class="form-group">
                <label class="control-label col-sm-2" for="nama_siswa">Nama:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{$model->nama_siswa}}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nisn">NISN:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nisn" name="nisn" value="{{$model->nisn}}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="Jenis_kelamin">Jenis Kelamin:</label>
                <select class="form-control select2" name="Jenis_kelamin" style="width: 50%; margin-left: 8px;">
                    <option>Pilih Jenis Kelamin</option>
                    <option {{$model->Jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                    <option {{$model->Jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="tgl_lahir">Tanggal Lahir:</label>
                <div class="col-sm-10">
                    <input type="date" data-date-format="yyyy/mm/dd" name="tgl_lahir" class="form-control" id="tgl_lahir" value="{{$model->tgl_lahir}}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="tempat_lahir">Tempat Lahir:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{$model->tempat_lahir}}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="agama">Agama:</label>
                <select class="form-control select2" name="agama" style="width: 50%; margin-left: 8px;">
                    <option>Pilih</option>
                    <option {{$model->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                    <option {{$model->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                    <option {{$model->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                    <option {{$model->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="alamat">Alamat:</label>
                <div class="col-sm-10">
                    <input class="form-control" id="alamat" name="alamat" value="{{$model->alamat}}"></input>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nama_ayah">Nama Ayah:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" value="{{$model->nama_ayah}}">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="nama_ibu">Nama ibu:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="{{$model->nama_ibu}}">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="kelas">Kelas:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kelas" name="kelas" value="{{$model->kelas}}">
                </div>
                <small style="margin-left: 10px;">Contoh : XI IPA 2</small>
            </div>



            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    <a href="/siswa" type="submit" class="btn btn-danger btn-block">Batal</a>
                </div>
            </div>

        </form>
    </div>
</section>

@endsection