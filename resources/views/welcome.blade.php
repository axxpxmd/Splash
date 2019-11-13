@extends('layouts.app')
@section('content')
    <!-- Header -->
    @include('MasterPage.header2')
    <!-- End Header -->

    <div>
        <img width="100%" height="593" class="m-b-40" src="{{ asset('images/bg04.jpg') }}" alt="">
    </div>

    <div class="col-md-10 m-auto">
        <div class="text-center">
            @foreach ($photo as $i)
                <img width="415" height="415" src="{{ asset('post/'. $i->photo) }}" class=" m-r-20 m-t-20" alt="...">
            @endforeach
        </div>
    </div>
@endsection