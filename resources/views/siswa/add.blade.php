@extends('layout.main',['title' => 'Tambah Siswa '] )

@section('content-header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tambah Siswa</h1>
        </div>
    </div>
</div>
<!-- Main content -->
<section class="content" style="margin-left: 20px;">
    <div class="col">
        <form class="form-horizontal" action="postSiswa" method="POST">
            {{ csrf_field() }}
            {{ method_field('put')}}
            <div class="form-group">
                <label class="control-label col-sm-2" for="nama">Nama:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nisn">NISN:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nisn" name="nisn" placeholder="nisn">
                </div>
            </div>


            <div class="form-group">
                <label class="control-label col-sm-2" for="jenis_kelamin">Jenis Kelamin:</label>
                <select class="form-control select2" name="jenis_kelamin" style="width: 50%; margin-left: 8px;">
                    <option selected="selected">Pilih Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="tgl_lahir">Tanggal Lahir:</label>
                <div class="col-sm-10">
                    <input type="date" data-date-format="yyyy/mm/dd" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="tempat_lahir">Tempat Lahir:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="agama">Agama:</label>
                <select class="form-control select2" name="agama" style="width: 50%; margin-left: 8px;">
                    <option selected="selected">Pilih Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                </select>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="alamat">Alamat:</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nama_ayah">Nama Ayah:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="nama_ibu">Nama ibu:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Nama ibu">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="kelas">Kelas:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas"></input>
                </div>
                <small style="margin-left: 10px;">Contoh : XI IPA 2</small>
            </div>



            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </div>

        </form>
    </div>
</section>

@endsection