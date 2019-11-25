@extends('layouts.app')
@section('content')

<!-- Header -->
@include('MasterPage.header1')

<div class="col-md-4 justify container" style="margin-top: 7%">
    <p class="f-b fs-16 m-l-10" style="margin-bottom: -0.5%">Suggested</p>
    <div class="shadow m-t-5 no-b bdr-20">
        <div class="card-body">
            @foreach ($users as $i)
                <div class="m-b-20">
                    <a href="" style="text-decoration: none">
                        <img src="{{ asset('ava/'. $i->photo) }}" class="rounded-circle" width="45" height="45" alt="">
                        <span class="text-black f-b m-l-8">{{ $i->name }}</span>
                    </a>
                    <a href=""><button class="btn btn-outline-success float-right">Follow</button></a>
                    <br>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
