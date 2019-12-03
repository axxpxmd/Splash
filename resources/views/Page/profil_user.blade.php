@extends('layouts.app')
@section('content')
    
<!-- Header -->
@include('MasterPage.header3')

<!-- Profil User -->
<div class="col-md-10 justify-content-center row m-t-125">
    @foreach ($profil_user as $i)
        @if ($i->photo == !'')
            <img class="rounded-circle " width="150" height="150" src="{{ asset('ava/'. $i->photo) }}" alt="...">
        @else
            <img class="rounded-circle" width="150" height="150" src="{{ asset('images/user1.png') }}" alt="...">
        @endif
        <div class="m-l-30" style="margin-top: -0.5%">
            <p class="d-inline-block m-r-20 josefin f-b fs-40" style="margin-bottom: -1%">{{ $i->name }}</p>
            <a href="{{ route('account.edit') }}"><button type="button" class="m-b-20 btn btn-primary">Follow</button></a>
            <br>
            
            <!-- Location -->
            @if ($i->location == !'')
                <img src="{{ asset('images/location.png') }}" width="15" alt="">&nbsp;
                <p class="f-blk d-inline-block m-r-25">{{ $i->location }}</p>
            @endif

            <!-- Site -->
            @if ($i->site == !'')
                <img src="{{ asset('images/site.png') }}" class="m-r-5" width="15" alt="">
                <a href="{{ $i->site }}" target="blank">
                    <u class="f-blk">{{ $i->site }}</u>
                </a>
            @endif

            <!-- Bio -->
            <p>{{ $i->bio }}</p>

            <!-- Twitter -->
            @if ($i->twitter == !'')
                <img width="20" src="{{ asset('images/twitter1.png') }}" class="m-r-5" alt="">
                <a class="text-black m-r-25" href="https://twitter.com/{{ $i->twitter }}" target="blank">
                    <u>{{ $i->twitter }}</u>
                </a>
            @endif

            <!-- Instagram -->
            @if ($i->instagram == !'')
                <img width="20" src="{{ asset('images/instagram1.png') }}" class="m-r-5" alt="">
                <a class="text-black" href="https://www.instagram.com/{{ $i->instagram }}/" target="blank">
                    <u>{{ $i->instagram }}</u>
                </a>
            @endif

        </div>
    @endforeach
</div>

<!-- Post -->
<div class="container-fluid col-md-7">
    <ul class="nav nav-tabs m-t-80 mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active text-black" data-toggle="pill" href="#post">
                <img width="20" height="20" src="{{ asset('images/post.png') }}" alt="">
                &nbsp; Post
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-black" data-toggle="pill" href="#like">
                <img width="20" height="20" src="{{ asset('images/tagged.png') }}" alt="">
                &nbsp; Tagged
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
                <div class="m-t-90">
                    <img src="{{ asset('images/camera.png') }}" class="justify" width="60" alt="">
                    <p class="text-center m-t-10">No Posts Yet</p>
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