@extends('layouts.app')
@section('content')
    @include('MasterPage.header')

    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show text-center bdr-20 m-t-50" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div id="alert"></div>
        <h2 class="josefin f-b text-center">Post</h2>
        <p class="text-center">Make Something Awesome</p>
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="modal-body">
                <div class="form-group">
                    <input type="file" name="photo" id="file" class="input-file" onchange="tampilkanPreview(this,'preview')">
                    <label for="file" class="btn btn-tertiary js-labelFile">
                        <i class="icon fa fa-check"></i>
                        <span class="js-fileName">Change Photo Profil</span>
                    </label>
                    <br>
                    <img width="300" height="300" class="rounded img-fluid" id="preview" style="display: block; margin: auto;" alt=""/>
                </div>
            </div>
            <button type="submit" id="btn-add" class="btn btn-outline-dark justify">Publis to Splash</button>
        </form>
    </div>
@endsection
@section('script')
<script type="text/javascript">

    // file name preview
    (function() {
        'use strict';
        $('.input-file').each(function() {
            var $input = $(this),
                $label = $input.next('.js-labelFile'),
                labelVal = $label.html();
            
            $input.on('change', function(element) {
                var fileName = '';
                if (element.target.value) fileName = element.target.value.split('\\').pop();
                fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label.removeClass('has-file').html(labelVal);
            });
        });
    })();

    // image preview
    function tampilkanPreview(gambar,idpreview){
        // membuat objek gambar
        var gb = gambar.files;
        // loop untuk merender gambar
        for (var i = 0; i < gb.length; i++){
            // bikin variabel
            var gbPreview = gb[i];
            var imageType = /image.*/;
            var preview=document.getElementById(idpreview);
            var reader = new FileReader();
            if (gbPreview.type.match(imageType)) {
                // jika tipe data sesuai
                preview.file = gbPreview;
                reader.onload = (function(element) {
                    return function(e) {
                        element.src = e.target.result;
                    };
                })(preview);
                // membaca data URL gambar
                reader.readAsDataURL(gbPreview);
            }else{
                Swal.fire(
                    'File type cannot Be',
                    'Must be a picture',
                    'error'
                )
            }
        }
    }
</script>
@endsection