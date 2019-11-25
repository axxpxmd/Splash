@extends('layouts.app')
@section('content')
<!-- Header -->
<div class="bg-white">
    <div class="col-md-8 justify">
        @include('MasterPage.header2')
    </div>
    <hr class="m-t-2">
</div>

<div class="container col-md-6 m-t-50">
    <div class="shadow-lg bdr-20 p-3 bg-white">
        <p class="sans text-center f-b fs-30 m-t-20">Reset Password</p>
        <p class="josefin text-center  m-t-20" style="margin-top: -1%">Change your password</p>
        <div>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group col-md-11 justify">
                    <label class="f-b">E-Mail address</label>
                    <input type="email" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group col-md-11 justify">
                    <label class="f-b m-t-20">New Password</label>
                    <input type="password" class="input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group col-md-11 justify">
                    <label class="f-b m-t-20">Confirm New Password</label>
                    <input type="password" class="input form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="form-group col-md-11 justify">
                    <button type="submit" class="btn btn-block m-t-20 btn-dark bdr-20">Change Password</button>
                    <hr>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
