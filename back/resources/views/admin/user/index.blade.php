@extends('layouts.admin_layout')
@section('content')
    <div class="content-wrapper">
        <div class="container" style="margin-top: 10px;">
        <button type="button" class="btn btn-primary btn-sm" style="margin-right:85%;" id="addUserBtnId" onclick="showForm()">Add User</button>
        <div class="d-none" id="addUserId">
            <form id="form" enctype="multipart/form-data">
                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="surname" class="col-md-4 col-form-label text-md-end">{{ __('Surname') }}</label>

                    <div class="col-md-6">
                        <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                        @error('surname')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Home Address') }}</label>

                    <div class="col-md-6">
                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                        @error('address')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="phone_number" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                    <div class="col-md-6">
                        <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>

                        @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="role" class="col-md-4 col-form-label text-md-end">Role:</label>
                    <select name="role" class="col-md-4 col-form-label text-md-end" id="role">
                        <option value="0">Admin</option>
                        <option value="1">Employee</option>
                        <option value="2">User</option>
                    </select>
                    @error('role')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="passport_back" class="col-md-4 col-form-label text-md-end">{{ __('Passport Back') }}</label>

                    <div class="col-md-6">
                        <input id="passport_back" type="file" class="form-control @error('passport_back') is-invalid @enderror" name="passport_back" value="{{ old('passport_back') }}">

                        @error('passport_back')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="passport_front" class="col-md-4 col-form-label text-md-end">{{ __('Passport Front') }}</label>

                    <div class="col-md-6">
                        <input id="passport_front" type="file" class="form-control @error('passport_front') is-invalid @enderror" name="passport_front" value="{{ old('passport_front') }}">

                        @error('passport_front')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-secondary" style="margin-left: 65%;" onclick="cancelForm()">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
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
        <script>
            function showForm(){
                document.getElementById("addUserBtnId").className = "d-none";
                document.getElementById("addUserId").className = "col-6";
            }
            function cancelForm(){
                document.getElementById("addUserBtnId").className;
            }
            document.getElementById('form').addEventListener("submit", (event) => {
                event.preventDefault()
                let url = "{{route('admin.user.create')}}";
                let name = document.getElementById("name").value;
                let surname = document.getElementById("surname").value;
                let address = document.getElementById("address").value;
                let phone_number = document.getElementById("phone_number").value;
                let email = document.getElementById("email").value;
                let password = document.getElementById("password").value;
                let role = document.getElementById("role").value;
                let passport_back = document.getElementById("passport_back").value;
                let passport_front = document.getElementById("passport_front").value;
                let data = new FormData();
                data.append("name", name);
                data.append("surname", surname);
                data.append("address", address);
                data.append("phone_number", phone_number);
                data.append("email", email);
                data.append("password", password);
                data.append("role", role);
                data.append("passport_back", passport_back);
                data.append("passport_front", passport_front);
                fetch(url, {
                    method: 'POST',
                    body: data
                })
                    .then(res => res.json())
                    .then(body => {
                        console.log(body)
                    })
                    .catch(error => console.log(error))
            })
        </script>
@endsection
