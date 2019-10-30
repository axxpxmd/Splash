@extends('layouts.app')
@section('content')
<div class="">

    <!-- Header -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand navBrand " href="#">
            <img src="{{ asset('images/XSplash.png') }}" width="30" height="30"
                class="d-inline-block align-top" alt="">
            Splash
        </a>
        <div class="form-inline">
            <a class="navbar-brand navFont" href="/login">Home</a>
            <a class="navbar-brand navFont" href="/login">Explore</a>
            <button type="button" class=" btn btn-outline-secondary buttonSubmit">Submit a Photo</button>
            &nbsp; &nbsp; &nbsp;
            <div class="navbar-brand vertical"></div>
            <a class="navbar-brand navFont">Hello... {{ Auth::user()->name }} </a>
            <div class="dropdown">
                <a class="dropdown-toggle navbar-brand" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img width="25px" height="25px" src="{{ asset('images/Profil.png') }}" alt="..." class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="">Profil</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    Log Out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </nav>
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

</div>
@endsection


