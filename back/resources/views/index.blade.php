@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('style/user_index_style.css')}}">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="./img/logo.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-center" />
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
                            <a class="navbar-brand" href="#">
                                <!-- Button trigger modal -->
                                <button type="button btn btn-success" class="btn btn-light border border-success"
                                        data-bs-toggle="modal" data-bs-target="#modalEnroll">
                                    Enroll
                                </button>
                                <!-- Modal Enroll -->
                                <div class="modal fade"  id="modalEnroll" tabindex="-1" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog" >
                                        <div class="modal-content" style="width: 700px; height: 100%">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Enroll a child</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                <form id="form" method="POST" action="{{route('enroll.create')}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-outline mb-2">
                                                        <label for="name" class="form-label">{{ __('Name') }}</label>
                                                        <div class="col-md-6">
                                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus oninvalid="this.setCustomValidity('Please fill in the field')" oninput="this.setCustomValidity('')">
                                                            @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-outline mb-2">
                                                        <label for="surname" class="form-label">{{ __('Surname') }}</label>
                                                        <div class="col-md-6">
                                                            <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autofocus oninvalid="this.setCustomValidity('Please fill in the field')" oninput="this.setCustomValidity('')">
                                                            @error('surname')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-outline mb-2">
                                                        <label for="birth_date" class="form-label">{{ __('Birth Date') }}</label>
                                                        <div class="col-md-6">
                                                            <input id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date') }}" required autofocus oninvalid="this.setCustomValidity('Please fill in the field')" oninput="this.setCustomValidity('')">
                                                            @error('birth_date')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-outline mb-2">
                                                        <label for="photo" class="form-label">{{ __("Child's Photo") }}</label>
                                                        <div class="col-md-6">
                                                            <input id="photo" type="file" accept="image/png, image/gif, image/jpeg" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" required autofocus oninvalid="this.setCustomValidity('Please select a file')" oninput="this.setCustomValidity('')">
                                                            @error('photo')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-outline mb-2">
                                                        <label for="birth_certificate" class="form-label">{{ __("Birth Certificate") }}</label>
                                                        <div class="col-md-6">
                                                            <input id="birth_certificate" type="file"  class="form-control @error('birth_certificate') is-invalid @enderror" name="birth_certificate" value="{{ old('birth_certificate') }}" required autofocus oninvalid="this.setCustomValidity('Please select a file')" oninput="this.setCustomValidity('')">
                                                            @error('birth_certificate')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-outline mb-2">
                                                        <label for="med_certificate" class="form-label">{{ __("Medical Certificate") }}</label>
                                                        <div class="col-md-6">
                                                            <input id="med_certificate" type="file" class="form-control @error('med_certificate') is-invalid @enderror" name="med_certificate" value="{{ old('med_certificate') }}" required autofocus oninvalid="this.setCustomValidity('Please select a file')" oninput="this.setCustomValidity('')">
                                                            @error('med_certificate')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        <!-- Submit button -->
                                                        <button type="submit" class="btn btn-success btn-block">Submit</button>
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
                                    Enroll
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
        @if(session('msg'))
            <div class="d-flex justify-content-center">
                <div class="alert alert-success alert-dismissible fade show text-center" style="width:25%;">{{session('msg')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            </div>
        @endif
    </div>
<h1 class="title">Aruu</h1>

<div class="section">

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://br48.ru/wp-content/uploads/2017/09/mult6.jpg" class="d-block w-70" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://skazka-arkhyz.ru/wp-content/uploads/0/b/9/0b93fdb5c17a594f7ad1d3fbc65af169.jpeg" class="d-block w-70" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://natalia-tkachenko.ru/wp-content/uploads/e/9/5/e95fd39818732141a82b79eb0c55bc25.jpeg" class="d-block w-70" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="section">
    <div class="section__info">
        <div class="section__info_block">
            <img src="./img/info1.png" alt="info_img">
            <h5>Учебными программами</h5>
        </div>
        <div class="section__info_block">
            <img src="./img/info2.png" alt="info_img">
            <h5>Опытными педагогами</h5>
        </div>
        <div class="section__info_block">
            <img src="./img/info3.png" alt="info_img">
            <h5>Всесторонним развитием</h5>
        </div>
        <div class="section__info_block">
            <img src="./img/info4.png" alt="info_img">
            <h5>Качественным образованием</h5>
        </div>
    </div>
</div>

<div class="section">
    <div class="section__feedback">
        <h2>6 “ЗА” в пользу нашего  Детсада</h2>
        <div class="section__feedback_blocks">
            <div class="feedback_block">
                <div class="feedback__block_elements">
                    <div class="block_elem">
                        <img src="./img/blockelem1.png" alt="">
                        <h6>Качественное образование</h6>
                    </div>
                    <div class="block_elem">
                        <img src="./img/blockelem2.png" alt="">
                        <h6>Отличный уход за детьми</h6>
                    </div>
                    <div class="block_elem">
                        <img src="./img/blockelem3.png" alt="">
                        <h6>Сбалансированное питание</h6>
                    </div>
                </div>
            </div>
            <div class="feedback_block">
                <div class="feedback_block_vid">
                    <video
                        width="500" height="300" line-height="300px" controls="controls"
                        src="./video/Erste Christmas Ad 2018- What would Christmas be without love.mp4">
                    </video>
                </div>
            </div>
            <div class="feedback_block">
                <div class="feedback__block_elements">
                    <div class="block_elem">
                        <img src="./img/blockelem4.png" alt="">
                        <h6>Удобное расположение</h6>
                    </div>
                    <div class="block_elem">
                        <img src="./img/blockelem5.png" alt="">
                        <h6>Дружелюбная атмосфера</h6>
                    </div>
                    <div class="block_elem">
                        <img src="./img/blockelem6.png" alt="">
                        <h6>Кружки и секции</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="section__review">
        <img src="./img/dots.png" alt="dots">
        <h3>Отзывы</h3>
        <div class="section__review_blocks">
            <div class="review_block">
                <div class="review__block_person">
                    <h3>Ann White</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias suscipit saepe facere dolorum?</p>
                </div>
            </div>
            <div class="review_block">
                <div class="review__block_person">
                    <h3>Dan Brown</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, voluptates!</p>
                </div>
            </div>
            <div class="review_block">
                <div class="review__block_person">
                    <h3>Alise Black</h3>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
            </div>
            <div class="review_block">
                <div class="review__block_person">
                    <h3>John Gray</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero!</p>
                </div>
            </div>
        </div>
    </div>
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">

    {{--document.getElementById('form').addEventListener("submit", function (event) {--}}
    {{--    event.preventDefault()--}}
    {{--    let url = "{{route('enroll.create')}}";--}}
    {{--    let name = document.getElementById("name").value;--}}
    {{--    let surname = document.getElementById("surname").value;--}}
    {{--    let birth_date = document.getElementById("birth_date").value;--}}
    {{--    let parent_id = document.getElementById("parent_id").value;--}}
    {{--    let photo = document.getElementById("photo").files[0];--}}
    {{--    let birth_certificate = document.getElementById("birth_certificate").files[0];--}}
    {{--    let med_certificate = document.getElementById("med_certificate").files[0];--}}
    {{--    let data = new FormData();--}}
    {{--    data.append("name", name);--}}
    {{--    data.append("surname", surname);--}}
    {{--    data.append("birth_date", birth_date);--}}
    {{--    data.append("parent_id", parent_id);--}}
    {{--    data.append("photo", photo);--}}
    {{--    data.append("birth_certificate", birth_certificate);--}}
    {{--    data.append("med_certificate", med_certificate);--}}
    {{--    fetch(url, {--}}
    {{--        method: 'POST',--}}
    {{--        body: data--}}
    {{--    })--}}
    {{--        .then(res => res.json())--}}

    {{--        .catch(error => console.log(error))--}}
    {{--})--}}
</script>
@endsection
