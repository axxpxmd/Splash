@extends('layouts.app')
@section('content')

<!-- Header -->
<div class="bg-white">
    <div class="col-md-8 justify">
        @include('MasterPage.header2')
    </div>
    <hr class="m-t-2">
</div>

<!-- Login Page -->
<body class="">
    <div class="container col-md-6 m-t-50">
        <div class="shadow-lg bdr-20 p-3 bg-white">
            <p class="text-center fs-32 f-b sans m-t-20">Sign in to Splash</p>
            <p class="josefin text-center fs-15 m-t-20" style="margin-top: -1%">Welcome Back</p>
            <div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <div class="form-group col-md-11 justify">
                        <label class="f-b">Username</label>
                        <input type="text" class="input form-control @error('username') is-invalid @enderror" name="username" required>
                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>Incorrect Username or Password</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-11 justify">
                        <label class="f-b m-t-20">Password</label>&nbsp;<a href="{{ route('password.request') }}"><u class="f-blk">Forgot ?</u></a>
                        <input type="password" class="input form-control @error('password') is-invalid @enderror" name="password" required>
                    </div>

                    <div class="form-group col-md-11 justify">
                        <button class="btn btn-dark btn-block m-t-20 bdr-20" id="myButton" data-loading-text="Loading..." type="submit" value="Log in">Login</button>
                        <hr>
                    </div>

                    <div class="form-group col-md-11 justify">
                        <p class="text-center m-t-20">Don't have an account? <a href="/register"><u class="f-blk">Register</u></a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
@endsection