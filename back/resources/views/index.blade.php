@extends('layouts.app')

@section('content')
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
                        width="500" controls="controls"
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
