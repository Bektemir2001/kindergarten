@extends('layouts.app')

@section('content')
    <div class="topnav">
        <nav>
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
    </div>
    <div>
        <h1>Admin Page</h1>
    </div>
@endsection
