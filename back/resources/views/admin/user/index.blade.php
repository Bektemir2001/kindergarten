@extends('layouts.admin_layout')
@section('content')
    <div class="content-wrapper">
        <div class="demo-html" style="width: 70%;display: block; margin-left: auto; margin-right: auto;">
            <div class="card-header text-center" >
                <h3>Users Table</h3>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <div id="example_wrapper" class="">
                <table id="example" class="table table-bordered border-primary" aria-describedby="example_info">
                        <thead>
                        <tr>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 10%;">
                                id
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 20%;">
                                Name
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 20%;">
                                Surname
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 20%;">
                                Role
                            </th>
                            <th class="sorting text-center" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 25%;">
                                Action
                            </th>
                            {{-- <th width="2px"></th> --}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr class="odd">
                                <td class="sorting_1">{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->surname}}</td>
                                <td>{{$user->role}}</td>
                                <td>
                                    <div style="float: left;
                                display: block;
                                width: 30%;" class="text-center">
                                        <a href="{{route('admin.user.show', $user)}}"><i class="fas fa-eye"></i></a>
                                    </div>
                                    <div style="float: left;
                                display: block;
                                width: 30%;" class="text-center">
                                        <a href="{{route('admin.user.edit', $user)}}" class="text-success"><i class="fas fa-pen"></i></a>
                                    </div>
                                    <div style="float: left;
                                display: block;
                                width: 30%;" class="text-center">
                                        <form action="{{route('admin.user.delete', $user->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button title="submit" class="border-0 bg-transparent">
                                                <i title="submit" class="fas fa-trash text-danger" role="button"></i>
                                            </button>
                                        </form>
                                    </div>


                                </td>
                                {{-- td>rfed</td> --}}
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
            </div>
    </div>

@endsection
