@extends('layouts.app')
@section('content')
    <!-- Header --> 
    @extends('MasterPage.header2')
    <!-- End Header -->
    <div class="container col-md-6 m-t-100">
        <div class="shadow-lg br-20 p-3 bg-white">
            <a href="/">
                <img class="d-block mx-auto m-t-10" width="60" height="60" src="{{ asset('images/XSplash.png') }}"/>
            </a>
            <p class="josefin text-center  m-t-20">Welcome Back</p>
            <p class="josefin text-center f-b fs-30">Login</p>
            <div>
                <form method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="form-group col-md-11 justify">
                        <label class="f-b">Username</label>
                        <input type="text" class="input form-control @error('username') is-invalid @enderror" name="username"  required>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>Username atau Password salah</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-11 justify">
                        <label class="f-b m-t-20">Password</label>&nbsp; &nbsp;<a href=""><u class="f-blk">Forgot ?</u></a>
                        <input type="password" class="input form-control @error('password') is-invalid @enderror" name="password" required>
                    </div>

                    <div class="form-group col-md-11 justify">
                        <button class="btn btn-dark btn-block m-t-20" id="myButton"  data-loading-text="Loading..." type="submit" value="Log in" >Login</button>
                    </div>

                    <div class="form-group col-md-11 justify">
                        <p class="text-center m-t-20">Don't have an account? <a href="/register"><u class="f-blk">Register</u></a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection 
@section('script')
   <script>
   </script>
@endsection