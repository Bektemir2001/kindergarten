@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="container-xxl flex-grow-1 container-p-y" id="payment">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <h5 class="card-header">Оплата</h5>
                        <div class="card-body">
                            <h6>Стоимость по выбранными вами датами составляет <span style="color: red; font-size: 20px">{{$payment_amount}}</span> сом</h6>
                            <h6>Пожалуйста проверьте нижеприведенные данные и выберите способ оплату чтобы продолжать оплату</h6>
                            <br>

                            <form id="form" action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="field" hidden="">
                                    <i class="icon fas fa-user"></i>
                                    <input type="text" id="child_id" value="{{$data['child_id']}}" name="child_id" placeholder="child_id" class="login__input @error('child_id') is-invalid @enderror" required autocomplete="child_id">
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <p for="date_from" class="form-label"><b>С {{$data['date_from']}} числа:</b></p>
                                        <input type="date" id="child_id" value="{{$data['date_from']}}" name="child_id" placeholder="child_id" class="login__input @error('child_id') is-invalid @enderror" required autocomplete="child_id" disabled>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <p for="date_to" class="form-label"><b>До какой:</b></p>
                                        <input id="date_to" type="date" class="form-control @error('date_to') is-invalid @enderror" name="date_to" value="{{ old('date_to') }}" required autofocus oninvalid="this.setCustomValidity('Please fill in the field')" oninput="this.setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="mt-auto">
                                    <button type="submit" class="btn btn-primary ms-auto float-end rounded-pill">Далее
                                    </button>
                                    <button type="button" class="btn btn-secondary ms-auto float-end mx-3 rounded-pill"
                                            onclick="hidePayment()">Закрыть
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
