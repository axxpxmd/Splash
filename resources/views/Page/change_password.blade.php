@extends('layouts.app')
@section('content')
    <!-- Header -->
    @include('MasterPage.header_account')
    <!-- End Header -->

    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show text-center bdr-20" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="row m-t-50">
            <div class="col-md-4">
                <p class="f-b fs-20">Account Setting</p>
                <a class="text-black" href="{{ route('profil') }}"><p class="m-t-30"><u>Profil</u></p></a>
                <a class="text-black" href="{{ route('account.edit') }}"><p><u>Edit Profile</u></p></a>
                <p>Change Password</p>
                <a class="text-black" href=""><p><u>Delete Account</u></p></a>
            </div>
            <div class="col-md-8">
                <p class="f-b fs-20 m-b-30">Change Password</p>
                <form class="form-horizontal" role="form" method="POST" action="{{ route('password.update') }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="row">

                        <div class="form-group col-md-12 {{ $errors->has('current_password') ? ' has-error' : '' }}">
                            <label for="current_password">Current Password</label>
                            <input id="current_password" type="password" class="input form-control m-b-10" name="current_password" autofocus>
                            <span class="help-block text-danger">{{ $errors->first('current_password') }}</span>
                        </div>

                        <div class="form-group col-md-12 {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">New Password</label>
                            <input id="password" type="password" class="input form-control m-b-10" name="password">
                            <span class="help-block text-danger">{{ $errors->first('password') }}</span>
                        </div>

                        <div class="form-group col-md-12 {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password_confirmation">New Password Confirmation</label>
                            <input id="password_confirmation" type="password" class="input form-control m-b-10" name="password_confirmation">
                            <span class="help-block text-danger">{{ $errors->first('password_confirmation') }}</span>
                        </div>

                        <div class="form-group col-md-12">
                            <button id="myButton" type="submit" class="btn-block btn btn-dark">
                                Change Password
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <hr class="m-t-50">

        <!-- Footer -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="/">
                        <img class="" width="30" height="30" src="{{ asset('images/icon.png') }}"/>
                    </a>
                    <span class="f-blk m-l-10">Make Something Awesome</span>
                </div>
                <div class="col">
                    <p class="text-right f-blk">
                        <a data-toggle="modal" data-target="#privacypolicy" href="#"><span class="f-blk">Privacy Policy</span></a>
                        <a data-toggle="modal" data-target="#terms" href="#"><span class="m-l-15 f-blk">Terms</span></a>
                        <a data-toggle="modal" data-target="#security" href="#"><span class="m-l-15 f-blk">Security</span></a>
                    </p>
                </div>
            </div>
        </div>
        <!-- End Footer -->

        <!-- Modal -->
        @include('Page.terms')
        <!-- End Modal -->
    </div>
@endsection