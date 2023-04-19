@extends('layouts.admin_layout')
@section('content')
    <div class="content-wrapper">
        <div class="card-header text-center" ><h3>Edit page</h3></div>
            <div class="container">
                <form action="{{route('admin.user.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="exampleInput" class="form-label">Name:</label>
                        <input type="text" class="form-control col-6" name="name" id="name" value="{{$user->name}}" required autofocus oninvalid="this.setCostomValidity('пожалуйста, заполните это поле')" oninput="this.setCostomValidity('')">
                        @error('name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInput" class="form-label">Surname:</label>
                        <input type="text" class="form-control col-6" name="surname" id="surname" value="{{$user->surname}}" required autofocus oninvalid="this.setCostomValidity('пожалуйста, заполните это поле')" oninput="this.setCostomValidity('')">
                        @error('surname')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInput" class="form-label">Address:</label>
                        <input type="text" class="form-control col-6" name="address" id="address" value="{{$user->address}}" required autofocus oninvalid="this.setCostomValidity('пожалуйста, заполните это поле')" oninput="this.setCostomValidity('')">
                        @error('address')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInput" class="form-label">Phone number:</label>
                        <input type="text" class="form-control col-6" name="phone_number" id="phone_number" value="{{$user->phone_number}}" required autofocus oninvalid="this.setCostomValidity('пожалуйста, заполните это поле')" oninput="this.setCostomValidity('')">
                        @error('phone_number')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInput" class="form-label">Role:</label>
                        <select name="role" style="width: 50% !important;"  class="form-control" id="role">
                                <option value="ROLE_ADMIN">Admin</option>
                                <option value="ROLE_TEACHER">Employee</option>
                                <option value="ROLE_USER">User</option>
                        </select>
                        @error('role')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInput" class="form-label">Passport Front:</label>
                        <input type="file" class="form-control col-6" accept="image/png, image/gif, image/jpeg" name="passport_front" id="passport_front">
                        @error('passport_front')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInput" class="form-label">Passport Back:</label>
                        <input type="file" class="form-control col-6" accept="image/png, image/gif, image/jpeg" name="passport_back" id="passport_back">
                        @error('passport_back')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>


                    <div class="modal-footer">
                        <a href="{{route('admin.user.index')}}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>

            </div>
    </div>
@endsection
