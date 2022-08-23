@extends('layout.main',['title' => 'Selamat Datang '] )

@section('content-header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Dashboard</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Pencarian Data Menggunakan Algoritma Boyer Moore</h3>
        <div class="col-sm-6">
            <!-- <h1>Hello, {{ Session::get('nama') }}</h1> -->
        </div>
    </div>
    <div class="card-body">
        <form method="GET">
            <div class="row">
                <form action="{{ request('search2') }}">
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="search2">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-block">Cari Data</button>
                        <a href="" class="btn btn-primary btn-block">Reset</a>
                    </div>
                </form>
            </div>


            <div class="row mt-2">
                <div class="col">
                    <p>Kecepatan pencarian : {{ $searchSpeed ? round($searchSpeed, 2) . ' detik' : '-' }}</p>
                </div>
            </div>
        </form>
    </div>
</div>









@endsection