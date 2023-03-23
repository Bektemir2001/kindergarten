@extends('layouts.admin_layout')
@section('content')
    <div class="content-wrapper">
        <div class="card-header text-center" ><h3>Add data about group {{$group->name}}</h3></div>
        <div class="container">
            <form action="{{route('admin.group.update', $group->id)}}" method="POST" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="exampleInput" class="form-label">Name:</label>
                    <input type="text" class="form-control col-6" name="name" id="name" value="{{$group->name}}" required autofocus oninvalid="this.setCostomValidity('пожалуйста, заполните это поле')" oninput="this.setCostomValidity('')">
                    @error('name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInput" class="form-label">Limit:</label>
                    <input type="number" class="form-control col-6" name="limit" id="limit" value="{{$group->limit}}" required autofocus oninvalid="this.setCostomValidity('пожалуйста, заполните это поле')" oninput="this.setCostomValidity('')">
                    @error('limit')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInput" class="form-label">Description:</label>
                    <input type="text" class="form-control col-6" name="description" id="description" value="{{$group->description}}" required autofocus oninvalid="this.setCostomValidity('пожалуйста, заполните это поле')" oninput="this.setCostomValidity('')">
                    @error('description')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputFile" class="col-md-4 col-form-label text-md-end">Image:</label>
                    <div class="col-sm-6">
                        <img class="img-fluid mb-3" src="{{asset($group->image)}}"  alt="image" style="width:100%;">
                    </div>

                    <div class="col-md-6">
                        <input type="file" class="form-control" accept="image/png, image/gif, image/jpeg" name="image" id="image">

                        @error('image')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <input type="file" class="form-control" accept="image/png, image/gif, image/jpeg" name="image" id="image" multiple>

                    @error('image')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="modal-footer">
                    <a href="{{route('admin.group.index')}}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>

        </div>
    </div>
@endsection
