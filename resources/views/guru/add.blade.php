@extends('layout.main',['title' => 'Tambah Guru '] )

@section('content-header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tambah Guru</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item "><a href="/guru">Guru</a></li>
                <li class="breadcrumb-item active">Tambah Guru</li>
            </ol>
        </div>
    </div>
</div>
<!-- Main content -->
<section class="content" style="margin-left: 20px;">
    <div class="col">
        <form class="form-horizontal" action="postGuru" method="POST">
            {{ csrf_field() }}
            {{ method_field('put')}}
            <div class="form-group">
                <label class="control-label col-sm-2" for="nama">Nama:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nisn">NIP:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nisn" name="nip" placeholder="NIP">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="Jenis_kelamin">Jenis Kelamin:</label>
                <select class="form-control select2" name="Jenis_kelamin" style="width: 50%; margin-left: 8px;">
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
                    <textarea type="text" class="form-control" id="alamat" name="alamat_jalan" placeholder="Alamat"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Dusun">Dusun:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Dusun" name="nama_dusun" placeholder="Dusun"></input>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="Dusun">Kelurahan:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Kelurahan" name="desa_kelurahan" placeholder="Kelurahan"></input>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="Dusun">Kecamatan:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Kecamatan" name="kecamatan" placeholder="Kecamatan"></input>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="agama">Pangkat:</label>
                <select class="form-control select2" name="pangkat_golongan" style="width: 50%; margin-left: 8px;">
                    <option selected="selected">Pilih</option>
                    <option value="I/a">I/a</option>
                    <option value="I/b">I/b</option>
                    <option value="I/c">I/c</option>
                    <option value="I/d">I/d</option>

                    <option value="II/a">II/a</option>
                    <option value="II/b">II/b</option>
                    <option value="II/c">II/c</option>
                    <option value="II/d">II/d</option>

                    <option value="III/a">III/a</option>
                    <option value="III/b">III/b</option>
                    <option value="III/c">III/c</option>
                    <option value="III/d">III/d</option>

                    <option value="IV/a">IV/a</option>
                    <option value="IV/b">IV/b</option>
                    <option value="IV/c">IV/c</option>
                    <option value="IV/d">IV/d</option>
                </select>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary btn-block">Tambah</button>
                    <a href="/guru" type="submit" class="btn btn-danger btn-block">Batal</a>
                </div>
            </div>

        </form>
    </div>
</section>

@endsection