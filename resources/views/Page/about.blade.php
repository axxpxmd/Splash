@extends('layouts.app')
@section('content')
    <!-- Header -->
    @include('MasterPage.header2')
    <!-- End Header -->

    <div class="col-md-8 justify">

        <!-- #1 -->
        <div class="m-t-50">
            <div class="row">
                <div class="col-md-6 m-t-241">
                    <p class="apple fs-46 f-b">Photos for everyone</p>
                    <span class="apple fs-18">Over 1 million free high-resolution images brought to you by the</span>
                    <br>
                    <span class="apple fs-18">world’s most generous community of photographers.</span>
                    <div class="row m-t-30 m-l-1">
                        <button class="btn btn-dark m-r-10">Start Browsing</button>
                        <a href="/register"><button class="btn btn-outline-dark">Become a contributor</button></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <img width="600" height="800" src="{{ asset('images/about-header.jpg') }}" alt="">
                </div>  
            </div>
        </div>

        <!-- #2 -->
        <div class="m-t-100">
            <p class="apple fs-28 f-b text-center">Unsplash is internet’s source of freely useable images.</p>
            <div class="card-deck m-t-50">
                <div class="card no-b bg-transparent">
                    <img width="400" height="280" src="{{ asset('images/card1.jpg') }}" class="m-auto" alt="...">
                    <div class="card-body" style="margin-left: -5%">
                        <p class="fs-18 f-b apple">Over one million curated photos</p>
                        <p class="fs-15 apple">We hand-select every photo and accept only the best, so that no matter what you need—you’ll find exactly what you’re looking for on Unsplash.</p>
                    </div>
                </div>
                <div class="card no-b bg-transparent">
                    <img width="400" height="280"  src="{{ asset('images/card2.jpg') }}" class="m-auto" alt="...">
                    <div class="card-body" style="margin-left: -5%">
                        <p class="fs-18 f-b apple">A community of 157,866 photographers</p>
                        <p class="fs-15 apple">Unsplash is home to a growing community of photographers—from hobbyists, professionals, emerging brands and everyone in between.</p>
                    </div>
                </div>
                <div class="card no-b bg-transparent">
                    <img width="400" height="280"  src="{{ asset('images/card3.jpg') }}" class="m-auto" alt="...">
                    <div class="card-body" style="margin-left: -5%">
                        <p class="fs-18 f-b apple">Fuelling your favourite platforms</p>
                        <p class="fs-15 apple">With partners like BuzzFeed, Squarespace and Trello being powered by our API, the Unsplash library is more widely accessible than ever.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- #3 -->
        <div class="m-t-100">
            <div class="row">
                <div class="col-md-6 m-t-180">
                    <p class="apple fs-28 f-b">Make something awesome</p>
                    <span class="apple fs-18">Unsplash was born from the pain we had in finding great, usable</span>
                    <br>
                    <span class="apple fs-18">imagery. And we weren’t alone. Which is why, today—millions of</span>
                    <br>
                    <span class="apple fs-18">creators from around the world have downloaded over 1 billion</span>
                    <br>
                    <span class="apple fs-18">Unsplash images to create presentations, artwork, mockups, and more.</span>
                    <div class="m-t-30">
                        <button class="btn btn-dark">Find the perfect image</button>
                    </div>
                </div>
                <div class="col-md-4 bg-transparent">
                    <img width="636" height="636" src="{{ asset('images/made-with.jpg') }}" alt="">
                </div>
            </div>
        </div>

        <!-- #4 -->
        <div class="m-t-100">
            <div class="card mb-3 no-b bg-dark-gray" style="max-width: 100%;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img width="526" height="574" src="{{ asset('images/free.jpg') }}" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body m-t-109 m-l-70">
                            <h5 class="card-title apple fs-28 f-b">Is it really free? Yes.</h5>
                            <span class="apple fs-18">Unsplash is a platform powered by an amazing community that</span>
                            <br>
                            <span class="apple fs-18">has gifted hundreds of thousands of their own photos to fuel</span>
                            <br>
                            <span class="apple fs-18">creativity around the world. So sign up for free, or don’t. Either</span>
                            <br>
                            <span class="apple fs-18">way, you’ve got access to over a million photos under the</span>
                            <br>
                            <span class="apple fs-18">Unsplash license—which makes them free to do-whatever-you-want with.</span>
                            <br>
                            <button class="btn btn-dark m-t-30">Learn more about Splash License</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="m-t-90">
            <hr>
            <div class="row">
                <div class="col">
                    <a href="/">
                        <img class="" width="30" height="30" src="{{ asset('images/XSplash.png') }}"/>
                    </a>
                    <span class="f-blk m-l-10">Make Something Awesome</span>
                </div>
                <div class="col">
                    <p class="text-right f-blk">
                        <a data-toggle="modal" data-target="#privacypolicy" href="#"><span class="f-blk">Privacy Policy</span></a>
                        <a data-toggle="modal" data-target="#terms" href="#"><span class="m-l-15 f-blk">Terms</span></a>
                        <a data-toggle="modal" data-target="#security" href="#"><span class="m-l-15 f-blk">Security</span></a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Modal -->
        @include('Page.terms')
        <!-- End Modal -->
        
    </div>
@endsection