@extends('layouts.admin_layout')
@section('content')

    <div class="content-wrapper">
        <div class="container mb-4 mt-4">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Group name</b>
                            <div class="">{{$group->name}}</div>
                        </li>
                        <li class="list-group-item">
                            <b>Limit</b>
                            <div class="">{{$group->limit}}</div>
                        </li>
                        <li class="list-group-item">
                            <b>Description</b>
                            <div class="">{{$group->description}}</div>
                        </li>
                        <li class="list-group-item">
                            <b>Group image</b>
                            <div class="">
                                <img class="img-fluid img-circle" src="{{asset($group->image)}}" alt="User passport front" style="width:150px; height:150px;">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{route('admin.group.index')}}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </div>

@endsection

