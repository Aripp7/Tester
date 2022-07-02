<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar profile -->
        <li class="dropdown">
            <img src="/public/img/icons8-user-80.png" alt="">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Admin<span class="caret"></span> <i class="fas fa-user"></i></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="profile" class="btn btn-link navbar-btn navbar-link">Profile</a>
                </li>
                <li>
                    <button type="button" class="btn btn-link navbar-btn navbar-link" data-toggle="modal" data-target="#myModal">Logout</button>
                </li>
            </ul>

        </li>
    </ul>
</nav>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">

                <h4 class="modal-title">Logout?</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                <p>Yakin Ingin Logout?</p>
            </div>
            <!-- footer modal -->
            <div class="modal-footer">

                <a href="#" class="btn btn-primary" data-dismiss="modal">Indak Jadi</a>

                <a href="logout" class="btn btn-danger">Gass Logout</a>
            </div>
        </div>
    </div>
</div>