@extends('layout.main',['title' => 'Edit Surat '] )

@section('content-header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Edit Surat</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item "><a href="/surat">Surat</a></li>
                <li class="breadcrumb-item active">Edit Surat</li>
            </ol>
        </div>
    </div>
</div>
<!-- Main content -->
<section class="content" style="margin-left: 20px;">
    <div class="col">

        <form class="form-horizontal" action="{{url ('suratUpdate/'.$model->id_surat) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('put')}}
            <div class="form-group">
                <label class="control-label col-sm-2" for="jenis_surat">Jenis Surat:</label>
                <select class="form-control select2" name="jenis_surat" style="width: 50%; margin-left: 8px;">
                    <option selected="selected">Pilih Jenis Surat</option>
                    <option {{$model->jenis_surat == 'Surat Masuk"' ? 'selected' : '' }}>Surat Masuk</option>
                    <option {{$model->jenis_surat == 'Surat Keluar' ? 'selected' : '' }}>Surat Keluar</option>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nomor_surat">Nomor Surat:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" value="{{$model->nomor_surat}}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="tgl_surat">Tanggal Surat:</label>
                <div class="col-sm-10">
                    <input type="date" data-date-format="yyyy/mm/dd" class="form-control" id="tgl_surat" name="tgl_surat" value="{{$model->tgl_surat}}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="tujuan">Tujuan:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tujuan" name="tujuan" value="{{$model->tujuan}}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="keterangan">Keterangan:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{$model->keterangan}}">
                </div>
            </div>


            <div class="form-group">
                <label class="control-label col-sm-2" for="file_surat ">File Surat:</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="file_surat " name="file_surat" value="{{$model->file_surat}}"></input>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    <a href="/surat" type="submit" class="btn btn-danger btn-block">Batal</a>
                </div>
            </div>

        </form>
    </div>
</section>

@endsection