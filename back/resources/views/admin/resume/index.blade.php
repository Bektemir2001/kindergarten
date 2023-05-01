@extends('layouts.admin_layout')
@section('content')
    <div class="content-wrapper">
        <div class="container" style="margin-top: 10px;">
            <div class="demo-html" style="width: 70%;display: block; margin-left: auto; margin-right: auto;">
                <div class="card-header text-center" >
                    <h3>Resumes Table</h3>
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
                                Full Name
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 20%;">
                                Phone Number
                            </th>
                            <th class="sorting text-center" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 25%;">
                                Action
                            </th>
                            {{-- <th width="2px"></th> --}}
                        </tr>
                        </thead>
                        <tbody id="userTable">
                        @foreach ($resumes as $resume)
                            <tr class="odd">
                                <td class="sorting_1">{{$resume->id}}</td>
                                <td>{{$resume->full_name}}</td>
                                <td>{{$resume->phone_number}}</td>
                                <td>
                                    <div style="float: left;
                                display: block;
                                width: 30%;" class="text-center">
                                        <a href="{{route('admin.user.show', $user)}}"><i class="fas fa-eye"></i></a>
                                    </div>
                                    <div style="float: left;
                                display: block;
                                width: 30%;" class="text-center">
                                        <form action="{{route('admin.user.delete', $user->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button title="delete" class="border-0 bg-transparent" onclick="return confirm('Do you really want to delete this user?')">
                                                <i title="delete" class="fas fa-trash text-danger" role="button"></i>
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
        </div>
    </div>
@endsection
