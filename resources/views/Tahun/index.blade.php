@extends('layout.main',['title' => 'Tahun Ajaran'] )

@section('content-header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tahun Ajaran</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                <li class="breadcrumb-item active">Tahun Ajaran</li>
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
                        <ol class="breadcrumb float-sm-left" style="margin-left: 20px; margin-top: 10px;">
                            <a href="addtahun" class="btn btn-primary">
                                <i class="fa fa-plus"></i>
                                Tambah Tahun Ajaran
                            </a>
                        </ol>
                        <td>
                            <!-- /.card-header -->
                            <div class="card-body" style="border-color: #00B56A;">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr style="background-color: #0069d9; color: white; size: 8px;">
                                            <th>No </th>
                                            <th>Tahun</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php $no = 0; ?>
                                    <tbody>
                                        @foreach($datas as $key=>$values)
                                        <?php $no++; ?>
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $values->tahun }}</td>
                                            <td style="justify-content: center;"><span class="{{ ($values->status == 'Aktif') ? ' badge badge-success' : ' badge badge-danger' }}">{{ $values->status }}</span></td>
                                            <td>
                                                <form action="{{ route('tahun.destroy', $values->id_tahun) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('tahun.edit', $values->id_tahun) }}" class="btn btn-success btn-xs shadow"> <span class="fas fa-edit"></span></a>

                                                    <button type="submit" class="btn btn-sm btn-danger btn-xs shadow" onclick="return confirm('Yakin Ingin Menghapus {{ $values->nama }} ? ');" action="{{url('siswa',$values->id)}}"> <span class="fas fa-trash"></span>

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