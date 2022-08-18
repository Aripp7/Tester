@extends('layout.main',['title' => 'Data Surat '] )

@section('content-header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Manajemen Surat</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Surat</li>
            </ol>
        </div>

        <!-- <body class="hold-transition sidebar-mini">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form action="cetakLaporanSurat">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="nama">Pilih Tanggal:</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" style="width: 30%;" id="nama" name="tgl_surat">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="Jenis_kelamin">Jenis Surat:</label>
                                    <select class="form-control select2" name="Jenis_kelamin" style="width: 20%; margin-left: 8px;">
                                        <option selected="selected">-- Pilih --</option>
                                        <option value="keluar">Surat Keluar</option>
                                        <option value="masuk">Surat Masuk</option>
                                    </select>
                                </div>
                            </form>
                            <ol class="breadcrumb float-sm-right">
                                <a href="cetakSurat" class="btn btn-primary" style="margin: 10px 10px">
                                    <i class="fa fa-print"></i>
                                    Cetak Laporan
                                </a>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </body> -->
    </div>
    <!-- /.container-fluid -->
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
                        <a href="/surat" class="btn btn-primary btn-block">Reset</a>
                    </div>

                </div>

                <div class="row mt-2">
                    <div class="col">
                        <p>Kecepatan pencarian : {{ $searchSpeed ? round($searchSpeed, 2) . ' ms' : '-' }}</p>
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
                            @if(session()->has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{session('error')}}
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            </div>
                            @endif
                            <div class="card-header">
                                <ol class="breadcrumb float-sm-left">
                                    <a href="addSurat" class="btn btn-primary">
                                        <i class="fa fa-plus"></i>
                                        Tambah Data
                                    </a>
                                </ol>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr style="background-color: #0069d9; color: white; size: 8px">
                                            <th>No </th>
                                            <th>Tanggal Surat</th>
                                            <th>Jenis</th>
                                            <th>Dari/Tujuan</th>
                                            <th>Keterangan</th>
                                            <th>File</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php $no = 0; ?>
                                    <tbody>,
                                        @foreach($datas as $key=>$values)
                                        <?php $no++; ?>
                                        <tr>
                                            <td>{{ $no}}</td>
                                            <td>{{ $values->tgl_surat }}</td>

                                            <td style="justify-content: center;"><span class="{{ ($values->jenis_surat == 'Surat Masuk') ? 'badge badge-success' : 'badge badge-info' }}">{{ $values->jenis_surat }}</span>
                                            </td>
                                            <!-- <td>{{ $values->jenis_surat }}</td> -->
                                            <td>{{ $values->tujuan }}</td>
                                            <td>{{ $values->keterangan }}</td>
                                            <td align="center">
                                                <a href="dokumen/{{$values->file_surat}}" class="btn btn-success btn-xs shadow"> <span class="fas fa-download"></span></a>
                                            </td>

                                            <td align="center">
                                                <form action="{{ route('surat.destroy', $values->id_surat) }}" method=" post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('surat.edit', $values->id_surat) }}" class="btn btn-success btn-xs shadow"> <span class="fas fa-edit"></span></a>
                                                    <!-- <a href="{{ route('surat.show', $values->id_surat) }}" class="btn btn-warning btn-xs shadow"> <span class="fas fa-eye"></span></a> -->
                                                    <button type="submit" class="btn btn-sm btn-danger btn-xs shadow" onclick="return confirm('Yakin Ingin Menghapus {{ $values->nomor_surat }} ? ');" action="{{url('surat',$values->id_surat)}}"> <span class="fas fa-trash"></span>

                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
</div>
</body>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(300, 0).slideUp(300, function() {
            $(this).remove();
        });
    }, 5000);
</script>
@endsection
@section('content')