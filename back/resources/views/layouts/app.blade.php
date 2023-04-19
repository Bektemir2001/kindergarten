<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kindergarten Aruu') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style/user_index_style.css')}}">
    <!-- Scripts -->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="" alt="Logo" width="30" height="24" class="d-inline-block align-text-center" />
            Aruu
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Мои Дети
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">ребёнок 1</a></li>

                        <li><a class="dropdown-item" href="#">ребёнок 2</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">O нас</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Родителям
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">1. Часто задаваемые вопросы</a></li>

                        <li><a class="dropdown-item" href="#">2. Читаем детям</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Услуги</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Галерея
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">1. Фото</a></li>

                        <li><a class="dropdown-item" href="#">2. Видео</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Контакты</a>
                </li>
                <div class="ch">
                    @if(auth()->user())
                        <li class="nav-item">
                            <a class="navbar-brand" href="{{route('enroll.index')}}">
                                <!-- Button trigger modal -->
                                <button type="button btn btn-success" class="btn btn-light border border-success">
                                    Записаться
                                </button>
                                <!-- Modal Enroll -->
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
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="#">
                                <!-- Button trigger modal -->
                                <button onclick="location.href='{{route('user.logout')}}'" type="button" class="btn btn-light border border-primary">
                                    Sign out
                                </button>
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="navbar-brand" href="#">
                                <!-- Button trigger modal -->
                                <button type="button btn btn-success" class="btn btn-light border border-success"
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
                                                        <button type="button btn-primary" class="btn btn-light border border-primary"
                                                                data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#modalSignIn">
                                                            Sign In
                                                        </button>
                                                        <button type="button btn btn-success" class="btn btn-light border border-success"
                                                                data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#modalSignUp">
                                                            Sign Up
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="#">
                                <!-- Button trigger modal -->
                                <button type="button btn-primary" class="btn btn-light border border-primary"
                                        data-bs-toggle="modal" data-bs-target="#modalSignIn">
                                    Sign In
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
                                                    <div class="form-outline mb-3">
                                                        <label class="form-label" for="email">Email address</label>
                                                        <input type="email" id="email" name="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" required autocomplete="email">
                                                        @if(session('errorWithEmail'))
                                                            <p class="text-danger">{{session('errorWithEmail')}}</p>
                                                            <script>
                                                                document.getElementById('email').value = "{{session('email')}}";
                                                            </script>
                                                        @endif
                                                    </div>

                                                    <!-- Password input -->
                                                    <div class="form-outline">
                                                        <label class="form-label" for="password">Password</label>
                                                        <input type="password" id="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
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
                                                        <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        <!-- <button type="button" class="btn btn-primary">Sign in</button> -->
                                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
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
                        </li>

                    @endif
                </div>
            </ul>
        </div>
    </div>
</nav>
<div>

</div>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex justify-content-start align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <img class="bi" width="30" height="24" src="./img/logo.jpg" alt="">
                <use xlink:href="#"></use>
            </a>
            <span class="mb-3 mb-md-0 text-muted">© 2023 Aruu</span>
        </div>

        <ul class="nav col-md-4 p-3 justify-content-end align-items-center list-unstyled d-flex">
            <li class="ms-3 p-2"><a class="text-muted" href="#">
                        <span class="mb-3 mb-md-0 text-muted">
                            Кыргызстан, г. Бишкек ул. Ахунбаева 12/3
                        </span>
                    <use xlink:href="#whatsapp"></use>
                </a>
            </li>
            <li class="ms-3 p-2"><a class="text-muted" href="#"><img width="24" height="24" src="./img/location.svg"
                                                                     alt="">
                    <use xlink:href="#whatsapp"></use>
                </a></li>
            <li class="ms-3 p-2"><a class="text-muted" href="#"><img width="24" height="24" src="./img/whatsapp.svg"
                                                                     alt="">
                    <use xlink:href="#whatsapp"></use>
                </a></li>
            <li class="ms-3 p-2"><a class="text-muted" href="#"><img width="24" height="24"
                                                                     src="./img/instagram.svg" alt="">
                    <use xlink:href="#instagram"></use>
                </a></li>
            <li class="ms-3 p-2"><a class="text-muted" href="#"><img width="24" height="24" src="./img/facebook.svg"
                                                                     alt="">
                    <use xlink:href="#facebook"></use>
                </a></li>
        </ul>
    </footer>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
    window.onscroll = function() {myFunction()};

    let navbar = document.getElementById("navbar");
    let sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>
</body>
</html>
