<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selamat Datang Administrator</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page" style="background-image: url('adminlte/dist/img/latar sma.jpg'); background-size: cover; width:auto;">




    <div class="login-box ">
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg"><b>Selamat Datang Administrator</b></p>

                <form action="{{route('login-admin')}}" method="POST">
                    @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>
                    @endif
                    <!-- alert alert-danger d-flex align-items-center -->
                    @if(session()->has('loginError'))
                    <div style="margin-bottom: 10px; color:crimson; margin-left: 115px;" role="alert">
                        {{session()->get('loginError')}}
                    </div>
                    @endif
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @if ($errors->has('username'))
                        <span class="margin-bottom: 10px; color:crimson; margin-left: 115px;">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-4">
                            <input type="submit" class="btn btn-primary btn-block" value="Login"></input>
                            <a href="dashboard">Lupa Password?</a>
                        </div>



                        <div class="col-4" style="margin-top: 60px; margin-left: 110px;">
                            <a href="/">Homepage</a>

                        </div>


                    </div>
                    <!-- /.col -->
            </div>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>


    <!-- jQuery -->
    <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/adminlte/dist/js/adminlte.min.js"></script>
</body>

</html>