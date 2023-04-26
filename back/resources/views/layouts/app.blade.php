<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Aruu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('new_template/img/aruu%20logo1.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('new_template/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('new_template/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('new_template/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('new_template/css/style.css')}}" rel="stylesheet">
</head>

<body>
<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
        <a href="" class="navbar-brand">
            <h1 class="m-0 text-primary"><img src="{{asset('new_template/img/aruu%20logo1.png')}}" style="height: 100px; width: 100px" alt=""><img src="{{asset('new_template/img/aruu%20logo2.png')}}" style="height: 100px; width: 100px"></h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Мои дети</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                        <a href="" class="dropdown-item">Ребенок 1</a>
                        <a href="" class="dropdown-item">Ребенок 2</a>
                    </div>
                </div>
                <a href="" class="nav-item nav-link">О нас</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Родителям</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                        <a href="" class="dropdown-item">Часто задаваемые вопросы</a>
                        <a href="" class="dropdown-item">Читаем детям</a>
                    </div>
                </div>
                <a href="" class="nav-item nav-link">Услуги</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Галерея</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                        <a href="" class="dropdown-item">Фото</a>
                        <a href="" class="dropdown-item">Видео</a>
                    </div>
                </div>
                <!--                    <a href="index.html" class="nav-item nav-link active">Home</a>-->
                <a href="" class="nav-item nav-link">Контакты</a>
            </div>
            <a class="navbar-brand" href="#">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary rounded-pill px-3 d-none d-lg-block"
                        data-bs-toggle="modal" data-bs-target="#modalMessage">
                    Записаться
                </button>
                <!-- Modal Message -->
                <div class="modal fade" id="modalMessage" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <!-- Email input -->
                                    <div class="form-outline mb-3">
                                        <label class="form-label" for="email">Without registration, you cannot enroll a child.</label>
                                    </div>
                                    <div class="form-outline mb-3">
                                        <label class="form-label" for="email">If you have an account, sing in, if not, sign up.</label>
                                    </div>
                                    <!-- Submit button -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary rounded-pill px-3 d-none d-lg-block"
                                                data-bs-toggle="modal" data-bs-target="#modalSignIn">
                                            Войти
                                        </button>
                                        <button type="button" class="btn btn-primary rounded-pill px-3 d-none d-lg-block"
                                                data-bs-toggle="modal" data-bs-target="#modalSignUp">
                                            Зарегистрироваться
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a class="navbar-brand" href="#">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary rounded-pill px-3 d-none d-lg-block"
                        data-bs-toggle="modal" data-bs-target="#modalSignIn">
                     Войти
                </button>
                <!-- Modal SignIN -->
                <div class="modal fade" id="modalSignIn" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Sing In</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('user.auth') }}" >
                                    @csrf
                                    <!-- Email input -->
                                    <div class="field">
                                        <i class="icon fas fa-user"></i>
                                        <input type="email" id="email" name="email" placeholder="Email Address" class="login__input @error('email') is-invalid @enderror" required autocomplete="email">
                                        @if(session('errorWithEmail'))
                                            <p class="text-danger">{{session('errorWithEmail')}}</p>
                                            <script>
                                                document.getElementById('email').value = "{{session('email')}}";
                                            </script>
                                        @endif
                                    </div>
                                    <div class="field">
                                        <i class="icon fas fa-lock"></i>
                                        <input type="password" id="password" name="password" placeholder="Password" class="login__input @error('password') is-invalid @enderror" required autocomplete="new-password">
                                        @if(session('errorWithPassword'))
                                            <p class="text-danger">{{session('errorWithPassword')}}</p>
                                            <script>
                                                document.getElementById('email').value = "{{session('email')}}";
                                            </script>
                                        @endif
                                    </div>


                                    <!-- 2 column grid layout for inline styling -->
                                    <div class="row">
                                        <!-- Simple link -->
                                        <a href="{{route('reset.password.form')}}">Forgot password?</a>
                                    </div>
                                    <!-- Submit button -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary rounded-pill px-3 d-none d-lg-block"
                                                data-bs-dismiss="modal">Close</button>
                                        <!-- <button type="button" class="btn btn-primary">Sign in</button> -->
                                        <button type="submit" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a class="navbar-brand" href="#">
                <!-- Button trigger modal -->
                <button type="button btn btn-success" class="btn btn-light border border-success"
                        data-bs-toggle="modal" data-bs-target="#modalSignUp">
                    Sign Up
                </button>
                <!-- Modal SignUP -->
                <div class="modal fade" id="modalSignUp" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Sign up</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('user.register') }}" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Name input -->
                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="name">Name</label>
                                        <input type="text" id="name" name="name" placeholder="Name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>

                                    <!-- Surname input -->
                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="surname">Surname</label>
                                        <input type="text" id="surname" name="surname" placeholder="Surname" class="form-control @error('surname') is-invalid @enderror" value="{{ old('surname') }}" required autocomplete="surname" autofocus>
                                        @error('surname')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>>
                                        @enderror
                                    </div>

                                    <!-- Home Address input -->
                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="address">Home Address</label>
                                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>

                                    <!-- Phone Number input -->
                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="phone_number">Phone Number</label>
                                        <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>

                                        @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="email">Email address</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="password">Password</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>

                                    <!-- Passport front input -->
                                    <div class="mb-3">
                                        <label for="fileF" class="form-label">Passport Front</label>
                                        <input id="passport_front" type="file" class="form-control @error('passport_front') is-invalid @enderror" name="passport_front" value="{{ old('passport_front') }}">

                                        @error('passport_front')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>

                                    <!-- Passport back input -->
                                    <div class="mb-3">
                                        <label for="fileB" class="form-label">Passport Back</label>
                                        <input id="passport_back" type="file" class="form-control @error('passport_back') is-invalid @enderror" name="passport_back" value="{{ old('passport_back') }}">

                                        @error('passport_back')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-success btn-block">Register</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </nav>
    <!-- Navbar End -->
        <div id="app">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <a class="btn btn-link text-white-50" href="">About Us</a>
                    <a class="btn btn-link text-white-50" href="">Contact Us</a>
                    <a class="btn btn-link text-white-50" href="">Our Services</a>
                    <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                    <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Photo Gallery</h3>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="{{asset('new_template/img/classes-1.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="{{asset('new_template/img/classes-2.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="{{asset('new_template/img/classes-3.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="{{asset('new_template/img/classes-4.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="{{asset('new_template/img/classes-5.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="{{asset('new_template/img/classes-6.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Newsletter</h3>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('new_template/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('new_template/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('new_template/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('new_template/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('new_template/js/main.js')}}"></script>
</body>

</html>

{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <!-- CSRF Token -->--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <title>{{ config('app.name', 'Kindergarten Aruu') }}</title>--}}

{{--    <!-- Fonts -->--}}
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">--}}
{{--    <link rel="stylesheet" href="{{asset('style/user_index_style.css')}}">--}}
{{--    <!-- Scripts -->--}}
{{--</head>--}}
{{--<body>--}}
{{--<nav class="navbar navbar-expand-lg navbar-light bg-light" >--}}
{{--    <div class="container-fluid">--}}
{{--        <a class="navbar-brand" href="#">--}}
{{--            <img src="" alt="Logo" width="30" height="24" class="d-inline-block align-text-center" />--}}
{{--            Aruu--}}
{{--        </a>--}}
{{--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"--}}
{{--                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"--}}
{{--                aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"--}}
{{--                       aria-expanded="false">--}}
{{--                        Мои Дети--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        <li><a class="dropdown-item" href="#">ребёнок 1</a></li>--}}

{{--                        <li><a class="dropdown-item" href="#">ребёнок 2</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" aria-current="page" href="#">O нас</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"--}}
{{--                       aria-expanded="false">--}}
{{--                        Родителям--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        <li><a class="dropdown-item" href="#">1. Часто задаваемые вопросы</a></li>--}}

{{--                        <li><a class="dropdown-item" href="#">2. Читаем детям</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Услуги</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"--}}
{{--                       aria-expanded="false">--}}
{{--                        Галерея--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        <li><a class="dropdown-item" href="#">1. Фото</a></li>--}}

{{--                        <li><a class="dropdown-item" href="#">2. Видео</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Контакты</a>--}}
{{--                </li>--}}
{{--                <div class="ch">--}}
{{--                    @if(auth()->user())--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="navbar-brand" href="{{route('enroll.index')}}">--}}
{{--                                <!-- Button trigger modal -->--}}
{{--                                <button type="button btn btn-success" class="btn btn-light border border-success">--}}
{{--                                    Записаться--}}
{{--                                </button>--}}
{{--                                <!-- Modal Enroll -->--}}
{{--                                <div class="modal fade"  id="modalEnroll" tabindex="-1" aria-labelledby="exampleModalLabel"--}}
{{--                                     aria-hidden="true">--}}
{{--                                    <div class="modal-dialog" >--}}
{{--                                        <div class="modal-content" style="width: 700px; height: 100%">--}}
{{--                                            <div class="modal-header">--}}
{{--                                                <h5 class="modal-title" id="exampleModalLabel">Enroll a child</h5>--}}
{{--                                                <button type="button" class="btn-close" data-bs-dismiss="modal"--}}
{{--                                                        aria-label="Close"></button>--}}
{{--                                            </div>--}}
{{--                                            <div class="modal-body">--}}

{{--                                                <form id="form" method="POST" action="{{route('enroll.create')}}" enctype="multipart/form-data">--}}
{{--                                                    @csrf--}}
{{--                                                    <div class="form-outline mb-2">--}}
{{--                                                        <label for="name" class="form-label">{{ __('Name') }}</label>--}}
{{--                                                        <div class="col-md-6">--}}
{{--                                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus oninvalid="this.setCustomValidity('Please fill in the field')" oninput="this.setCustomValidity('')">--}}
{{--                                                            @error('name')--}}
{{--                                                            <span class="invalid-feedback" role="alert">--}}
{{--                                                                <strong>{{ $message }}</strong>--}}
{{--                                                            </span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="form-outline mb-2">--}}
{{--                                                        <label for="surname" class="form-label">{{ __('Surname') }}</label>--}}
{{--                                                        <div class="col-md-6">--}}
{{--                                                            <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autofocus oninvalid="this.setCustomValidity('Please fill in the field')" oninput="this.setCustomValidity('')">--}}
{{--                                                            @error('surname')--}}
{{--                                                            <span class="invalid-feedback" role="alert">--}}
{{--                                                                <strong>{{ $message }}</strong>--}}
{{--                                                            </span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="form-outline mb-2">--}}
{{--                                                        <label for="birth_date" class="form-label">{{ __('Birth Date') }}</label>--}}
{{--                                                        <div class="col-md-6">--}}
{{--                                                            <input id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date') }}" required autofocus oninvalid="this.setCustomValidity('Please fill in the field')" oninput="this.setCustomValidity('')">--}}
{{--                                                            @error('birth_date')--}}
{{--                                                            <span class="invalid-feedback" role="alert">--}}
{{--                                                                <strong>{{ $message }}</strong>--}}
{{--                                                            </span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="form-outline mb-2">--}}
{{--                                                        <label for="photo" class="form-label">{{ __("Child's Photo") }}</label>--}}
{{--                                                        <div class="col-md-6">--}}
{{--                                                            <input id="photo" type="file" accept="image/png, image/gif, image/jpeg" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" required autofocus oninvalid="this.setCustomValidity('Please select a file')" oninput="this.setCustomValidity('')">--}}
{{--                                                            @error('photo')--}}
{{--                                                            <span class="invalid-feedback" role="alert">--}}
{{--                                                                <strong>{{ $message }}</strong>--}}
{{--                                                            </span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="form-outline mb-2">--}}
{{--                                                        <label for="birth_certificate" class="form-label">{{ __("Birth Certificate") }}</label>--}}
{{--                                                        <div class="col-md-6">--}}
{{--                                                            <input id="birth_certificate" type="file"  class="form-control @error('birth_certificate') is-invalid @enderror" name="birth_certificate" value="{{ old('birth_certificate') }}" required autofocus oninvalid="this.setCustomValidity('Please select a file')" oninput="this.setCustomValidity('')">--}}
{{--                                                            @error('birth_certificate')--}}
{{--                                                            <span class="invalid-feedback" role="alert">--}}
{{--                                                                <strong>{{ $message }}</strong>--}}
{{--                                                            </span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="form-outline mb-2">--}}
{{--                                                        <label for="med_certificate" class="form-label">{{ __("Medical Certificate") }}</label>--}}
{{--                                                        <div class="col-md-6">--}}
{{--                                                            <input id="med_certificate" type="file" class="form-control @error('med_certificate') is-invalid @enderror" name="med_certificate" value="{{ old('med_certificate') }}" required autofocus oninvalid="this.setCustomValidity('Please select a file')" oninput="this.setCustomValidity('')">--}}
{{--                                                            @error('med_certificate')--}}
{{--                                                            <span class="invalid-feedback" role="alert">--}}
{{--                                                                <strong>{{ $message }}</strong>--}}
{{--                                                            </span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="modal-footer">--}}
{{--                                                        <button type="button" class="btn btn-secondary"--}}
{{--                                                                data-bs-dismiss="modal">Close</button>--}}
{{--                                                        <!-- Submit button -->--}}
{{--                                                        <button type="submit" class="btn btn-success btn-block">Submit</button>--}}
{{--                                                    </div>--}}
{{--                                                </form>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="navbar-brand" href="#">--}}
{{--                                <!-- Button trigger modal -->--}}
{{--                                <button onclick="location.href='{{route('user.logout')}}'" type="button" class="btn btn-light border border-primary">--}}
{{--                                    Sign out--}}
{{--                                </button>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    @else--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="navbar-brand" href="#">--}}
{{--                                <!-- Button trigger modal -->--}}
{{--                                <button type="button btn btn-success" class="btn btn-light border border-success"--}}
{{--                                        data-bs-toggle="modal" data-bs-target="#modalMessage">--}}
{{--                                    Записаться--}}
{{--                                </button>--}}
{{--                                <!-- Modal Message -->--}}
{{--                                <div class="modal fade" id="modalMessage" tabindex="-1" aria-labelledby="exampleModalLabel"--}}
{{--                                     aria-hidden="true">--}}
{{--                                    <div class="modal-dialog">--}}
{{--                                        <div class="modal-content">--}}
{{--                                            <div class="modal-header">--}}
{{--                                                <h5 class="modal-title" id="exampleModalLabel">Message</h5>--}}
{{--                                                <button type="button" class="btn-close" data-bs-dismiss="modal"--}}
{{--                                                        aria-label="Close"></button>--}}
{{--                                            </div>--}}
{{--                                            <div class="modal-body">--}}
{{--                                                <form>--}}
{{--                                                    <!-- Email input -->--}}
{{--                                                    <div class="form-outline mb-3">--}}
{{--                                                        <label class="form-label" for="email">Without registration, you cannot enroll a child.</label>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="form-outline mb-3">--}}
{{--                                                        <label class="form-label" for="email">If you have an account, sing in, if not, sign up.</label>--}}
{{--                                                    </div>--}}
{{--                                                    <!-- Submit button -->--}}
{{--                                                    <div class="modal-footer">--}}
{{--                                                        <button type="button btn-primary" class="btn btn-light border border-primary"--}}
{{--                                                                data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#modalSignIn">--}}
{{--                                                            Sign In--}}
{{--                                                        </button>--}}
{{--                                                        <button type="button btn btn-success" class="btn btn-light border border-success"--}}
{{--                                                                data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#modalSignUp">--}}
{{--                                                            Sign Up--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                </form>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="navbar-brand" href="#">--}}
{{--                                <!-- Button trigger modal -->--}}
{{--                                <button type="button btn-primary" class="btn btn-light border border-primary"--}}
{{--                                        data-bs-toggle="modal" data-bs-target="#modalSignIn">--}}
{{--                                    Sign In--}}
{{--                                </button>--}}
{{--                                <!-- Modal SignIN -->--}}
{{--                                <div class="modal fade" id="modalSignIn" tabindex="-1" aria-labelledby="exampleModalLabel"--}}
{{--                                     aria-hidden="true">--}}
{{--                                    <div class="modal-dialog">--}}
{{--                                        <div class="modal-content">--}}
{{--                                            <div class="modal-header">--}}
{{--                                                <h5 class="modal-title" id="exampleModalLabel">Sing In</h5>--}}
{{--                                                <button type="button" class="btn-close" data-bs-dismiss="modal"--}}
{{--                                                        aria-label="Close"></button>--}}
{{--                                            </div>--}}
{{--                                            <div class="modal-body">--}}
{{--                                                <form method="POST" action="{{ route('user.auth') }}" >--}}
{{--                                                    @csrf--}}
{{--                                                    <!-- Email input -->--}}
{{--                                                    <div class="form-outline mb-3">--}}
{{--                                                        <label class="form-label" for="email">Email address</label>--}}
{{--                                                        <input type="email" id="email" name="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" required autocomplete="email">--}}
{{--                                                        @if(session('errorWithEmail'))--}}
{{--                                                            <p class="text-danger">{{session('errorWithEmail')}}</p>--}}
{{--                                                            <script>--}}
{{--                                                                document.getElementById('email').value = "{{session('email')}}";--}}
{{--                                                            </script>--}}
{{--                                                        @endif--}}
{{--                                                    </div>--}}

{{--                                                    <!-- Password input -->--}}
{{--                                                    <div class="form-outline">--}}
{{--                                                        <label class="form-label" for="password">Password</label>--}}
{{--                                                        <input type="password" id="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">--}}
{{--                                                        @if(session('errorWithPassword'))--}}
{{--                                                            <p class="text-danger">{{session('errorWithPassword')}}</p>--}}
{{--                                                            <script>--}}
{{--                                                                document.getElementById('email').value = "{{session('email')}}";--}}
{{--                                                            </script>--}}
{{--                                                        @endif--}}
{{--                                                    </div>--}}

{{--                                                    <!-- 2 column grid layout for inline styling -->--}}
{{--                                                    <div class="row">--}}
{{--                                                        <!-- Simple link -->--}}
{{--                                                        <a href="{{route('reset.password.form')}}">Forgot password?</a>--}}
{{--                                                    </div>--}}
{{--                                                    <!-- Submit button -->--}}
{{--                                                    <div class="modal-footer">--}}
{{--                                                        <button type="button" class="btn btn-secondary"--}}
{{--                                                                data-bs-dismiss="modal">Close</button>--}}
{{--                                                        <!-- <button type="button" class="btn btn-primary">Sign in</button> -->--}}
{{--                                                        <button type="submit" class="btn btn-primary">Sign in</button>--}}
{{--                                                    </div>--}}
{{--                                                </form>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="navbar-brand" href="#">--}}
{{--                                <!-- Button trigger modal -->--}}
{{--                                <button type="button btn btn-success" class="btn btn-light border border-success"--}}
{{--                                        data-bs-toggle="modal" data-bs-target="#modalSignUp">--}}
{{--                                    Sign Up--}}
{{--                                </button>--}}
{{--                                <!-- Modal SignUP -->--}}
{{--                                <div class="modal fade" id="modalSignUp" tabindex="-1" aria-labelledby="exampleModalLabel"--}}
{{--                                     aria-hidden="true">--}}
{{--                                    <div class="modal-dialog">--}}
{{--                                        <div class="modal-content">--}}
{{--                                            <div class="modal-header">--}}
{{--                                                <h5 class="modal-title" id="exampleModalLabel">Sign up</h5>--}}
{{--                                                <button type="button" class="btn-close" data-bs-dismiss="modal"--}}
{{--                                                        aria-label="Close"></button>--}}
{{--                                            </div>--}}
{{--                                            <div class="modal-body">--}}
{{--                                                <form method="POST" action="{{ route('user.register') }}" enctype="multipart/form-data">--}}
{{--                                                    @csrf--}}
{{--                                                    <!-- Name input -->--}}
{{--                                                    <div class="form-outline mb-2">--}}
{{--                                                        <label class="form-label" for="name">Name</label>--}}
{{--                                                        <input type="text" id="name" name="name" placeholder="Name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}
{{--                                                        @error('name')--}}
{{--                                                        <span class="invalid-feedback" role="alert">--}}
{{--                                                        <strong>{{ $message }}</strong>--}}
{{--                                                    </span>--}}
{{--                                                        @enderror--}}
{{--                                                    </div>--}}

{{--                                                    <!-- Surname input -->--}}
{{--                                                    <div class="form-outline mb-2">--}}
{{--                                                        <label class="form-label" for="surname">Surname</label>--}}
{{--                                                        <input type="text" id="surname" name="surname" placeholder="Surname" class="form-control @error('surname') is-invalid @enderror" value="{{ old('surname') }}" required autocomplete="surname" autofocus>--}}
{{--                                                        @error('surname')--}}
{{--                                                        <span class="invalid-feedback" role="alert">--}}
{{--                                                        <strong>{{ $message }}</strong>--}}
{{--                                                    </span>>--}}
{{--                                                        @enderror--}}
{{--                                                    </div>--}}

{{--                                                    <!-- Home Address input -->--}}
{{--                                                    <div class="form-outline mb-2">--}}
{{--                                                        <label class="form-label" for="address">Home Address</label>--}}
{{--                                                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">--}}

{{--                                                        @error('address')--}}
{{--                                                        <span class="invalid-feedback" role="alert">--}}
{{--                                                        <strong>{{ $message }}</strong>--}}
{{--                                                    </span>--}}
{{--                                                        @enderror--}}
{{--                                                    </div>--}}

{{--                                                    <!-- Phone Number input -->--}}
{{--                                                    <div class="form-outline mb-2">--}}
{{--                                                        <label class="form-label" for="phone_number">Phone Number</label>--}}
{{--                                                        <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>--}}

{{--                                                        @error('phone_number')--}}
{{--                                                        <span class="invalid-feedback" role="alert">--}}
{{--                                                        <strong>{{ $message }}</strong>--}}
{{--                                                    </span>--}}
{{--                                                        @enderror--}}
{{--                                                    </div>--}}

{{--                                                    <!-- Email input -->--}}
{{--                                                    <div class="form-outline mb-2">--}}
{{--                                                        <label class="form-label" for="email">Email address</label>--}}
{{--                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                                        @error('email')--}}
{{--                                                        <span class="invalid-feedback" role="alert">--}}
{{--                                                        <strong>{{ $message }}</strong>--}}
{{--                                                    </span>--}}
{{--                                                        @enderror--}}
{{--                                                    </div>--}}

{{--                                                    <!-- Password input -->--}}
{{--                                                    <div class="form-outline mb-2">--}}
{{--                                                        <label class="form-label" for="password">Password</label>--}}
{{--                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                                        @error('password')--}}
{{--                                                        <span class="invalid-feedback" role="alert">--}}
{{--                                                        <strong>{{ $message }}</strong>--}}
{{--                                                    </span>--}}
{{--                                                        @enderror--}}
{{--                                                    </div>--}}

{{--                                                    <!-- Passport front input -->--}}
{{--                                                    <div class="mb-3">--}}
{{--                                                        <label for="fileF" class="form-label">Passport Front</label>--}}
{{--                                                        <input id="passport_front" type="file" class="form-control @error('passport_front') is-invalid @enderror" name="passport_front" value="{{ old('passport_front') }}">--}}

{{--                                                        @error('passport_front')--}}
{{--                                                        <span class="invalid-feedback" role="alert">--}}
{{--                                                        <strong>{{ $message }}</strong>--}}
{{--                                                    </span>--}}
{{--                                                        @enderror--}}
{{--                                                    </div>--}}

{{--                                                    <!-- Passport back input -->--}}
{{--                                                    <div class="mb-3">--}}
{{--                                                        <label for="fileB" class="form-label">Passport Back</label>--}}
{{--                                                        <input id="passport_back" type="file" class="form-control @error('passport_back') is-invalid @enderror" name="passport_back" value="{{ old('passport_back') }}">--}}

{{--                                                        @error('passport_back')--}}
{{--                                                        <span class="invalid-feedback" role="alert">--}}
{{--                                                        <strong>{{ $message }}</strong>--}}
{{--                                                    </span>--}}
{{--                                                        @enderror--}}
{{--                                                    </div>--}}

{{--                                                    <div class="modal-footer">--}}
{{--                                                        <button type="button" class="btn btn-secondary"--}}
{{--                                                                data-bs-dismiss="modal">Close</button>--}}
{{--                                                        <!-- Submit button -->--}}
{{--                                                        <button type="submit" class="btn btn-success btn-block">Register</button>--}}
{{--                                                    </div>--}}

{{--                                                </form>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                    @endif--}}
{{--                </div>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
{{--<div>--}}

{{--</div>--}}
{{--    <div id="app">--}}
{{--        <main class="py-4">--}}
{{--            @yield('content')--}}
{{--        </main>--}}
{{--    </div>--}}
{{--<div class="container">--}}
{{--    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">--}}
{{--        <div class="col-md-4 d-flex justify-content-start align-items-center">--}}
{{--            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">--}}
{{--                <img class="bi" width="30" height="24" src="./img/logo.jpg" alt="">--}}
{{--                <use xlink:href="#"></use>--}}
{{--            </a>--}}
{{--            <span class="mb-3 mb-md-0 text-muted">© 2023 Aruu</span>--}}
{{--        </div>--}}

{{--        <ul class="nav col-md-4 p-3 justify-content-end align-items-center list-unstyled d-flex">--}}
{{--            <li class="ms-3 p-2"><a class="text-muted" href="#">--}}
{{--                        <span class="mb-3 mb-md-0 text-muted">--}}
{{--                            Кыргызстан, г. Бишкек ул. Ахунбаева 12/3--}}
{{--                        </span>--}}
{{--                    <use xlink:href="#whatsapp"></use>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="ms-3 p-2"><a class="text-muted" href="#"><img width="24" height="24" src="./img/location.svg"--}}
{{--                                                                     alt="">--}}
{{--                    <use xlink:href="#whatsapp"></use>--}}
{{--                </a></li>--}}
{{--            <li class="ms-3 p-2"><a class="text-muted" href="#"><img width="24" height="24" src="./img/whatsapp.svg"--}}
{{--                                                                     alt="">--}}
{{--                    <use xlink:href="#whatsapp"></use>--}}
{{--                </a></li>--}}
{{--            <li class="ms-3 p-2"><a class="text-muted" href="#"><img width="24" height="24"--}}
{{--                                                                     src="./img/instagram.svg" alt="">--}}
{{--                    <use xlink:href="#instagram"></use>--}}
{{--                </a></li>--}}
{{--            <li class="ms-3 p-2"><a class="text-muted" href="#"><img width="24" height="24" src="./img/facebook.svg"--}}
{{--                                                                     alt="">--}}
{{--                    <use xlink:href="#facebook"></use>--}}
{{--                </a></li>--}}
{{--        </ul>--}}
{{--    </footer>--}}
{{--</div>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>--}}
{{--<script>--}}
{{--    window.onscroll = function() {myFunction()};--}}

{{--    let navbar = document.getElementById("navbar");--}}
{{--    let sticky = navbar.offsetTop;--}}

{{--    function myFunction() {--}}
{{--        if (window.pageYOffset >= sticky) {--}}
{{--            navbar.classList.add("sticky")--}}
{{--        } else {--}}
{{--            navbar.classList.remove("sticky");--}}
{{--        }--}}
{{--    }--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}
