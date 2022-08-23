@extends('layout.main',['title' => 'Detail User '] )

@section('content-header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Detail User</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item "><a href="/user">User</a></li>
                <li class="breadcrumb-item active">Detail User</li>
            </ol>
        </div>
    </div>
</div>

<!-- Main content -->
<section class="content" style="margin-left: 20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="table table-bordered no-margin">
                        <tbody>
                            <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                            <table class="table-landscape" style="text-align:left; width:100%;">
                                <tbody>
                                    <tr>
                                        <th>Nama</th>
                                        <td style="text-transform:none;">{{$user->nama}}</td>
                                    </tr>
                                    <tr>
                                        <th>Username</th>
                                        <td>{{$user->username}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{$user->email}}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </tbody>
                    </div>
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-success btn-block"> <span class="fas fa-edit"> Edit</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection