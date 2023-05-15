@extends('layouts.app')

@section('content')
    <div>
        @if(session('message'))
            <div class="d-flex justify-content-center">
                <div class="alert alert-success alert-dismissible fade show text-center" style="width:25%;">{{session('msg')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            </div>
        @endif
    </div>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('new_template/img/IMG_9157.PNG')}}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown mb-4">Лучший детский сад для вашего ребенка</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Мы предлагаем обучение в небольших группах, что позволяет нам найти индивидуальный подход к каждому ученику, сделать акцент на конкретных талантах.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('new_template/img/photo_2023-05-14_22-19-18.jpg')}}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown mb-4">Сделайте светлое будущее для своего ребенка</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Счастье и комфорт Ваших детей – наши приоритеты! Мы сами показываем ученикам пример заботы о других, а также учим их быть отзывчивыми и уважать чувства своих друзей.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facilities Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Наши преимущества</h1>
                <p>Пребывание в частном детском саду гарантирует безопасность ребенка, создает все условия для  продуктивного развития в спокойной и дружественной атмосфере без стрессов и негативного давления.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="facility-item">
                        <div class="facility-icon bg-primary">
                            <span class="bg-primary"></span>
                            <i class="fa fa-bus-alt fa-3x text-primary"></i>
                            <span class="bg-primary"></span>
                        </div>
                        <div class="facility-text bg-primary">
                            <h3 class="text-primary mb-3">Парковка</h3>
                            <p class="mb-0">Удобная парковка для наших родителей.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="facility-item">
                        <div class="facility-icon bg-success">
                            <span class="bg-success"></span>
                            <i class="fa fa-futbol fa-3x text-success"></i>
                            <span class="bg-success"></span>
                        </div>
                        <div class="facility-text bg-success">
                            <h3 class="text-success mb-3">Площадка</h3>
                            <p class="mb-0">Безопасная площадка для наших воспитанников.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="facility-item">
                        <div class="facility-icon bg-warning">
                            <span class="bg-warning"></span>
                            <i class="fa fa-utensils fa-3x text-warning"></i>
                            <span class="bg-warning"></span>
                        </div>
                        <div class="facility-text bg-warning">
                            <h3 class="text-warning mb-3">Здоровое питание</h3>
                            <p class="mb-0">Наше меню – сбалансированное, богатое витаминами и разнообразное</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="facility-item">
                        <div class="facility-icon bg-info">
                            <span class="bg-info"></span>
                            <i class="fa fa-chalkboard-teacher fa-3x text-info"></i>
                            <span class="bg-info"></span>
                        </div>
                        <div class="facility-text bg-info">
                            <h3 class="text-info mb-3">Образование</h3>
                            <p class="mb-0">Большое разнообразие творческих и развивающих занятий для детей любого возраста.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facilities End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-4">Родители на работе, ребенок в безопасности</h1>
                    <p class="mb-4">Здесь малыши учатся читать, писать без ошибок, считать и рисовать. Мы также учим детей работать в команде и поддерживать друг друга. Спортивные игры и другие мероприятия помогают им развиваться физически и социально. Мы создаем безопасную, комфортную и уютную атмосферу для ваших детей, чтобы они могли чувствовать себя как дома.</p>
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="" hidden="">Read More</a>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle flex-shrink-0" src="{{asset('new_template/img/photo_2023-05-14_22-58-44.jpg')}}" alt="" style="width: 45px; height: 45px;">
                                <div class="ms-3">
                                    <h6 class="text-primary mb-1">Калыскан Шамшиева</h6>
                                    <small>CEO & Основатель</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img class="img-fluid w-75 rounded-circle bg-light p-3" src="{{asset('new_template/img/photo_2023-05-14_23-06-25.jpg')}}" alt="">
                        </div>
                        <div class="col-6 text-start" style="margin-top: -150px;">
                            <img class="img-fluid w-100 rounded-circle bg-light p-3" src="{{asset('new_template/img/photo_2023-05-14_22-19-37.jpg')}}" alt="">
                        </div>
                        <div class="col-6 text-end" style="margin-top: -150px;">
                            <img class="img-fluid w-100 rounded-circle bg-light p-3" src="{{asset('new_template/img/about-3.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Call To Action Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="bg-light rounded">
                <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded" src="{{asset('new_template/img/IMG_9155.PNG')}}" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">
                            <h1 class="mb-4">Мы нанимаем</h1>
                            <p class="mb-4">Хотите стать частью нашей дружной команды, нажмите кнопку ниже и оставьте свое резюме.
                            </p>
                            <a class="btn btn-primary py-3 px-5" href="{{route('vacancy')}}">Откликнуться<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action End -->


    <!-- Classes Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Почему Аруу?</h1>
                <p>В общении с детьми мы используем технологию коучинга, опираясь на сильные стороны каждого. Мы моделируем ситуацию успеха, потому что поддержка в обучении важнее критики.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="classes-item">
                        <div class="bg-light rounded-circle w-75 mx-auto p-3">
                            <img class="img-fluid rounded-circle" src="{{asset('new_template/img/classes-1.jpg')}}" alt="">
                        </div>
                        <div class="bg-light rounded p-4 pt-5 mt-n5">
                            <a class="d-block text-center h3 mt-3 mb-4" href="">Искусство и рисование</a>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle flex-shrink-0" src="{{asset('new_template/img/photo_2023-05-14_22-58-44.jpg')}}" alt="" style="width: 45px; height: 45px;">
                                    <div class="ms-3">
                                        <h6 class="text-primary mb-1">Каныкей Каратаева</h6>
                                        <small>Учитель</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-1">
                                <div class="col-4">
                                    <div class="border-top border-3 border-primary pt-2">
                                        <h6 class="text-primary mb-1">Возраст:</h6>
                                        <small>3-5 лет</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="border-top border-3 border-success pt-2">
                                        <h6 class="text-success mb-1">Время:</h6>
                                        <small>9-10 утра</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="border-top border-3 border-warning pt-2">
                                        <h6 class="text-warning mb-1">Место:</h6>
                                        <small>12 детей</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="classes-item">
                        <div class="bg-light rounded-circle w-75 mx-auto p-3">
                            <img class="img-fluid rounded-circle" src="{{asset('new_template/img/photo_2023-05-14_22-19-37.jpg')}}" alt="">
                        </div>
                        <div class="bg-light rounded p-4 pt-5 mt-n5">
                            <a class="d-block text-center h3 mt-3 mb-4" href="">Мелкая моторика</a>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle flex-shrink-0" src="{{asset('new_template/img/photo_2023-05-14_22-58-44.jpg')}}" alt="" style="width: 45px; height: 45px;">
                                    <div class="ms-3">
                                        <h6 class="text-primary mb-1">Калыскан Шамшиева</h6>
                                        <small>Учитель</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-1">
                                <div class="col-4">
                                    <div class="border-top border-3 border-primary pt-2">
                                        <h6 class="text-primary mb-1">Возраст:</h6>
                                        <small>3-7 лет</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="border-top border-3 border-success pt-2">
                                        <h6 class="text-success mb-1">Время:</h6>
                                        <small>10-11 утра</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="border-top border-3 border-warning pt-2">
                                        <h6 class="text-warning mb-1">Место:</h6>
                                        <small>10 детей</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="classes-item">
                        <div class="bg-light rounded-circle w-75 mx-auto p-3">
                            <img class="img-fluid rounded-circle" src="{{asset('new_template/img/photo_2023-05-14_23-22-07.jpg')}}" alt="">
                        </div>
                        <div class="bg-light rounded p-4 pt-5 mt-n5">
                            <a class="d-block text-center h3 mt-3 mb-4" href="">Спорт и танцы</a>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle flex-shrink-0" src="{{asset('new_template/img/photo_2023-05-14_22-58-44.jpg')}}" alt="" style="width: 45px; height: 45px;">
                                    <div class="ms-3">
                                        <h6 class="text-primary mb-1">Сымбат Султангазиева</h6>
                                        <small>Учитель</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-1">
                                <div class="col-4">
                                    <div class="border-top border-3 border-primary pt-2">
                                        <h6 class="text-primary mb-1">Возраст:</h6>
                                        <small>2-7 лет</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="border-top border-3 border-success pt-2">
                                        <h6 class="text-success mb-1">Время:</h6>
                                        <small>12-13 дня</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="border-top border-3 border-warning pt-2">
                                        <h6 class="text-warning mb-1">Место:</h6>
                                        <small>12 детей</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="classes-item">
                        <div class="bg-light rounded-circle w-75 mx-auto p-3">
                            <img class="img-fluid rounded-circle" src="{{asset('new_template/img/photo_2023-05-14_22-19-34.jpg')}}" alt="">
                        </div>
                        <div class="bg-light rounded p-4 pt-5 mt-n5">
                            <a class="d-block text-center h3 mt-3 mb-4" href="">Английский язык</a>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle flex-shrink-0" src="{{asset('new_template/img/photo_2023-05-14_22-58-44.jpg')}}" alt="" style="width: 45px; height: 45px;">
                                    <div class="ms-3">
                                        <h6 class="text-primary mb-1">Бектемир Кумарбай уулу</h6>
                                        <small>Учитель</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-1">
                                <div class="col-4">
                                    <div class="border-top border-3 border-primary pt-2">
                                        <h6 class="text-primary mb-1">Возраст:</h6>
                                        <small>3-5 лет</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="border-top border-3 border-success pt-2">
                                        <h6 class="text-success mb-1">Время:</h6>
                                        <small>9-10 утра</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="border-top border-3 border-warning pt-2">
                                        <h6 class="text-warning mb-1">Место:</h6>
                                        <small>12 детей</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="classes-item">
                        <div class="bg-light rounded-circle w-75 mx-auto p-3">
                            <img class="img-fluid rounded-circle" src="{{asset('new_template/img/photo_2023-05-14_22-19-32.jpg')}}" alt="">
                        </div>
                        <div class="bg-light rounded p-4 pt-5 mt-n5">
                            <a class="d-block text-center h3 mt-3 mb-4" href="">Ментальная арифметика</a>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle flex-shrink-0" src="{{asset('new_template/img/photo_2023-05-14_22-58-44.jpg')}}" alt="" style="width: 45px; height: 45px;">
                                    <div class="ms-3">
                                        <h6 class="text-primary mb-1">Эмирлан Нурлан уулу</h6>
                                        <small>Учитель</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-1">
                                <div class="col-4">
                                    <div class="border-top border-3 border-primary pt-2">
                                        <h6 class="text-primary mb-1">Возраст:</h6>
                                        <small>3-5 лет</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="border-top border-3 border-success pt-2">
                                        <h6 class="text-success mb-1">Время:</h6>
                                        <small>9-10 утра</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="border-top border-3 border-warning pt-2">
                                        <h6 class="text-warning mb-1">Место:</h6>
                                        <small>12 детей</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="classes-item">
                        <div class="bg-light rounded-circle w-75 mx-auto p-3">
                            <img class="img-fluid rounded-circle" src="{{asset('new_template/img/classes-6.jpg')}}" alt="">
                        </div>
                        <div class="bg-light rounded p-4 pt-5 mt-n5">
                            <a class="d-block text-center h3 mt-3 mb-4" href="">Общая образование</a>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle flex-shrink-0" src="{{asset('new_template/img/photo_2023-05-14_22-58-44.jpg')}}" alt="" style="width: 45px; height: 45px;">
                                    <div class="ms-3">
                                        <h6 class="text-primary mb-1">Сымбат Султангазиева</h6>
                                        <small>Учитель</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-1">
                                <div class="col-4">
                                    <div class="border-top border-3 border-primary pt-2">
                                        <h6 class="text-primary mb-1">Возраст:</h6>
                                        <small>3-5 лет</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="border-top border-3 border-success pt-2">
                                        <h6 class="text-success mb-1">Время:</h6>
                                        <small>9-10 утра</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="border-top border-3 border-warning pt-2">
                                        <h6 class="text-warning mb-1">Место:</h6>
                                        <small>12 детей</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Classes End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Наша дружная команда</h1>
                <p>Весь персонал детского сада Аруу проходит психологические тренинги. Мы знаем, как взаимодействовать с детьми разного возраста в любой ситуации.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <img class="img-fluid rounded-circle w-75" src="{{asset('new_template/img/team-1.jpg')}}" alt="">
                        <div class="team-text">
                            <h6>Каныкей Каратаева</h6>
                            <p>Техничка</p>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <img class="img-fluid rounded-circle w-75" src="{{asset('new_template/img/team-2.jpg')}}" alt="">
                        <div class="team-text">
                            <h6>Бектемир Кумарбай уулу</h6>
                            <p>Охранник</p>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <img class="img-fluid rounded-circle w-75" src="{{asset('new_template/img/team-3.jpg')}}" alt="">
                        <div class="team-text">
                            <h6>Сымбат Султангазиева</h6>
                            <p>Повар</p>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


{{--    <!-- Testimonial Start -->--}}
{{--    <div class="container-xxl py-5">--}}
{{--        <div class="container">--}}
{{--            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">--}}
{{--                <h1 class="mb-3">Our Clients Say!</h1>--}}
{{--                <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>--}}
{{--            </div>--}}
{{--            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                <div class="testimonial-item bg-light rounded p-5">--}}
{{--                    <p class="fs-5">Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>--}}
{{--                    <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">--}}
{{--                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('new_template/img/testimonial-1.jpg')}}" style="width: 90px; height: 90px;">--}}
{{--                        <div class="ps-3">--}}
{{--                            <h3 class="mb-1">Client Name</h3>--}}
{{--                            <span>Profession</span>--}}
{{--                        </div>--}}
{{--                        <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="testimonial-item bg-light rounded p-5">--}}
{{--                    <p class="fs-5">Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>--}}
{{--                    <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">--}}
{{--                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('new_template/img/testimonial-2.jpg')}}" style="width: 90px; height: 90px;">--}}
{{--                        <div class="ps-3">--}}
{{--                            <h3 class="mb-1">Client Name</h3>--}}
{{--                            <span>Profession</span>--}}
{{--                        </div>--}}
{{--                        <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="testimonial-item bg-light rounded p-5">--}}
{{--                    <p class="fs-5">Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>--}}
{{--                    <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">--}}
{{--                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('new_template/img/testimonial-3.jpg')}}" style="width: 90px; height: 90px;">--}}
{{--                        <div class="ps-3">--}}
{{--                            <h3 class="mb-1">Client Name</h3>--}}
{{--                            <span>Profession</span>--}}
{{--                        </div>--}}
{{--                        <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Testimonial End -->--}}
@endsection
