<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('images/XSplash.png') }}" type="image/x-icon">
    <title>Splash</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
<div class="shadow">
    <div class="col-md-10 justify ">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand pacifico" href="/home">
                <img src="{{ asset('images/XSplash.png') }}" width="30" height="30" alt="">
                Splash
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <!-- Search Bar -->
                {{-- <form action="" class="p-1 bg-light rounded rounded-pill shadow-sm col-md-7">
                    <div class="input-group">
                        <div class="input-group-append">
                            <button id="button-addon1" type="submit" class="btn btn-link text-primary"><img src="{{ asset('images/search.png') }}" width="20" height="20" alt=""></button>
                        </div>
                        <input placeholder="Search" aria-describedby="button-addon1" class="form-control col-md-11 border-0 bg-light"></input>
                    </div>
                </form> --}}
                <!-- End Search Bar -->
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                </ul>
                <div class="form-inline my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item m-t-4">
                            <a class="nav-link navbar-brand m-r-15 josefin" href="/home">Home</a>
                        </li>
                        <li class="nav-item m-t-4">
                            <a class="nav-link navbar-brand m-r-20 josefin" href="#">Explore</a>
                        </li>
                        <a class="m-r-20" href=""><button type="button" class="btn btn-outline-dark m-t-4 bdr-20 josefin">Submit a Photo</button></a>
                        <h6 class="navbar-brand m-t-4 josefin"><span style="border-left: 1px black solid" class="m-r-20"></span>Hello... {{ Auth::user()->name }} </h6>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    {{-- <hr class="m-t-0"> --}}
</div>
</body>

</html>
