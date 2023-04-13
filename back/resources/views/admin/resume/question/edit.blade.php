@extends('layouts.admin_layout')
@section('content')
    <div class="content-wrapper">
        <div class="card-header text-center" ><h3>Edit page</h3></div>
        <div class="container">
            <form action="{{route('admin.resume.question.update', $question->id)}}" method="POST">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="exampleInput" class="col-md-4 col-form-label text-md-end">Question:</label>
                    <textarea
                        id="question"
                        name="question"
                        rows="5"
                        cols="100"
                        placeholder="Write a new question...">{{$question->question}}</textarea>
{{--                    <input type="text" class="form-control col-6" name="question" id="question" value="{{$question->question}}" required autofocus oninvalid="this.setCostomValidity('пожалуйста, заполните это поле')" oninput="this.setCostomValidity('')">--}}
{{--                    @error('question')--}}
{{--                    <p class="text-danger">{{$message}}</p>--}}
{{--                    @enderror--}}
                </div>

                <div class="modal-footer">
                    <a href="{{route('admin.resume.question.index')}}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
