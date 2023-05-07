@extends('layouts.employee_layout')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <form action="{{route('employee.group.update', $children->id)}}" method="POST" enctype="multipart/form-data">
                @method('patch')
                @csrf
            <section class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-2 col-12">
                                    <img src="{{asset($children->photo)}}" class="img-fluid" alt="Card image" />
                                    <br><br>
                                    <input type="file" class="form-control" id="photo" name="photo" value="" autofocus="">
                                </div>
                                <div class="col-md-10 col-12">
                                    <hr/>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label> <p class="text-bold-700 text-uppercase mb-0 violet" style="color: #5f1dea">Имя</p></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="name" name="name" value="{{$children->name}}" required="" autofocus="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label> <p class="text-bold-700 text-uppercase mb-0 violet" style="color: #5f1dea">Фамилия</p></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="surname" name="surname" value="{{$children->surname}}" required="" autofocus="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label> <p class="text-bold-700 text-uppercase mb-0 violet" style="color: #5f1dea">День Рождения</p></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{$children->birth_date}}" required="" autofocus="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label> <p class="text-bold-700 text-uppercase mb-0 violet" style="color: #5f1dea">Пол</p></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="radioDiv">
                                                <input type="radio" name="gender" id="option-1" value="Male" {{ $children->gender == 'Male' ? 'checked' : ''}}>
                                                <input type="radio" name="gender" id="option-2" value="Female" {{ $children->gender == 'Female' ? 'checked' : ''}}>
                                                <label for="option-1" class="option option-1">
                                                    <div class="dot"></div>
                                                    <span>Мальчик</span>
                                                </label>
                                                <label for="option-2" class="option option-2">
                                                    <div class="dot"></div>
                                                    <span>Девочка</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label> <p class="text-bold-700 text-uppercase mb-0 violet" style="color: #5f1dea">Имя Родителя</p></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <select class="form-control">
                                                @foreach($parents as $parent)
                                                    <option value="{{$parent->id}}" {{$parent->id === $children->parent_id ? "selected" : ""}}>{{$parent->name}}  {{$parent->surname}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row" hidden="">
                                        <div class="col-md-3">
                                            <label> <p class="text-bold-700 text-uppercase mb-0 violet" style="color: #5f1dea">Название Группы</p></label>
                                        </div>
                                        <div class="col-lg-6" >
                                            <select class="form-control">
                                                    <option value="{{$children->group_id}}">{{$children->group_name}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label> <p class="text-bold-700 text-uppercase mb-0 violet" style="color: #5f1dea">Свидетельство о рождении</p></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="file" class="form-control" id="birth_certificate" name="birth_certificate" value=""  autofocus="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label> <p class="text-bold-700 text-uppercase mb-0 violet" style="color: #5f1dea">Медицинская справка</p></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="file" class="form-control" id="med_certificate" name="med_certificate" value=""  autofocus="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label> <p class="text-bold-700 text-uppercase mb-0 violet" style="color: #5f1dea">Справка об инвалидности</p></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="file" class="form-control" id="med_disability" name="med_disability" value=""  autofocus="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-right">
                                    <a href="{{route('employee.group.index')}}">
                                        <button class="btn btn-gradient-primary my-1">Назад</button>
                                    </a>
                                    <button type="submit" class="btn btn-gradient-secondary my-1">Сохранить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </form>
        </div>
    </div>
@endsection