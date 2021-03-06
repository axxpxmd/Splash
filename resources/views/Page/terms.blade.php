<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('images/XSplash.png') }}" type="image/x-icon">
    <title>Splash</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <!-- Terms -->
    <div class="modal fade" id="terms" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bdr-10">
                <div class="modal-header">
                    <h5 class="modal-title f-b" id="exampleModalCenterTitle">Terms & Conditions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Terms
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Agree</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Privacy Policy -->
    <div class="modal fade bd-example-modal-lg" id="privacypolicy" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content bdr-10">
                <div class="modal-header">
                    <h5 class="modal-title f-b" id="exampleModalCenterTitle">Privacy Policy</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="apple ">Unsplash Inc. and its affiliates and subsidiaries (“Unsplash”, “we” or “us”) are committed to protecting your privacy and safeguarding your personal information. The purpose of this privacy policy (the “Privacy Policy”) is to inform you about our privacy practices, including how we collect, use and disclose your personal information</p>
                    <p class="apple">This Privacy Policy applies to our website, mobile applications and related services (collectively, the “Unsplash Services”). By visiting, accessing, or using the Unsplash Services, you consent to the policies and practices of this Privacy Policy so please read them carefully. If any policies or practices of this Privacy Policy are unacceptable to you, please do not visit, access, or use the Unsplash Services.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Agree</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Security -->
    <div class="modal fade" id="security" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bdr-10">
                <div class="modal-header">
                    <h5 class="modal-title f-b" id="exampleModalCenterTitle">Security</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Security
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Agree</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


