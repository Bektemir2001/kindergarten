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
    </div>
    <div class="container-info">
        <h1>first screen</h1>
        <div class="ag-format-container">
            <div class="ag-courses_box">
                @foreach($enroll as $enr)

                    <div class="ag-courses_item" >
                        <a href="#" class="ag-courses-item_link">
                            <div class="ag-courses-item_bg_enroll"></div>
                            <div class="ag-courses-item_title">
                                {{$enr->name}}
                                <p>{{$enr->surname}}</p>
                            </div>
                            <div class="ag-courses-item_date-box">
                                Create:
                                <span class="ag-courses-item_date">{{$enr->created_at}}</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="ag-format-container">
            <div class="ag-courses_box">
                @foreach($children as $child)

                    <div class="ag-courses_item" >
                        <a href="#" class="ag-courses-item_link">
                            <div class="ag-courses-item_bg_children"></div>
                            <div class="ag-courses-item_title">
                                {{$child->name}}
                                <p>{{$child->surname}}</p>
                                {{$child->parent->name}}
                            </div>
                            <div class="ag-courses-item_date-box">
                                Create:
                                <span class="ag-courses-item_date">{{$child->created_at}}</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container-main">
        <h1>second screen</h1>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endsection
