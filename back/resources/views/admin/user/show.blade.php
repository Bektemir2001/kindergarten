@extends('layouts.admin_layout')
@section('content')

    <div class="content-wrapper">
        <div class="container mb-4 mt-4">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
{{--                    <div class="text-center">--}}
{{--                        <img class="img-fluid img-circle" src="{{asset($student->user->image)}}" alt="User profile picture" style="width:150px; height:150px;">--}}
{{--                    </div>--}}

                    <h3 class="profile-username text-center">{{$user->name}} {{$user->surname}}</h3>

{{--                    <p class="text-muted text-center">{{$student->type->name}}</p>--}}

                    <ul class="list-group list-group-unbordered mb-3">
{{--                        <li class="list-group-item">--}}
{{--                            <div><b>Курс</b></div>--}}
{{--                            <div style="float:left; display: block; width: 10%;" id="studentLevel">{{$student->level}}</div>--}}
{{--                            <div style="float:left; display: block; width:50%;">--}}
{{--                                @if($student->level < 4)--}}
{{--                                    <button class="btn btn-primary btn-sm" onclick="upLevel()">поднять</button>--}}
{{--                                @endif--}}
{{--                                @if($student->level > 1)--}}
{{--                                    <button class="btn btn-danger btn-sm" onclick="downLevel()">понизить</button>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </li>--}}
                        <li class="list-group-item">
                            <b>Адрес</b>
                            <div class="">{{$user->address}}</div>
                        </li>
{{--                        <li class="list-group-item">--}}
{{--                            <b>Возраст</b>--}}
{{--                            <div class="">{{$student->user->age}}</div>--}}
{{--                        </li>--}}
                        <li class="list-group-item">
                            <b>Email</b>
                            <div class="">{{$user->email}}</div>
                        </li>
{{--                        <li class="list-group-item">--}}
{{--                            <b>Текст</b>--}}
{{--                            <div class="">{{$student->content}}</div>--}}
{{--                        </li>--}}
                    </ul>


                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->


            <!-- /.card -->
        </div>
    </div>

@endsection

