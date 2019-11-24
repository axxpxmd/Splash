@extends('layouts.app')
@section('content')

    <!-- Header -->
    @include('MasterPage.header_home')

    <!-- Modal Post -->
    @include('Page.post')

    <body class="loginimage">

        <!-- Post Column -->
        <div class="col-md-7 justify container">
            <div class="row">
                <div class=" col-md-7 m-t-100">
                    @foreach ($post as $i)
                        <div class="card">
                            <div class="card-body" style="height: 4rem">
                                <img src="{{ asset('ava/'. $i->user->photo) }}" style="margin-top: -1%; margin-bottom: -1%" class="rounded-circle float-left" width="35" height="35" alt="">
                                <a href="text-left "><span class="text-black m-l-10 f-b">{{ $i->user->name }}</span></a>
                                <a href="" data-toggle="modal" data-target="#exampleModalCenter"><img src="{{ asset('images/dots1.png') }}"  class="float-right" width="30" alt=""></a>
                            </div>
                        </div>
                        <img src="{{ asset('post/'. $i->photo) }}" width="678" class="img-fluid" alt="...">
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

                <!-- Suggest Column -->
                <div class="col-md-4 m-l-15 m-t-100">
                    <div class="row" style="position: fixed">
                        <a href="{{ route('profil' ) }}"><img src="{{ asset('ava/'. $i->user->photo) }}" class="rounded-circle float-left" width="55" height="55" alt=""></a>
                        <div class="m-l-10">
                            <p class="d-inline-block m-r-20 josefin f-b">{{ Auth::user()->name }}</p>
                            <p style="margin-top: -17%">{{ Auth::user()->bio }}</p>
                        </div>
                        <div class="card m-t-70" style="margin-left: -34%; width: 20rem;">
                            <div class="card-body" style="margin-top: -3%">
                                <span class="f-blk">Suggestion For You</span>
                                <a href="{{ route('suggest.user') }}"><span class="float-right text-black">See All</span></a>
                                <br>
                                @foreach ($users->take(3) as $i)
                                    <a style="text-decoration: none" href="">
                                        <img id="{{ $i->id }}" src="{{ asset('ava/'. $i->photo) }}" class="rounded-circle m-t-10" width="35" height="35" alt="">
                                        <span class="text-black f-b m-l-8">{{ $i->name }}</span>
                                    </a>
                                    <a href=""><span class="float-right m-t-10">Follow</span></a>
                                    <br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div style="position: fixed; margin-top: 14%; margin-left: -0.5%">
                        <p>
                            <a href="" class="text-black-50 fs-12">About us • </a>
                            <a href="" class="text-black-50 fs-12">privacy Policy • </a>
                            <a href="" class="text-black-50 fs-12">Terms</a>
                        </p>
                        <p class="text-black-50 fs-14">© 2019 Splash</p>
                    </div>
                </div>

            </div>
        </div>
    </body>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bdr-15">
                <div class="modal-body text-center">
                    <a href="" class="apple f-blk m-auto text-danger">Unfollow</a>
                    <hr>
                    <a href="" class="apple f-blk m-auto">Go to post</a>
                    <hr>
                    <a href="" class="apple f-blk m-auto">Share</a>
                    <hr>
                    <a href="" class="apple f-blk m-auto" data-dismiss="modal">Cancel</a>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
<script type="text/javascript">
    // 
</script>
@endsection


