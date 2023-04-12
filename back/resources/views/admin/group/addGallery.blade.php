@extends('layouts.admin_layout')
@section('content')
    <link rel="stylesheet" href="{{asset('style/group_gallery_style.css')}}">
    <div class="content-wrapper">
        <div class="card-header text-center" ><h3>Gallery of the group "{{$group->name}}"</h3></div>
        <div class="container">
            <form action="{{route('admin.gallery.create', $group->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="files" class="col-md-4 col-form-label text-md-end">Add image to gallery:</label>
                    <div class="col-md-6">
                        <input id="image" type="file" class="form-control" accept="image/*" name="images[]"multiple>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile" class="col-md-4 col-form-label text-md-end">Add video to gallery:</label>
                    <div class="col-md-6">
                        <input id="video" type="file" class="form-control" accept="video/*" name="videos[]" multiple>

                    </div>
                </div>

                <div class="modal-footer">
                    <a href="{{route('admin.group.index')}}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>

            <div class="row">
                @php
                    $i = 1;
                @endphp
                @foreach($galleries as $gallery)
                    <div class="column">
                    @if($gallery->image==null)
                            <video width="320" height="240" controls onclick="openModal();currentSlide({{$i}})" class="hover-shadow cursor">
                                <source src="{{asset($gallery->video)}}" type="video/mp4">.
                            </video>
                    @else
                            <img src="{{asset($gallery->image)}}" style="width:100%" onclick="openModal();currentSlide({{$i}})" class="hover-shadow cursor">
                    @endif
                    @php
                        $i = $i + 1;
                    @endphp
                    </div>
                @endforeach
            </div>


            <div id="myModal" class="modal">
                <span class="close cursor" onclick="closeModal()">&times;</span>
                <div class="modal-content">

                    @php
                        $i = 1;
                    @endphp
                    @foreach($galleries as $gallery)
                        <div class="mySlides">
                            <div class="numbertext">{{$i}} / {{$group->gallery->count()}}</div>
                            @if($gallery->image==null)
                                <video style="width:100%" controls >
                                    <source src="{{asset($gallery->video)}}" type="video/mp4">.
                                </video>
                            @else
                                <img src="{{asset($gallery->image)}}" style="width:100%" >
                            @endif
                            @php
                                $i = $i + 1;
                            @endphp
                        </div>
                    @endforeach

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    <div class="caption-container">
                        <p id="caption"></p>
                    </div>


                    <div class="row">
                        @php
                            $i = 1;
                        @endphp
                        @foreach($galleries as $gallery)
                            <div class="column">
                                @if($gallery->image==null)
                                    <video class="demo cursor" style="width:100%" onclick="currentSlide({{$i}})" alt="{{$gallery->created_at}}" controls >
                                        <source src="{{asset($gallery->video)}}" type="video/mp4">.
                                    </video>
                                @else
                                    <img class="demo cursor" src="{{asset($gallery->image)}}" style="width:100%" onclick="currentSlide({{$i}})" alt="{{$gallery->created_at}}" >
                                @endif
                            @php
                                $i = $i + 1;
                            @endphp
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <script>
                function openModal() {
                    document.getElementById("myModal").style.display = "block";
                }

                function closeModal() {
                    document.getElementById("myModal").style.display = "none";
                }

                let slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                    showSlides(slideIndex = n);
                }

                function showSlides(n) {
                    let i;
                    let slides = document.getElementsByClassName("mySlides");
                    let dots = document.getElementsByClassName("demo");
                    let captionText = document.getElementById("caption");
                    if (n > slides.length) {slideIndex = 1}
                    if (n < 1) {slideIndex = slides.length}
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";
                    dots[slideIndex-1].className += " active";
                    captionText.innerHTML = dots[slideIndex-1].alt;
                }

            </script>

            {{--        <script>--}}
{{--            document.getElementById('form').addEventListener("submit", function (event) {--}}
{{--                event.preventDefault()--}}
{{--                let data = new FormData();--}}
{{--                let url = "{{route('admin.gallery.create')}}";--}}
{{--                let groupId = document.getElementById("groupId").value;--}}
{{--                let nameGroup = document.getElementById("nameGroup").value;--}}
{{--                let images = [];--}}
{{--                let videos = [];--}}
{{--                let image_array = document.getElementById("image").files;--}}
{{--                let video_array = document.getElementById("video").files;--}}

{{--                data.append("groupId", groupId);--}}
{{--                data.append("nameGroup", nameGroup);--}}
{{--                console.log(data);--}}
{{--                for(image of image_array){--}}
{{--                    images.push(image);--}}
{{--                }--}}
{{--                images.forEach((image, i) => {--}}
{{--                    data.append('image'+i, image);--}}
{{--                })--}}
{{--                for(video of video_array){--}}
{{--                    videos.push(image);--}}
{{--                }--}}
{{--                images.forEach((video, i) => {--}}
{{--                    data.append('video'+i, video);--}}
{{--                })--}}

{{--                fetch(url, {--}}
{{--                    method: 'POST',--}}
{{--                    body: data--}}
{{--                })--}}
{{--                    .then(res => res.json())--}}
{{--                    .then(data => console.log(data))--}}
{{--                    .catch(error => console.log(error))--}}
{{--            })--}}
{{--        </script>--}}
    </div>
@endsection