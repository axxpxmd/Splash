@extends('layouts.app')
@section('content')

<!-- Header -->
@include('MasterPage.header3')

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
        <button type="button" class="m-b-20 btn btn-outline-dark" data-toggle="dropdown">
            ...
        </button>
        <!-- DropDown -->
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('account.edit') }}">Account settings</a>
            <a class="dropdown-item" href="" data-toggle="modal" data-target="#publish">Submit a Photo</a>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
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

        <!-- Bio -->
        <p>{{ Auth::user()->bio }}</p>

        <!-- Twitter -->
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
            <a class="nav-link active text-black" data-toggle="pill" href="#post">
                <img width="20" height="20" src="{{ asset('images/post.png') }}" alt="">
                &nbsp; Post
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-black" data-toggle="pill" href="#like">
                <img width="20" height="20" src="{{ asset('images/love.png') }}" alt="">
                &nbsp; Like
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-black" data-toggle="pill" href="#followers">
                <img width="20" height="20" src="{{ asset('images/saved.png') }}" alt="">
                &nbsp; Followers
            </a>
        </li>
    </ul>
    <!-- Panel -->
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="post">
            @forelse ($post as $d)
                <a href="{{ route('post.detail'). '?post_id='.$d->id }}">
                    <img width="335" height="340" value={{ $d->id }} class="m-b-5 hov-pointer m-l-18 m-t-18 " src="{{ asset('post/'. $d->photo) }}" alt="">
                </a>
            @empty
                <div class="row m-l-1">
                    <img src="{{ asset('images/post.jpg') }}" width="400" class="img-fluid" alt="">
                    <div class="card no-b" style="width: 43rem">
                        <div class="m-auto">
                            <p class="text-center fs-18">Start capturing and sharing your moments.</p>
                            <button type="button" class="justify btn btn-outline-dark" data-toggle="modal" data-target="#publish"f>Submit a Photo</button>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
        <div class="tab-pane fade" id="like">
            Page Like
        </div>
        <div class="tab-pane fade" id="followers">
            Page Followers
        </div>
    </div>
</div>
@endsection
