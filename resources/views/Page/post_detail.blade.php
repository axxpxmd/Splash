@extends('layouts.app')
@section('content')
<!-- Header -->
@include('MasterPage.header')
<!-- End Header -->
<div class="container">
    @foreach ($postDetail as $i)
    <img width="298" height="300" class="image" src="{{ asset('post/'. $i->photo) }}" alt="">
    @endforeach
</div>
<div class="modal" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script type="text/javascript">
        jQuery(window).load(function(){
            jQuery('#myModal').modal('show').on('hide.bs.modal', function(e){
                e.preventDefault();
            });
        });
    </script>
@endsection
