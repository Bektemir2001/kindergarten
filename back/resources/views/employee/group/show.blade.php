@extends('layouts.employee_layout')
@section('content')
<div class="content-wrapper">
    <div class="container">
        <section class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-2 col-12">
                                <img src="{{asset($children->photo)}}" class="rounded-circle height-100 img-fluid" alt="Card image" />
                            </div>
                            <div class="col-md-10 col-12">
                                <hr/>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label> <p class="text-bold-700 text-uppercase mb-0 violet" style="color: #5f1dea">Имя</p></label>
                                    </div>
                                    <div class="col-md-3">
                                        <p>{{$children->name}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label> <p class="text-bold-700 text-uppercase mb-0 violet" style="color: #5f1dea">Фамилия</p></label>
                                    </div>
                                    <div class="col-md-3">
                                        <p>{{$children->surname}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label> <p class="text-bold-700 text-uppercase mb-0 violet" style="color: #5f1dea">День Рождения</p></label>
                                    </div>
                                    <div class="col-md-3">
                                        <p>{{$children->birth_date}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label> <p class="text-bold-700 text-uppercase mb-0 violet" style="color: #5f1dea">Пол</p></label>
                                    </div>
                                    <div class="col-md-3">
                                        <p>{{$children->gender}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label> <p class="text-bold-700 text-uppercase mb-0 violet" style="color: #5f1dea">Имя Родителя</p></label>
                                    </div>
                                    <div class="col-md-3">
                                        <p>{{$children->parent_name}} {{$children->parent_surname}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label> <p class="text-bold-700 text-uppercase mb-0 violet" style="color: #5f1dea">Название Группы</p></label>
                                    </div>
                                    <div class="col-md-3">
                                        <p>{{$children->group_name}}</p>
                                    </div>
                                </div>
                            </div>
{{--                                    <div class="col-6">--}}
{{--                                        <img class="img-fluid" src="{{asset($user->passport_front)}}">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <img class="img-fluid" src="{{asset($user->passport_back)}}">--}}
{{--                                    </div>--}}
                                    <div class="col-12 text-right">
                                        <button type="submit" class="btn-gradient-primary my-1">Назад</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</div>
@endsection
