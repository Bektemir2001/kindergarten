@extends('layouts.admin_layout')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="container">
                <form action="{{route('admin.user.edit', $user->id)}}" method="POST" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <h5 class="modal-title" id="exampleModalLabel">Добавить</h5>
                        <a href="{{route('admin.user.index')}}" class="close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                    <div class="form-group">
                        <label for="exampleInput" class="form-label">Name:</label>
                        <input type="text" class="form-control col-6" name="name" id="exampleInput" value="{{$user->name}}" required autofocus oninvalid="this.setCostomValidity('пожалуйста, заполните это поле')" oninput="this.setCostomValidity('')">
                        @error('name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInput" class="form-label">Surname:</label>
                        <input type="text" class="form-control col-6" name="name" id="exampleInput" value="{{$user->surname}}" required autofocus oninvalid="this.setCostomValidity('пожалуйста, заполните это поле')" oninput="this.setCostomValidity('')">
                        @error('surname')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInput" class="form-label">Address:</label>
                        <input type="text" class="form-control col-6" name="name" id="exampleInput" value="{{$user->address}}" required autofocus oninvalid="this.setCostomValidity('пожалуйста, заполните это поле')" oninput="this.setCostomValidity('')">
                        @error('address')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInput" class="form-label">Phone number:</label>
                        <input type="text" class="form-control col-6" name="name" id="exampleInput" value="{{$user->phone_number}}" required autofocus oninvalid="this.setCostomValidity('пожалуйста, заполните это поле')" oninput="this.setCostomValidity('')">
                        @error('phone_number')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInput" class="form-label">Email:</label>
                        <input type="text" class="form-control col-6" name="name" id="exampleInput" value="{{$user->email}}" required autofocus oninvalid="this.setCostomValidity('пожалуйста, заполните это поле')" oninput="this.setCostomValidity('')">
                        @error('email')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInput" class="form-label">Role:</label>
                        <select>
                            <option value="{{$user->role}}">0</option>
                            <option value="{{$user->role}}">1</option>
                            <option value="{{$user->role}}">2</option>
                        </select>
                        @error('role')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>


                    <div class="modal-footer">
                        <a href="{{route('admin.user.index')}}" class="btn btn-secondary">Отменить</a>
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
