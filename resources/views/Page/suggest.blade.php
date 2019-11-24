@extends('layouts.app')
@section('content')

    <!-- Header -->
    @include('MasterPage.header_home')

    <!-- Modal Post -->
    @include('Page.post')

    <divn class="col-md-4 justify container" style="margin-top: 7%">
        <p class="f-b fs-16 m-l-10" style="margin-bottom: -0.5%">Suggested</p>
        <div class="card m-t-5" style="border: none">
            <div class="card-body">
                @foreach ($users as $i)
                <div class="m-b-20">
                    <img src="{{ asset('ava/'. $i->photo) }}" class="rounded-circle" width="45" height="45" alt="">
                    <span class="text-black f-b m-l-8">{{ $i->name }}</span>
                    <a href=""><button class="btn btn-primary float-right">Follow</button></a>
                    <br>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
@section('script')
<script type="text/javascript">
    // 
</script>
@endsection


