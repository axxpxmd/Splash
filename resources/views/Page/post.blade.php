<div class="modal fade bd-example-modal-xl" id="publish" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content bdr-10">
            <div class="modal-header">
                <h5 class="modal-title josefin" id="exampleModalCenterTitle">Select photos for publishing</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

                  
            <div class="alert alert-dismissible" id="message" data-target="#exampleModal" role="alert">

            </div>
            <form method="post" id="upload_form" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <input type="file" name="photo" id="file" class="input-file" onchange="tampilkanPreview(this,'preview')">
                        <label for="file" class="btn btn-tertiary js-labelFile">
                            <i class="icon fa fa-check"></i>
                            <span class="js-fileName">Browse a image</span>
                        </label>
                        <br>
                        <img width="300" he class="rounded img-fluid" id="preview" style="display: block; margin: auto;" alt=""/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark josefin" data-dismiss="modal">Cancel</button>
                    <input type="submit" name="upload" id="upload" class="btn btn-dark josefin"  value="Publish to Splash">
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">

    // Ajax Store Image
     $(document).ready(function () {
        $('#upload_form').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: "{{ route('publish.store') }}",
                method: "POST",
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    $('#message').css('display', 'block');
                    $('#message').html(data.message);
                    $('#message').addClass(data.class_name);
                }
            })
        });
    });

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