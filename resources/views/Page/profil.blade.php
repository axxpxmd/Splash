@extends('layouts.app')
@section('content')
    <!-- Header -->
    @extends('MasterPage.header')
    <!-- End Header -->

    <!-- Profil info -->
    <div class="col-md-10 justify-content-center m-t-70 row">
        {{-- @foreach ($photo as $i) --}}
            {{-- <img class="profil rounded-circle" width="150" height="150" src="{{ asset('ava/'. $i->photo) }}" alt="..."> --}}
            <img class="rounded-circle justify-content-center" width="150" height="150" src="{{ asset('images/boy.png') }}" alt="...">
        {{-- @endforeach --}}
        <div class="m-l-30">
            <p class="d-inline-block m-r-20 josefin f-b fs-40">{{ Auth::user()->name }}</p>
            <a href=""><button type="button" class="m-b-20 btn btn-outline-dark">Edit Profil</button></a>
            <button type="button" class="m-b-20 btn btn-outline-dark" data-toggle="dropdown" >
                ...
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="">Account settings</a>
                <a class="dropdown-item" href="">Submit a Photo</a>
                <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Log Out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            <p style="line-height: -100%;">{{ Auth::user()->bio }}</p>
            <img width="20" height="20" src="{{ asset('images/twitter.png') }}" alt=""> &nbsp;<a class="text-black" href="https://twitter.com/{{ Auth::user()->twitter }}" target="blank"><u>{{ Auth::user()->twitter }}</u></a> &nbsp; &nbsp; &nbsp; &nbsp;
            <img width="20" height="20" src="{{ asset('images/instagram.png') }}" alt=""> &nbsp;<a class="text-black" href="https://www.instagram.com/{{ Auth::user()->instagram }}/" target="blank"><u>{{ Auth::user()->instagram }}</u></a>
        </div>
    </div>
    <!-- End Profil info -->

    <!-- Post -->
    <div class="container-fluid col-md-8">
        <ul class="nav nav-tabs m-t-90 mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active text-black" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                    <img width="20" height="20" src="{{ asset('images/picture.png') }}" alt=""> 
                    &nbsp; Post
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                    <img width="20" height="20" src="{{ asset('images/like.png') }}" alt=""> 
                    &nbsp; Like
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                    <img width="20" height="20" src="{{ asset('images/star.png') }}" alt=""> 
                    &nbsp; Collections
                </a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                Page Post
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                Page Like
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                Page Collections
            </div>
        </div>
    </div>
    <!-- End Post -->
@endsection