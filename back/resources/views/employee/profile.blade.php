@extends('layouts.employee_layout')

@section('content')
{{--    @dd(auth()->user()->id)--}}
    <div class="content-wrapper">
        <div class="container">
            <section class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-2 col-12">
                                    <img src="#" class="rounded-circle height-100" alt="Card image" />
                                </div>
                                <div class="col-md-10 col-12">
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <p class="text-bold-700 text-uppercase mb-0">Transactions</p>
                                            <p class="mb-0">12/14</p>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <p class="text-bold-700 text-uppercase mb-0">IP</p>
                                            <p class="mb-0">43.228.229.172</p>
                                        </div>
                                    </div>
                                    <hr/>
                                    <form class="form-horizontal form-user-profile row mt-2" action="#">
                                        <div class="col-6">
                                            <fieldset class="form-label-group">
                                                <input type="text" class="form-control" id="first-name" value="John" required="" autofocus="">
                                                <label for="first-name">First name</label>
                                            </fieldset>
                                        </div>
                                        <div class="col-6">
                                            <fieldset class="form-label-group">
                                                <input type="text" class="form-control" id="last-name" value="Doe" required="" autofocus="">
                                                <label for="last-name">Last name</label>
                                            </fieldset>
                                        </div>
                                        <div class="col-6">
                                            <fieldset class="form-label-group">
                                                <input type="text" class="form-control" id="user-name" value="johndoe9016" required="" autofocus="">
                                                <label for="user-name">User name</label>
                                            </fieldset>
                                        </div>
                                        <div class="col-6">
                                            <fieldset class="form-label-group">
                                                <input type="text" class="form-control" id="email-address" value="johndoe9016@gmail.com" required="" autofocus="">
                                                <label for="email-address">Email</label>
                                            </fieldset>
                                        </div>
                                        <div class="col-6">
                                            <fieldset class="form-label-group">
                                                <input type="password" class="form-control" id="old-password" placeholder="Enter Password" required="" autofocus="">
                                                <label for="old-password">Old password</label>
                                            </fieldset>
                                        </div>
                                        <div class="col-6">
                                            <fieldset class="form-label-group">
                                                <input type="password" class="form-control" id="new-password" placeholder="Enter Password" required="" autofocus="">
                                                <label for="new-password">New password</label>
                                            </fieldset>
                                        </div>
                                        <div class="col-12 text-right">
                                            <button type="submit" class="btn-gradient-primary my-1">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
