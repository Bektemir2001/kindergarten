@extends('layouts.app')

@section('content')
    <div>
        <h1>Main Page</h1>
        @if(auth()->user())
            <a href="{{route('user.logout')}}">Sign out</a>
        @else
            <a href="{{route('user.auth.form')}}">Sign in</a>
            <a href="{{route('user.register.form')}}">Sign up</a>
        @endif

    </div>
@endsection
