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

    @yield('css')

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">

    <!-- JS -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Pre Loader -->
    <div class="preloader">
        <div class="loading">
            <div class="d-flex justify-content-center">
                <div class="spinner-border">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <br>
            <p>Please Wait</p>
        </div>
    </div>
    <!-- End Pre Loader -->

    <!-- Content -->
    <div>
        @yield('content')
    </div>
    <!-- End Content -->
</body>
<!-- Script -->
<script>
    // Script Pre Loader
    $(document).ready(function () {
        $(".preloader").fadeOut();
    })

    // Script button loading
    $('#myButton').on('click', function () {
        var $btn = $(this).button('loading')
        $btn.button('loading')
    })

</script>
@yield('script')
<!-- End Script -->

</html>
