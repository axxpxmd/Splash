@extends('layouts.app')
@section('content')
    <!-- Header -->
    @include('MasterPage.header')
    <!-- End Header -->

    <div class="container m-t-60">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show text-center bdr-20" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="row">
            <div class="col-md-4">
                <p class="f-b fs-20">Account Setting</p>
                <a class="text-black" href="{{ route('profil') }}"><p class="m-t-30"><u>Profil</u></p></a>
                <p>Edit Profile</p>
                <a class="text-black" href="{{ route('password.index') }}"><p><u>Change Password</u></p></a>
                <a class="text-black" href=""><p><u>Delete Account</u></p></a>
            </div>
            <div class="col-md-8">
                <p class="f-b fs-20">Edit Profile</p>
                <form action="{{ route('account.updateInfo', Auth::user()->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input type="hidden" name="id" value="{{ Auth::user()->id }}" id="id" >
                    <div class="row">
                        <a href="" class="m-auto" data-toggle="modal" data-target="#updateAva">
                            @foreach ($photo as $i)
                                @if ($i->photo == !'')
                                    <img class="rounded-circle" width="150" height="150" src="{{ asset('ava/'. $i->photo) }}" alt="...">
                                @else
                                    <img class="rounded-circle justify-content-center" width="150" height="150" src="{{ asset('images/user1.png') }}" alt="...">    
                                @endif
                            @endforeach
                        </a>

                        <div class="form-group col-md-8">
                            <label class="f-b">Name</label>
                            <input type="text" class="input form-control m-b-20 @error('name') is-invalid @enderror" value="{{ Auth::user()->name }}"  name="name" id="name"  placeholder="Name" required>
                            
                            <label class="f-b">Email address</label>
                            <input type="email" class="input form-control @error('email') is-invalid @enderror"  value="{{ Auth::user()->email }}" name="email" id="email"  placeholder="E-Mail" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>E-mail has been taken!</strong>
                                </span>
                            @endif
                        </div>
                         
                        <div class="form-group col-md-12 m-t-20">
                            <label class="f-b">Username</label>&nbsp;&nbsp;<span class="f-blk">(only letters, numbers, and underscores)</span>
                            <input type="text" class="input form-control @error('username') is-invalid @enderror" name="username" id="username" value="{{ Auth::user()->username }}" required >
                            @if ($errors->has('username'))
                            <span class="invalid-feedback" role="alert">
                                    <strong>Username has been taken!</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-md-12">
                            <label class="f-b">Twitter</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input bg-white input-group-text">@</div>
                                </div>
                                <input type="text" class="input form-control" name="twitter" value="{{ Auth::user()->twitter }}"  placeholder="example: asphmdx">
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label class="f-b">Instagram</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input bg-white input-group-text">@</div>
                                </div>
                                <input type="text" class="input form-control" name="instagram"   value="{{ Auth::user()->instagram }}" placeholder="example: asphmdx">
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label class="f-b">Bio</label>
                            <textarea type="text" style="height: 130px" class="input form-control" name="bio" id="bio">{{ Auth::user()->bio }}</textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <button id="myButton" data-loading-text="Loading..." type="submit" value="Update" class="btn-block btn btn-dark">Update Account</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <hr>

        <!-- Footer -->
        <div class="container">
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
        <!-- End Footer -->

        <!-- Modal -->
        @include('Page.terms')
        <!-- End Modal -->

        <!-- Modal Update Ava -->
        <div class="modal fade" id="updateAva" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content bdr-10">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Update Avatar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <br>
                    
                    <div class="m-auto">
                        @foreach ($photo as $i)
                            @if ($i->photo == !'')
                                <img class="rounded-circle m-b-10" width="100" height="100" src="{{ asset('ava/'. $i->photo) }}" alt="...">
                            @else  
                            @endif
                        @endforeach
                    </div>
                        @foreach ($photo as $i)
                            @if ($i->photo == !'')
                                <form class="m-auto" action="{{ route('account.deleteAva', Auth::user()->id) }}" method="POST">
                                    <input type="hidden" name="id" value="{{ Auth::user()->id }}" id="id" >
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <button type="submit" class="btn btn-outline-danger">Delete Photo Profil</button>
                                </form>
                            @else
                            @endif
                        @endforeach
                    <form action="{{ route('account.updateAva', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}" id="id" >
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
    
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-outline-dark">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Modal -->
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