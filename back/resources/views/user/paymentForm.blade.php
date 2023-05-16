@extends('layouts.app')
@section('content')
    <link href="{{asset('style/payment_style.css')}}" rel="stylesheet">
    <div class="container">
        @if (session('status'))
            <div class="alert alert-dismissible white" style="background-color: #9b73f2">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('status') }}
            </div>
        @endif
        <div class="container-xxl flex-grow-1 container-p-y" id="payment">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <h5 class="card-header">Оплата</h5>
                        <div class="card-body">
                            <h6>Стоимость по выбранными вами датами составляет <span style="color: red; font-size: 20px">{{$payment_amount}}</span> сом</h6>
                            <form action="{{route('payment.create')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="field" hidden="">
                                    <i class="icon fas fa-user"></i>
                                    <input type="text" id="child_id" value="{{$data['child_id']}}" name="child_id" placeholder="child_id" class="login__input @error('child_id') is-invalid @enderror" required autocomplete="child_id">
                                </div>
                                <div class="field" hidden="">
                                    <i class="icon fas fa-user"></i>
                                    <input type="date" id="date_from" value="{{$data['date_from']}}" name="date_from" placeholder="date_from" class="login__input @error('date_from') is-invalid @enderror" required autocomplete="date_from">
                                </div>
                                <div class="field" hidden="">
                                    <i class="icon fas fa-user"></i>
                                    <input type="date" id="date_to" value="{{$data['date_to']}}" name="date_to" placeholder="date_to" class="login__input @error('date_to') is-invalid @enderror" required autocomplete="date_to">
                                </div>
                                <div class="field" hidden="">
                                    <i class="icon fas fa-user"></i>
                                    <input type="text" id="payment_amount" value="{{$payment_amount}}" name="payment_amount" placeholder="payment_amount" class="login__input @error('payment_amount') is-invalid @enderror" required autocomplete="payment_amount">
                                </div>
                                <div class="mt-auto">
                                    <button type="submit" class="btn btn-primary ms-auto float-end rounded-pill">Оплатить
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
