@extends('layouts.app')
@section('content')

    <!-- Header -->
    @include('MasterPage.header1')

    <!-- Modal Post -->
    @include('Page.post')

    {{-- @foreach ($postDetail as $i)
        <img src="{{ asset('post/'. $i->photo) }}" class="" width="400" alt="...">
    @endforeach --}}

    <div class="col-md-10 justify-content-center row m-t-125">
        @foreach ($postDetail as $i)
            <img src="{{ asset('post/'. $i->photo) }}" class="" width="450" alt="...">
        @endforeach
        <div class="card">
            
        </div>
    </div>

@endsection
@section('script')
@endsection
