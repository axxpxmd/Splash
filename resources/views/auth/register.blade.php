@extends('layouts.app')
@section('content')

<!-- Header -->
<div class="bg-white">
    <div class="col-md-8 justify">
        @include('MasterPage.header2')
    </div>
    <hr class="m-t-2">
</div>

<!-- Register Page -->
<body class="">
    <div class="container col-md-6 m-t-50">
        <div class="shadow-lg bdr-20 p-3 bg-white">
            <p class="text-center fs-32 f-b sans m-t-20">Join to Splash</p>
            <p class="josefin text-center m-t-20" style="margin-top: -1%">Already have an account? <a href="/login"><u class="f-blk">Login</u></a></p>
            <form action="{{ route('register') }}" method="POST">
                @csrf

                <div class="form-group col-md-11 justify">
                    <label class="f-b">Name</label>
                    <input id="name" type="text" class="input form-control" name="name" value="{{ old('name') }}" required autofocus>
                </div>
                
                <div class="form-group col-md-11 justify">
                    <label class="f-b m-t-20">Username</label>&nbsp;&nbsp;<span class="f-blk">(only letters, numbers, and underscores)</span>
                    <input type="text" class="input form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" name="username">
                    @if ($errors->has('username'))
                        <span class="invalid-feedback" role="alert">
                            <strong>Username has been taken!</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group col-md-11 justify">
                    <label class="f-b m-t-20">E-Mail address</label>
                    <input id="email" type="email" class="input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>E-mail has been taken!</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group col-md-11 justify">
                    <label class="f-b m-t-10">Password</label>&nbsp;&nbsp;<span class="f-blk">(min. 6 char)</span>
                    <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror" name="password" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>Confirm passwords do not match!</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-11 justify">
                    <label class="f-b m-t-20">Confirm Password</label>
                    <input id="password-confirm" type="password" class="input form-control" name="password_confirmation" required>
                </div>

                <div class="form-group col-md-11 justify">
                    <button class="btn btn-dark btn-block m-t-20 bdr-20" type="submit" value="Register">Join</button>
                    <hr>
                </div>

                <div class="form-group col-md-11 justify">
                    <p class="text-center m-t-20">By joining, you agree to the
                        <a data-toggle="modal" data-target="#terms" href="#"><u class="f-blk">Terms</u></a>
                        and
                        <a data-toggle="modal" data-target="#privacypolicy" href="#"><u class="f-blk">Privacy Policy</u></a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>

<!-- Modal -->
@extends('Page.terms')

@endsection
