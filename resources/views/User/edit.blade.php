@extends('layout.main',['title' => 'Edit User '] )

@section('content-header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Edit User</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item "><a href="/user">User</a></li>
                <li class="breadcrumb-item active">Edit User</li>
            </ol>
        </div>
    </div>
</div>
<!-- Main content -->
<section class="content" style="margin-left: 20px;">
    <div class="col">
        <form class="form-horizontal" action="{{url ('userUpdate/'.$model->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('put')}}
            <div class="form-group">
                <label class="control-label col-sm-2" for="nama_user">Nama:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_user" name="nama_user" value="{{$model->nama}}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="username">Username:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username" value="{{$model->username}}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" value="{{$model->email}}">
                </div>
            </div>


            <div class="form-group">
                <label class="control-label col-sm-2" for="password">Masukkan Password Jika diubah:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password baru">
                    <input type="checkbox" onclick="myFunction()"> Show Password
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                    <a href="/user" type="submit" class="btn btn-danger btn-block">Batal</a>
                </div>
            </div>

        </form>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</section>

@endsection