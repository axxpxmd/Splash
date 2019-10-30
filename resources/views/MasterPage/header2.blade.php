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
    <div class="col-md-10 justify">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand pacifico m-r-60" href="/">
                <img src="{{ asset('images/XSplash.png') }}" class="d-inline-block align-top" width="30" height="30" alt="">
                Splash
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link navbar-brand m-r-15 josefin" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar-brand m-r-20 josefin" href="#">Explore</a>
                        </li>
                        <a class="m-r-20" href="#">
                            <button type="button" class="btn btn-outline-dark josefin">Submit a Photo</button>
                        </a>
                        <a class="navbar-brand navFont josefin" href="/login">
                            <span style="border-left: 1px black solid" class="m-r-20"></span>Login
                        </a>
                        <a href="/register">
                            <button type="button" class="btn btn-success buttonSubmit josefin">Join free</button>
                        </a>
                    </ul>
                </form>
            </div>
        </nav>
    </div>
    <hr class="m-t-4">
</body>

</html>
