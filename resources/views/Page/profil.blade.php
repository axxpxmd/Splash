@extends('layouts.app')
@section('content')

    <!-- Header -->
    @include('MasterPage.header')

    <!-- Modal Post -->
    @include('Page.post')

    <!-- Profil info -->
    <div class="col-md-10 justify-content-center row m-t-125">
        @foreach ($photo as $i)
            @if ($i->photo == !'')
                <img class="rounded-circle " width="150" height="150" src="{{ asset('ava/'. $i->photo) }}" alt="...">
            @else
                <img class="rounded-circle" width="150" height="150" src="{{ asset('images/user1.png') }}" alt="...">    
            @endif
        @endforeach
        <div class="m-l-30" style="margin-top: -0.5%">
            <p class="d-inline-block m-r-20 josefin f-b fs-40" style="margin-bottom: -1%">{{ Auth::user()->name }}</p>
            <a href="{{ route('account.edit') }}"><button type="button" class="m-b-20 btn btn-outline-dark">Edit Profil</button></a>
            <button type="button" class="m-b-20 btn btn-outline-dark" data-toggle="dropdown" >
                ...
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('account.edit') }}">Account settings</a>
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#publish">Submit a Photo</a>
                <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Log Out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            <br>

            <!-- Location -->
            @if (Auth::user()->location == !'')
                <img src="{{ asset('images/location.png') }}" width="15" alt="">&nbsp;
                <p class="f-blk d-inline-block m-r-25">{{ Auth::user()->location }}</p>
            @endif

            <!-- Site -->
            @if (Auth::user()->site == !'')
                <img src="{{ asset('images/site.png') }}" class="m-r-5" width="15" alt="">
                <a href="{{ Auth::user()->site }}" target="blank">
                    <u class="f-blk">{{ Auth::user()->site }}</u>
                </a>
            @endif

            <!-- Twitter -->
            <p>{{ Auth::user()->bio }}</p>
            @if (Auth::user()->twitter == !'')
                <img width="20" src="{{ asset('images/twitter1.png') }}" class="m-r-5" alt="">
                <a class="text-black m-r-25" href="https://twitter.com/{{ Auth::user()->twitter }}" target="blank">
                    <u>{{ Auth::user()->twitter }}</u>
                </a>
            @endif

            <!-- Instagram -->
            @if (Auth::user()->instagram == !'')
                <img width="20" src="{{ asset('images/instagram1.png') }}" class="m-r-5" alt="">
                <a class="text-black" href="https://www.instagram.com/{{ Auth::user()->instagram }}/" target="blank">
                    <u>{{ Auth::user()->instagram }}</u>
                </a>
            @endif

        </div>
    </div>

    <!-- Post -->
    <div class="container-fluid col-md-7">
        <ul class="nav nav-tabs m-t-80 mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active text-black" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                    <img width="20" height="20" src="{{ asset('images/post.png') }}" alt=""> 
                    &nbsp; Post
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                    <img width="20" height="20" src="{{ asset('images/love.png') }}" alt=""> 
                    &nbsp; Like
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                    <img width="20" height="20" src="{{ asset('images/saved.png') }}" alt=""> 
                    &nbsp; Followers
                </a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                @foreach($post as $i)
                    <a href="{{ route('post.detail'). '?post_id='.$i->id }}">
                        <img width="335" height="340" value={{ $i->id }} class="m-b-5 hov-pointer m-l-18 m-t-18 " src="{{ asset('post/'. $i->photo) }}" alt="">
                    </a>
                @endforeach
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                Page Like
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                Page Collections
            </div>
        </div>
    </div>
@endsection