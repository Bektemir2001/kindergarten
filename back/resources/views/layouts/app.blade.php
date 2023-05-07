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
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />--}}
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
                @if(auth()->user())
                    @if(auth()->user()->role === 'ROLE_PARENT')
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Мои дети</a>
                            <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                                @foreach($children as $child)
                                    <a href="" class="dropdown-item">{{$child->name}}</a>
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endif

                <div class="nav-item">
                    <a href="" class="nav-link">О нас</a>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Родителям</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                        <a href="" class="dropdown-item">Часто задаваемые вопросы</a>
                        <a href="" class="dropdown-item">Читаем детям</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a href="" class="nav-link">Услуги</a>
                </div>
                <div class="nav-item dropdown">
                    <a href="{{route('gallery')}}" class="nav-link">Галерея</a>
                </div>
                <div class="nav-item">
                    <a href="" class="nav-link">Контакты</a>
                </div>
            </div>
            @if(auth()->user())
                <div class="navbar-nav mx-auto">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary rounded-pill px-3 d-lg-block"
                            data-bs-toggle="modal" data-bs-target="#modalEnroll">
                        Записаться
                    </button>
                </div>
                <div class="navbar-nav mx-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="https://w7.pngwing.com/pngs/364/361/png-transparent-account-avatar-profile-user-avatars-icon.png" alt="Avatar" style="vertical-align: middle; width: 50px; height: 50px; border-radius: 50%;">
                        </a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0" style="right: 0;left: auto;!important;">
                            <a href="" class="dropdown-item" >Мой профиль</a>
                            <a class="dropdown-item" onclick="location.href='{{route('user.logout')}}'" type="button">Выйти</a>
                        </div>
                    </div>
                </div>
            @else
                <div class="navbar-nav mx-auto">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary rounded-pill px-3 d-lg-block"
                            data-bs-toggle="modal" data-bs-target="#modalMessage">
                        Записаться
                    </button>
                </div>
                <div class="navbar-nav mx-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="https://w7.pngwing.com/pngs/364/361/png-transparent-account-avatar-profile-user-avatars-icon.png" alt="Avatar" style="vertical-align: middle; width: 50px; height: 50px; border-radius: 50%;">
                        </a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0" style="right: 0;left: auto;!important;">
                            <a href="" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalSignIn">Войти</a>
                            <a href="" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalSignUp">Зарегистрироваться</a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </nav>
    <!-- Navbar End -->
        <div id="app">
            <main class="py-4">
                <!-- Modal Message -->
                <div class="modal fade" id="modalMessage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="z-index: 9999">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <!-- Email input -->
                                    <div class="form-outline mb-3">
                                        <label class="form-label" for="email">Без регистрации вы не сможете записать ребенка. Если у вас есть учетная запись, войдите, если нет, зарегистрируйтесь.</label>
                                    </div>
                                    <!-- Submit button -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary btn-block"
                                                data-bs-toggle="modal" data-bs-target="#modalSignIn">
                                            Войти
                                        </button>
                                        <button type="button" class="btn btn-primary btn-block"
                                                data-bs-toggle="modal" data-bs-target="#modalSignUp">
                                            Зарегистрироваться
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal SignIN -->
                <div class="modal fade" id="modalSignIn" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Войти</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('user.auth') }}" >
                                    @csrf
                                    <!-- Email input -->
                                    <div class="field">
                                        <i class="icon fas fa-user"></i>
                                        <input type="email" id="email" name="email" placeholder="Почта(Email)" class="login__input @error('email') is-invalid @enderror" required autocomplete="email">
                                        @if(session('errorWithEmail'))
                                            <p class="text-danger">{{session('errorWithEmail')}}</p>
                                            <script>
                                                document.getElementById('email').value = "{{session('email')}}";
                                            </script>
                                        @endif
                                    </div>
                                    <div class="field">
                                        <i class="icon fas fa-lock"></i>
                                        <input type="password" id="password" name="password" placeholder="Пароль" class="login__input @error('password') is-invalid @enderror" required autocomplete="new-password">
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
                                        <a href="{{route('reset.password.form')}}">Забыли пароль?</a>
                                    </div>
                                    <!-- Submit button -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary "
                                                data-bs-dismiss="modal">Закрыть</button>
                                        <!-- <button type="button" class="btn btn-primary">Sign in</button> -->
                                        <button type="submit" class="btn btn-primary btn-block">Войти</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal SignUP -->
                <div class="modal fade" id="modalSignUp" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Зарегистрироваться</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('user.register') }}" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Name input -->
                                    <div class="field">
                                        <i class="icon fas fa-user"></i>
                                        <input type="text" id="name" name="name" placeholder="Имя" class="login__input @error('name') is-invalid @enderror" required autocomplete="name">
                                        @if(session('errorWithName'))
                                            <p class="text-danger">{{session('errorWithName')}}</p>
                                            <script>
                                                document.getElementById('name').value = "{{session('name')}}";
                                            </script>
                                        @endif
                                    </div>
                                    <!-- Surname input -->
                                    <div class="field">
                                        <i class="icon fas fa-user"></i>
                                        <input type="text" id="surname" name="surname" placeholder="Фамилия" class="login__input @error('surname') is-invalid @enderror" required autocomplete="surname">
                                        @if(session('errorWithSurname'))
                                            <p class="text-danger">{{session('errorWithSurname')}}</p>
                                            <script>
                                                document.getElementById('surname').value = "{{session('surname')}}";
                                            </script>
                                        @endif
                                    </div>

                                    <!-- Home Address input -->
                                    <div class="field">
                                        <i class="icon fas fa-map-marker-alt"></i>
                                        <input type="text" id="address" name="address" placeholder="Домашний адрес" class="login__input @error('address') is-invalid @enderror" required autocomplete="address">
                                        @if(session('errorWithAddress'))
                                            <p class="text-danger">{{session('errorWithAddress')}}</p>
                                            <script>
                                                document.getElementById('address').value = "{{session('address')}}";
                                            </script>
                                        @endif
                                    </div>

                                    <!-- Phone Number input -->
                                    <div class="field">
                                        <i class="icon fas fa-phone-alt"></i>
                                        <input type="text" id="phone_number" name="phone_number" placeholder="Телефонный номер" class="login__input @error('phone_number') is-invalid @enderror" required autocomplete="phone_number">
                                        @if(session('errorWithPhoneNumber'))
                                            <p class="text-danger">{{session('errorWithPhoneNumber')}}</p>
                                            <script>
                                                document.getElementById('phone_number').value = "{{session('phone_number')}}";
                                            </script>
                                        @endif
                                    </div>
                                    <!-- Email input -->
                                    <div class="field">
                                        <i class="icon fas fa-at"></i>
                                        <input type="email" id="email" name="email" placeholder="Email Address" class="login__input @error('email') is-invalid @enderror" required autocomplete="email">
                                        @if(session('errorWithEmail'))
                                            <p class="text-danger">{{session('errorWithEmail')}}</p>
                                            <script>
                                                document.getElementById('email').value = "{{session('email')}}";
                                            </script>
                                        @endif
                                    </div>

                                    <!-- Password input -->
                                    <div class="field">
                                        <i class="icon fas fa-lock"></i>
                                        <input type="password" id="password" name="password" placeholder="Пароль" class="login__input @error('password') is-invalid @enderror" required autocomplete="new-password">
                                        @if(session('errorWithPassword'))
                                            <p class="text-danger">{{session('errorWithPassword')}}</p>
                                            <script>
                                                document.getElementById('email').value = "{{session('email')}}";
                                            </script>
                                        @endif
                                    </div>

                                    <!-- Passport front input -->
                                    <div class="field">
                                        <label for="fileF" class="form-label">Лицевая сторона паспорта</label>
                                        <input id="passport_front" type="file" class="form-control @error('passport_front') is-invalid @enderror" name="passport_front" value="{{ old('passport_front') }}">

                                        @error('passport_front')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>

                                    <!-- Passport back input -->
                                    <div class="mb-3">
                                        <label for="fileB" class="form-label">Обратная сторона паспорта</label>
                                        <input id="passport_back" type="file" class="form-control @error('passport_back') is-invalid @enderror" name="passport_back" value="{{ old('passport_back') }}">

                                        @error('passport_back')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Закрыть</button>
                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-success btn-block">Далее</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Enroll -->
                <div class="modal fade"  id="modalEnroll" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" >
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Записать ребенка</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <form id="form" method="POST" action="{{route('enroll.create')}}" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Name input -->
                                    <div class="field">
                                        <i class="icon fas fa-user"></i>
                                        <input type="text" id="name" name="name" placeholder="Имя ребенка" class="login__input @error('name') is-invalid @enderror" required autocomplete="name">
                                        @if(session('errorWithName'))
                                            <p class="text-danger">{{session('errorWithName')}}</p>
                                            <script>
                                                document.getElementById('name').value = "{{session('name')}}";
                                            </script>
                                        @endif
                                    </div>
                                    <!-- Surname input -->
                                    <div class="field" >
                                        <i class="icon fas fa-user"></i>
                                        <input type="text" id="surname" name="surname" placeholder="Фамилия ребенка" class="login__input @error('surname') is-invalid @enderror" required autocomplete="surname">
                                        @if(session('errorWithSurname'))
                                            <p class="text-danger">{{session('errorWithSurname')}}</p>
                                            <script>
                                                document.getElementById('surname').value = "{{session('surname')}}";
                                            </script>
                                        @endif
                                    </div>
                                    <!-- Birth date input -->
                                    <div class="form-outline mb-2" style="padding: 10px">
                                        <label for="birth_date" class="form-label" style="font-weight: 700;">{{ __('Дата рождения') }}</label>
                                        <div class="col-md-6 ">
                                            <input id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date') }}" required autofocus oninvalid="this.setCustomValidity('Please fill in the field')" oninput="this.setCustomValidity('')">
                                            @error('birth_date')
                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Gender input -->
                                    <div class="form-outline mb-2" style="padding: 10px">
                                        <label for="gender" class="form-label" style="font-weight: 700;">{{ __('Пол ребенка') }}</label>
                                        <div class="col-md-6">
                                            <div class="radioDiv">
                                                <input type="radio" name="gender" id="option-1" value="Male">
                                                <input type="radio" name="gender" id="option-2" value="Female">
                                                <label for="option-1" class="option option-1">
                                                    <div class="dot"></div>
                                                    <span>Мальчик</span>
                                                </label>
                                                <label for="option-2" class="option option-2">
                                                    <div class="dot"></div>
                                                    <span>Девочка</span>
                                                </label>
                                                @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Photo input -->
                                    <div class="form-outline mb-2" style="padding: 10px">
                                        <label for="photo" class="form-label" style="font-weight: 700;">{{ __("Фото ребенка") }}</label>
                                        <div class="col-md-6">
                                            <input id="photo" type="file" accept="image/png, image/gif, image/jpeg" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" required autofocus oninvalid="this.setCustomValidity('Please select a file')" oninput="this.setCustomValidity('')">
                                            @error('photo')
                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Birth certificate input -->
                                    <div class="form-outline mb-2" style="padding: 10px">
                                        <label for="birth_certificate" class="form-label" style="font-weight: 700;">{{ __("Свидетельство о рождении") }}</label>
                                        <div class="col-md-6">
                                            <input id="birth_certificate" type="file"  class="form-control @error('birth_certificate') is-invalid @enderror" name="birth_certificate" value="{{ old('birth_certificate') }}" required autofocus oninvalid="this.setCustomValidity('Please select a file')" oninput="this.setCustomValidity('')">
                                            @error('birth_certificate')
                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Med certificate input -->
                                    <div class="form-outline mb-2" style="padding: 10px">
                                        <label for="med_certificate" class="form-label" style="font-weight: 700;">{{ __("Справка о состоянии здоровья") }}</label>
                                        <div class="col-md-6">
                                            <input id="med_certificate" type="file" class="form-control @error('med_certificate') is-invalid @enderror" name="med_certificate" value="{{ old('med_certificate') }}" required autofocus oninvalid="this.setCustomValidity('Please select a file')" oninput="this.setCustomValidity('')">
                                            @error('med_certificate')
                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Med disability input -->
                                    <div class="form-outline mb-2" style="padding: 10px">
                                        <label for="med_disability" class="form-label" style="font-weight: 700;">{{ __("Медицинская справка об инвалидности") }}</label>
                                        <div class="col-md-6">
                                            <input id="med_disability" type="file" class="form-control @error('med_disability') is-invalid @enderror" name="med_disability" value="{{ old('med_disability') }}">
                                            @error('med_disability')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Закрыть</button>
                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-success btn-block">Записать</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>--}}
<script src="{{asset('new_template/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('new_template/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('new_template/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('new_template/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('new_template/js/main.js')}}"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
</body>
</html>
