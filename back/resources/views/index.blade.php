@extends('layouts.app')

@section('content')
    <div>
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
