@extends('layout.main',['title' => 'Edit Tahun Ajaran '] )

@section('content-header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Edit Tahun Ajaran</h1>
        </div>
    </div>
</div>
<!-- Main content -->
<section class="content" style="margin-left: 20px;">
    <div class="col-md-9">
        <form class="col-md-9" action="postUpTahun" method="POST">
            {{ csrf_field() }}
            {{ method_field('put') }}
            <div class="form-group" style="width: 50%">
                <label for="nama">Tahun Ajaran</label>
                <input class="form-control" id="tahun" aria-describedby="tahun" required value="{{$model->tahun}}">
                <small style="margin-left: 10px;">cth Format : 2011/2012</small>
            </div>
            <div class="form-group">
                <label>Status</label>
                <select class="form-control select2" style="width: 50%;">

                    <option>Pilih</option>
                    <option {{$model->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                    <option {{$model->status == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
            <a href="/tahun" class="btn btn-danger">Batal</a>
        </form>
    </div>
</section>

@endsection