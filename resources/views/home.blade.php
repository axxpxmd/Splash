@extends('layouts.app')
@section('content')

<!-- Header -->
@include('MasterPage.header1')

<body class="loginimage">
    <div class="col-md-7 justify container">
        <div class="row">

            <!-- Post Column -->
            <div class=" col-md-7 m-t-100">
                @foreach ($post as $i)
                    <div class="card">
                        <div class="card-body" style="height: 4rem">
                            <a href="{{ route('profil.user') .'?user_id='.$i->user_id }}" style="text-decoration: none">
                                @if ($i->user->photo == !'')
                                    <img id="{{ $i->user_id }}" src="{{ asset('ava/'. $i->user->photo) }}" style="margin-top: -1%; margin-bottom: -1%" class="rounded-circle float-left" width="35" height="35" alt="">
                                @else
                                    <img id="{{ $i->user_id }}" src="{{ asset('images/user1.png') }}" style="margin-top: -1%; margin-bottom: -1%" class="rounded-circle float-left" width="35" height="35" alt="">
                                @endif
                                <span class="text-black m-l-10 f-b">{{ $i->user->name }}</span>
                            </a>
                            <a href="" data-toggle="modal" data-target="#optionPost"><img src="{{ asset('images/dots1.png') }}" class="float-right" width="30"></a>
                        </div>
                    </div>
                    <a href="{{ route('post.detail') .'?post_id='.$i->id }}">
                        <img src="{{ asset('post/'. $i->photo) }}" id="{{ $i->id }}" width="678" class="img-fluid" alt="...">
                    </a>
                    <div class="card m-b-30">
                        <div class="card-body">
                            <a href=""><img src="{{ asset('images/love1.png') }}" class="m-r-5 m-b-10" style="margin-top: -2%" width="30" alt=""></a>
                            <img src="{{ asset('images/comment1.png') }}" class="m-r-5 m-b-10" width="30" style="margin-top: -2%" alt="">
                            <img src="{{ asset('images/shared1.png') }}" class="m-r-5 m-b-10" width="30" style="margin-top: -2%" alt="">
                            <img src="{{ asset('images/save.png') }}" class="m-r-5 m-b-10 float-right" width="30" style="margin-top: -2%; margin-right: -1%" alt="">
                            <br>
                            <span class="f-b">24,194 likes</span>
                            <br>
                            <span class="f-b text-black">{{ $i->user->name }}</span>
                            <span class="d-inline-block">{{ $i->caption }}</span>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Modal Option Post-->
            <div class="modal fade" id="optionPost" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content bdr-15">
                        <div class="modal-body text-center">
                            <a href="" class="apple f-blk m-auto text-danger">Unfollow</a>
                            <hr>
                            <a id="{{ $i->id }}" href="{{ route('post.detail') .'?post_id='.$i->id }}" class="apple f-blk m-auto">Go to post</a>
                            <hr>
                            <a href="" class="apple f-blk m-auto">Share</a>
                            <hr>
                            <a href="" class="apple f-blk m-auto" data-dismiss="modal">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Suggest Column -->
            <div class="col-md-5 m-t-100">
                <div class="row position-fixed m-l-8">
                    @if (Auth::user()->photo == !'')
                        <a href="{{ route('profil' ) }}"><img src="{{ asset('ava/'. Auth::user()->photo) }}" class="rounded-circle" width="55" height="55" alt=""></a>
                    @else
                        <a href="{{ route('profil' ) }}"><img src="{{ asset('images/user1.png') }}" class="rounded-circle" width="55" height="55" alt=""></a>
                    @endif
                    <div class="m-l-10">
                        <p class="m-r-20 josefin f-b">{{ Auth::user()->name }}</p>
                        <p style="margin-top: -17%">{{ Auth::user()->bio }}</p>
                    </div>
                </div>
                <div class="position-fixed m-t-70">
                    <div class="card" style="width: 20rem;">
                        <div class="card-body" style="margin-top: -3%">
                            <span class="f-blk">Suggestion For You</span>
                            <a href="{{ route('suggest.user') }}"><span class="float-right text-black">See All</span></a>
                            <br>
                            @foreach ($users->take(3) as $i)
                                <a href="{{ route('profil.user') .'?user_id='.$i->id }}" style="text-decoration: none">
                                    @if ($i->photo == !'')
                                        <img id="{{ $i->id }}" src="{{ asset('ava/'. $i->photo) }}" class="rounded-circle m-t-10" width="35" height="35" alt="">
                                    @else
                                        <img id="{{ $i->id }}" src="{{ asset('images/user1.png') }}" class="rounded-circle m-t-10" width="35" height="35" alt="">
                                    @endif
                                    <span class="text-black f-b m-l-8">{{ $i->name }}</span>
                                </a>
                                <a href=""><span class="float-right m-t-10">Follow</span></a>
                                <br>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <p>
                            <a href="/about" class="text-black-50 fs-12 text-decoration-none">About us • </a>
                            <a href="" class="text-black-50 fs-12 text-decoration-none">privacy Policy • </a>
                            <a href="" class="text-black-50 fs-12 text-decoration-none">Terms</a>
                        </p>
                        <p class="text-black-50 fs-14">© 2019 Splash</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

@endsection
