@extends('layout.main',['title' => 'Detail User'] )

@section('content-header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Detail User</h1>
        </div>
    </div>
</div>
<!-- Main content -->
<section class="content" style="margin-left: 20px;">
    <div class="table table-bordered no-margin">
        <tbody>
            <tr>
                <th style="width: 100px;">Nama</th>
                <th>:</th>
                <th>{{$user->nama}}</th>
            </tr>
            <tr>
                <th style="width: 100px;">Username</th>
                <th>:</th>
                <th>{{$user->username}}</th>
            </tr>
        </tbody>
    </div>
</section>

@endsection