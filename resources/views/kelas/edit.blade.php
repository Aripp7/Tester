@extends('layout.main',['title' => 'Edit Kelas'] )

@section('content-header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Edit Kelas</h1>
        </div>
    </div>
</div>
<!-- Main content -->
<section class="content" style="margin-left: 20px;">
    <div class="col-md-9">
        <form class="col-md-9" action="postKelas" method="POST">
            {{ csrf_field() }}
            {{ method_field('put') }}
            <div class="form-group" style="width: 50%">
                <label for="nama_kelas">Kelas </label>
                <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" aria-describedby="nama_kelas" required placeholder="Tahun" value="{{$model->nama_kelas}}">
                <small style="margin-left: 10px;">cth Format : XI IPA 4</small>
            </div>



            <button type="submit" class="btn btn-primary">Tambahkan</button>
            <a href="/kelas" class="btn btn-danger">Batal</a>
        </form>


    </div>

</section>

@endsection