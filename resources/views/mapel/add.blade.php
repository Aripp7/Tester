@extends('layout.main',['title' => 'Tambah Mata Pelajaran '] )

@section('content-header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tambah Mata Pelajaran</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/mapel">Mapel</a></li>
                <li class="breadcrumb-item active">Tambah Mapel</li>
            </ol>
        </div>
    </div>
</div>
<!-- Main content -->
<section class="content" style="margin-left: 20px;">
    <div class="col">
        <form class="form-horizontal" action="postMapel" method="POST">
            {{ csrf_field() }}
            {{ method_field('put')}}
            <div class="form-group">
                <label class="control-label col-sm-2" for="kode_mapel">Kode Mapel:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kode_mapel" name="kode_mapel" placeholder="kode mapel">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="mapel">Mapel:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="mapel" name="mapel" placeholder="Masukkan Mapel">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="/mapel" type="submit" class="btn btn-danger ">Batal</a>
                </div>
            </div>

        </form>
    </div>
</section>

@endsection