@extends('layout.main',['title' => 'Tambah Tenaga Pendidik '] )

@section('content-header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tambah Tenaga Pendidik</h1>
        </div>
    </div>
</div>
<!-- Main content -->
<section class="content" style="margin-left: 20px;">
    <div class="col-md-9" style="display: flex;">
        <form class="col-md-6">
            <div class="form-group" style="width: 50%">
                <label for="nama">Nama Siswa</label>
                <input class="form-control" id="nama" aria-describedby="nama" required placeholder="Masukkan nama">
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control select2" style="width: 50%;">
                    <option selected="selected">Pilih Jenis Kelamin</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
            </div>
            <div class="form-group" style="width: 50%">
                <label>NISN</label>
                <input class="form-control" id="nisn" required placeholder="NISN">
            </div>
            <div class="form-group" style="width: 50%">
                <label>Tempat Lahir</label>
                <input class="form-control" id="tempat_lahir" required placeholder="Tempat Lahir">
            </div>
            <div class="form-group" style="width: 50%">
                <label>Agama</label>
                <input class="form-control" id="agama" required placeholder="Agama">
            </div>
            <button type="submit" class="btn btn-primary">Tambahkan</button>
        </form>

        <form class="col-md-6">
            <div class="form-group" style="width: 50%">
                <label for="nama">Alamat</label>
                <textarea class="form-control" id="alamat" aria-describedby="alamat" required placeholder="Masukkan Alamat"></textarea>
            </div>

            <div class="form-group" style="width: 50%">
                <label for="nama">Tanggal Lahir</label>
                <input class="form-control" id="tgl_lahir" aria-describedby="" required placeholder="">
            </div>

            <div class="form-group" style="width: 50%">
                <label>Nama Ayah</label>
                <input class="form-control" id="nama_ayah" required placeholder="Nama Ayah">
            </div>
            <div class="form-group" style="width: 50%">
                <label>Nama Ibu</label>
                <input class="form-control" id="nama_ibu" required placeholder="Nama Ibu">
            </div>
            <div class="form-group" style="width: 50%">
                <label>Kelas</label>

                <input class="form-control" id="kelas" required placeholder="Masukkan Kelas">
                <small>Contoh : XII IPA 4</small>

            </div>

        </form>
    </div>

</section>

@endsection