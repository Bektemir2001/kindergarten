@extends('layouts.admin_layout')
@section('content')

    <div class="content-wrapper">
        <div class="container mb-4 mt-4">
            <form action="{{route('admin.enroll.approve', $enroll->id)}}" method="POST">
                @csrf
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Name:</b>
                            <div class="">{{$enroll->name}}</div>
                        </li>
                        <li class="list-group-item">
                            <b>Surname:</b>
                            <div class="">{{$enroll->surname}}</div>
                        </li>
                        <li class="list-group-item">
                            <b>Birth Date:</b>
                            <div class="">{{$enroll->birth_date}}</div>
                        </li>
                        <li class="list-group-item">
                            <b>Parent:</b>
                            <div class="">{{$enroll->parent->name}} {{$enroll->parent->surname}}</div>
                        </li>
                        <li class="list-group-item">
                            <b>Child's Photo:</b>
                            <div class="">
                                <img class="img-fluid img" src="{{asset($enroll->photo)}}" alt="child's photo" style="width:70%;">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <b>Birth Certificate:</b>
                            <div class="">
                                <img class="img-fluid img" src="{{asset($enroll->birth_certificate)}}" alt="child's birth certificate" style="width:70%;">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <b>Medical Certificate:</b>
                            <div class="">
                                <img class="img-fluid img" src="{{asset($enroll->med_certificate)}}" alt="child's medical certificate" style="width:70%;">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <b>Groups:</b>
                            <select class="form-control col-6" name="groupId">
                            @foreach($groups as $group)
                                <option value="{{$group->id}}">{{$group->name}}</option>
                            @endforeach
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Approve</button>
                <a href="{{route('admin.enroll.index')}}" class="btn btn-secondary">Back</a>
            </div>
            </form>
        </div>
    </div>

@endsection

