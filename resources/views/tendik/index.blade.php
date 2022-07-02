@extends('layout.main',['title' => 'Data Tenaga Pendidik '] )

@section('content-header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tenaga Pendidik</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Tendik</li>
            </ol>
        </div>

    </div>
    <!-- /.container-fluid -->

    <body class="hold-transition sidebar-mini">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <ol class="breadcrumb float-sm-left">
                                    <a href="addTendik" class="btn btn-primary">
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
                                            <!-- <th>No </th> -->
                                            <th>Nip </th>
                                            <th>Nama</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Agama</th>
                                            <th>Kecamatan</th>
                                            <th>Alamat</th>
                                            <th>Pangkat</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>

                                    <?php $no = 0; ?>
                                    <tbody>

                                        @foreach($datas as $key=>$values)
                                        <?php $no++; ?>
                                        <tr>
                                            <!-- <td>{{ $no }}</td> -->

                                            <td>{{ $values->nip }}</td>
                                            <td>{{ $values->nama }}</td>
                                            <td>{{ $values->tempat_lahir }}</td>
                                            <td>{{ $values->tanggal_lahir }}</td>
                                            <td>{{ $values->agama }}</td>
                                            <td>{{ $values->kecamatan }}</td>
                                            <td>{{ $values->alamat_jalan }}</td>
                                            <td>{{ $values->pangkat_golongan }}</td>

                                            <td>
                                                <form action="{{ route('tendik.destroy', $values->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('tendik.edit', $values->id) }}" class="btn btn-success btn-xs shadow"> <span class="fas fa-edit"></span></a>

                                                    <button type="submit" class="btn btn-sm btn-danger btn-xs shadow" onclick="return confirm('Yakin Ingin Menghapus {{ $values->nama }} ? ');" action="{{url('tendik',$values->id)}}"> <span class="fas fa-trash"></span>

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
< </body>




    @endsection
    @section('content')