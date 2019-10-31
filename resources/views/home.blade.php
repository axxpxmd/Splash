@extends('layouts.app')
@section('content')
    <!-- Header -->
    <div class="col-md-10 justify">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand pacifico" href="/home">
                <img src="{{ asset('images/XSplash.png') }}" width="30" height="30" alt="">
                Splash
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#responsive"
                aria-controls="responsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="responsive">
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
                    <ul class="navbar-nav">
                        <li class="nav-item m-t-4">
                            <a class="nav-link navbar-brand m-r-15 josefin" href="#">Home</a>
                        </li>
                        <li class="nav-item m-t-4">
                            <a class="nav-link navbar-brand m-r-20 josefin" href="#">Explore</a>
                        </li>
                        <a class="m-r-20 m-t-4" href=""><button type="button" class="btn btn-outline-dark bdr-20">Submit a Photo</button></a>
                        <h6 class="navbar-brand m-t-4"><span style="border-left: 1px black solid" class="m-r-20"></span>Hello... {{ Auth::user()->name }} </h6>
                        <div class="dropdown">
                            <a class="dropdown-toggle navbar-brand m-t-4" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img width="25px" height="25px" src="{{ asset('images/Profil.png') }}" alt="..." class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('profil') }}">Profil</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Log Out
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- End Header -->
    
    <!-- Corousel -->
    <div class="bd-example">
        <div id="carouselExampleSlidesOnly  " class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img height="553" src="images/bg01.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h2 class="navBrand " style="margin-top: 10%">Splash</h2>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img height="553" src="images/bg03.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="navBrand " style="margin-top: 10%">Splash</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img height="553" src="images/bg04.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="navBrand " style="margin-top: 10%">Splash</h2>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Carousel -->
@endsection


