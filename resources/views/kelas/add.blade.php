@extends('layout.main',['title' => 'Tambah Kelas'] )

@section('content-header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Kelas</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/kelas">Kelas</a></li>
                <li class="breadcrumb-item active">Tambah Kelas</li>
            </ol>
        </div>
    </div>
</div><!-- /.container-fluid -->


<body class="hold-transition sidebar-mini">
    <section class="content" style="margin-left: 20px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">



                        <div class="col-md-9">
                            <form class="col-md-9" action="postKelas" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('put') }}
                                <div class="form-group" style="width: 50%; margin-top:10px;">
                                    <label for="nama_kelas">Kelas </label>
                                    <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" aria-describedby="nama_kelas" required placeholder="Tahun">
                                    <small style="margin-left: 10px;">cth Format : XI IPA 4</small>
                                </div>
                                <button type="submit" class="btn btn-primary" style="margin-bottom: 20px;">Tambahkan</button>
                                <a href="kelas" class="btn btn-danger" style="margin-bottom: 20px;">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>

@endsection