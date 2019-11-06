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