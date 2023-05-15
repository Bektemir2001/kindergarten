<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Aruu</title>
    <link rel="apple-touch-icon" href="{{asset('employee_template/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('new_template/img/aruu%20logo1.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i|Comfortaa:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('employee_template/app-assets/css/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('employee_template/app-assets/vendors/css/charts/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('employee_template/app-assets/vendors/css/charts/chartist-plugin-tooltip.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('employee_template/app-assets/css/app.css')}}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('employee_template/app-assets/css/core/menu/menu-types/vertical-compact-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('employee_template/app-assets/vendors/css/cryptocoins/cryptocoins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('employee_template/app-assets/css/pages/timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('employee_template/app-assets/css/pages/dashboard-ico.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('employee_template/app-assets/css/free.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('employee_template/assets/css/style.css')}}">
    <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-compact-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">

<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-light navbar-bg-color">
    <div class="navbar-wrapper">
        <div class="navbar-header d-md-none">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item d-md-none"><a class="navbar-brand" href="{{route('index')}}"><img class="brand-logo d-none d-md-block" src="{{asset('dist/img/logo_aruu.jpg')}}"><img class="brand-logo d-sm-block d-md-none" alt="Aruu logo sm" src="{{asset('dist/img/logo_aruu.jpg')}}"></a></li>
                <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v">   </i></a></li>
            </ul>
        </div>
        <div class="navbar-container">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu">         </i></a></li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="nav-item">
                        <a href="{{route('index')}}" class="nav-link">
                            <btn class="btn btn-outline-primary" style="border-color:#5f1dea; background-color:#5f1dea; color: white">Назад</btn>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="nav-item">
                        <a href="{{route('user.logout')}}" class="nav-link">
                            <btn class="btn btn-outline-primary" style="border-color:#5f1dea; background-color:#5f1dea; color: white">Выйти</btn>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="app-content content">
    @yield('content')
</div>

<div class="main-menu menu-fixed menu-dark">
    <div class="main-menu-content"><a class="navigation-brand d-none d-md-block d-lg-block d-xl-block" href="{{route('index')}}"><img class="brand-logo" style="border-radius: 10px;" alt="Aruu logo" src="{{asset('dist/img/logo_aruu.jpg')}}"/></a>
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="active"><a href="{{route('employee', auth()->user()->id)}}"><i class="icon-grid"></i><span class="menu-title" data-i18n="">Главная</span></a>
            </li>
            <li class=" nav-item "><a href="{{route('employee.group.index')}}"><i class="cil-group"></i><span class="menu-title" data-i18n="">Моя группа</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-wallet"></i><span class="menu-title" data-i18n="">Оплата</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('employee.attendance.index')}}"><i class="icon-user-following"></i><span class="menu-title" data-i18n="">Посещение</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-support"></i><span class="menu-title" data-i18n="">FAQ</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-user"></i><span class="menu-title" data-i18n="">Аккаунт</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('employee.profile', auth()->user()->id)}}">Профиль</a>
                    </li>
                    <li><a class="menu-item" href="{{route('user.logout')}}">Выйти</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- BEGIN VENDOR JS-->
<script src="{{asset('employee_template/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('employee_template/app-assets/vendors/js/charts/chartist.min.js')}}" type="text/javascript"></script>
<script src="{{asset('employee_template/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js')}}" type="text/javascript"></script>
<script src="{{asset('employee_template/app-assets/vendors/js/timeline/horizontal-timeline.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{asset('employee_template/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{asset('employee_template/app-assets/js/core/app.js')}}" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('employee_template/app-assets/js/scripts/pages/dashboard-ico.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->
</body>
</html>
