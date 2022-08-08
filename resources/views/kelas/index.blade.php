@extends('layout.main',['title' => 'Kelas'] )

@section('content-header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Kelas</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                <li class="breadcrumb-item active">Kelas</li>
            </ol>
        </div>
    </div>
</div><!-- /.container-fluid -->

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Pencarian Data Menggunakan Algoritma Boyer Moore</h3>
    </div>
    <div class="card-body">
        <form method="GET">
            <div class="row">
                <div class="col-md-10">
                    <input type="text" class="form-control" name="search" value="{{ request('search') }}">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary btn-block">Cari Data</button>
                    <a href="/kelas" class="btn btn-primary btn-block">Reset</a>
                </div>

            </div>

            <div class="row mt-2">
                <div class="col">
                    <p>Kecepatan pencarian : {{ $searchSpeed ? round($searchSpeed, 2) . ' detik' : '-' }}</p>
                </div>
            </div>
        </form>
    </div>
</div>

<body class="hold-transition sidebar-mini">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{session('success')}}

                        </div>
                        @endif
                        <ol class="breadcrumb float-sm-left" style="margin-left: 20px; margin-top: 10px;">
                            <a href="addKelas" class="btn btn-primary">
                                <i class="fa fa-plus"></i>
                                Tambah Kelas
                            </a>
                        </ol>
                        <td>
                            <!-- /.card-header -->
                            <div class="card-body" style="border-color: #00B56A;">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr style="background-color: #0069d9; color: white; size: 8px;">
                                            <th>No </th>
                                            <th>Kelas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php $no = 0; ?>
                                    <tbody>
                                        @foreach($datas as $key=>$values)
                                        <?php $no++; ?>
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $values->nama_kelas }}</td>
                                            <td>
                                                <form action="{{ route('kelas.destroy', $values->id_kelas) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('kelas.edit', $values->id_kelas) }}" class="btn btn-success btn-xs shadow"> <span class="fas fa-edit"></span></a>

                                                    <button type="submit" class="btn btn-sm btn-danger btn-xs shadow" onclick="return confirm('Yakin Ingin Menghapus kelas {{ $values->nama_kelas }} ? ');" action="{{url('kelas',$values->id_kelas)}}"> <span class="fas fa-trash"></span>

                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </div>
                </div>
            </div>
        </div>

    </section>

</body>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(300, 0).slideUp(300, function() {
            $(this).remove();
        });
    }, 5000);
</script>
@endsection