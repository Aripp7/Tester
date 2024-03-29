@extends('layout.main',['title' => 'Jadwal Pelajaran'] )

@section('content-header')


<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Jadwal Pelajaran'</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                <li class="breadcrumb-item active">DJadwal Pelajaran'</li>
            </ol>
        </div>
    </div>
</div><!-- /.container-fluid -->


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
                                <a href="addSiswa" class="btn btn-primary">
                                    <i class="fa fa-plus"></i>
                                    Tambah Data
                                </a>
                            </ol>
                            <ol class="breadcrumb float-sm-right">
                                <a href="cetakSiswa" class="btn btn-primary" style="margin-left: 10px;">
                                    <i class="fa fa-print"></i>
                                    Cetak Laporan
                                </a>
                            </ol>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr style="background-color: #0069d9; color: white; size: 8px">
                                        <!-- <th>No </th> -->
                                        <th>NISN </th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <?php $no = 0; ?>
                                <tbody>
                                    @foreach($datas as $key=>$values)
                                    <?php $no++; ?>
                                    <tr>
                                        <td>{{ $values->nisn }}</td>
                                        <td>{{ $values->nama_siswa }}</td>
                                        <td>{{ $values->kelas }}</td>
                                        <td>
                                            <form action="{{ route('siswa.destroy', $values->id_siswa) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('siswa.edit', $values->id_siswa) }}" class="btn btn-success btn-xs shadow"> <span class="fas fa-edit"></span></a>
                                                <a href="{{ route('siswa.show', $values->id_siswa) }}" class="btn btn-warning btn-xs shadow"> <span class="fas fa-eye"></span></a>

                                                <button type="submit" class="btn btn-sm btn-danger btn-xs shadow" onclick="return confirm('Yakin Ingin Menghapus {{ $values->nama }} ? ');" action="{{url('siswa',$values->id_siswa)}}"> <span class="fas fa-trash"></span>

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