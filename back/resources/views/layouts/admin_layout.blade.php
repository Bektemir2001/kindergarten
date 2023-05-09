<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>kindergarten</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">

    <link rel="stylesheet" href="{{asset('table/jquery.dataTables.min.css')}}">
    <script type="text/javascript" language="javascript" src="{{asset('table/jquery-3.5.1.js')}}"></script>

    <script type="text/javascript" language="javascript" src="{{asset('table/jquery.dataTables.min.js')}}" defer></script>

    <script type="text/javascript" class="init">
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="front/admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div> -->

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a href="{{route('index')}}" class="nav-link">
                    <btn class="btn btn-sm" style="background-color:#5f1dea; color: white">Back</btn>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('admin')}}" class="brand-link">
            <img src="{{asset('dist/img/logo_aruu.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">ARUU</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info text-center">
                    <a href="#" class="d-block">{{auth()->user()->name}} {{auth()->user()->surname}}</a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="{{route('admin.user.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Users
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.group.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-list"></i>
                            <p>
                                Groups
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.children.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-child"></i>
                            <p>
                                Children
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-file"></i>
                            <p>
                                Resumes
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.resume.index')}}" class="nav-link">
                                    <i class="far nav-icon"></i>
                                    <p>Employee Resumes</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.resume.question.index')}}" class="nav-link">
                                    <i class="far nav-icon"></i>
                                    <p>Questions</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.enroll.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-tasks"></i>
                            <p>
                                Queue
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-money-check-alt"></i>
                            <p>
                                Payment
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.mainGallery.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-photo-video"></i>
                            <p>
                                Main gallery
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@yield('content')
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
</body>
</html>
