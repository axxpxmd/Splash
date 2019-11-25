@extends('layouts.app')
@section('content')

<!-- Header -->
<div class="white">
    <div class="col-md-8 justify">
        @include('MasterPage.header2')
    </div>
    <hr class="m-t-2">
</div>

<div class="container col-md-6 m-t-50">
    @if (session('status'))
        <div class="alert bdr-20 alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="shadow-lg bdr-20 p-3 bg-white">
        <p class="sans text-center f-b fs-30 m-t-20">Reset Password</p>
        <p class="josefin text-center m-t-20" style="margin-top: -1%">Forgot your password?</p>
        <div>
            <form action="{{ route('password.email') }}" method="POST">
                @csrf

                <div class="form-group col-md-11 justify">
                    <label class="f-b">E-Mail address</label>
                    <input type="email" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>The email you entered is not yet registered!</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group col-md-11 justify">
                    <button type="submit" class="btn btn-dark btn-block m-t-20 bdr-20">Send me reset password instructions</button>
                    <hr>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
