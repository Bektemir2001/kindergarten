@extends('layouts.app')

@section('content')
    <link href="{{asset('style/main_gallery_style.css')}}" rel="stylesheet">
    <div class="photo-gallery">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Lightbox Gallery</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="http://handyfinch.ru/en/img/vis/kids3.jpg" data-lightbox="photos"><img class="img-fluid" src="http://handyfinch.ru/en/img/vis/kids3.jpg"></a></div>
                @foreach($galleries as $gallery)
                    <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{asset($gallery->image)}}" data-lightbox="photos"><img class="img-fluid" src="{{asset($gallery->image)}}"></a></div>
                @endforeach
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
@endsection
