@extends('layouts.app')

@section('content')
    <div>
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="float: right">
                @if(auth()->user())
                    <button onclick="location.href='{{route('user.logout')}}'" type="button" style="float:right">
                        Sign out
                    </button>
                @else
                    <button onclick="location.href='{{route('user.auth.form')}}'" type="button" style="float:right">
                        Sign in
                    </button>
                    <button onclick="location.href='{{route('user.register.form')}}'" type="button" style="float:right">
                        Sign up
                    </button>
                @endif
            </nav>
        @if(session('msg'))
            <div class="d-flex justify-content-center">
                <div class="alert alert-success alert-dismissible fade show text-center" style="width:25%;">{{session('msg')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            </div>
        @endif
        <h1>Main Page</h1>
    </div>

@endsection
