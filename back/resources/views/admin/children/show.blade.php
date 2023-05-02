@extends('layouts.admin_layout')
@section('content')

    <div class="content-wrapper">
        <div class="container mb-4 mt-4">

            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Name:</b>
                            <div class="">{{$child->name}}</div>
                        </li>
                        <li class="list-group-item">
                            <b>Surname:</b>
                            <div class="">{{$child->surname}}</div>
                        </li>
                        <li class="list-group-item">
                            <b>Birth Date:</b>
                            <div class="">{{$child->birth_date}}</div>
                        </li>
                        <li class="list-group-item">
                            <b>Parent ID:</b>
                            <div class="">{{$child->parent->name}} {{$child->parent->surname}}</div>
                        </li>
                        <li class="list-group-item">
                            <b>Group ID:</b>
                            <div class="">{{$child->group->name}}</div>
                        </li>
                        <li class="list-group-item">
                            <b>Child's Photo:</b>
                            <div class="">
                                <img class="img-fluid img" src="{{asset($child->photo)}}" alt="child's photo" style="width:70%;">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <b>Birth Certificate:</b>
                            <div class="">
                                <img class="img-fluid img" src="{{asset($child->birth_certificate)}}" alt="child's birth certificate" style="width:70%;">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <b>Medical Certificate:</b>
                            <div class="">
                                <img class="img-fluid img" src="{{asset($child->med_certificate)}}" alt="child's medical certificate" style="width:70%;">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <b>Payment:</b>
                            <div class="">{{$child->payment}}</div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{route('admin.children.index')}}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>

@endsection

