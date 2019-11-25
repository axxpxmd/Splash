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
                <img src="{{ asset('images/spinner.gif') }}" width="50" alt="">
            </div>
            <br>
            <br>
            <p>Make Something Awesome</p>
        </div>
    </div>

    @include('MasterPage.header2')

    <!-- Content -->
    <div class="text-center">
        
    </div>
   
</body>
<!-- Script -->
<script>

                    
    // Script Pre Loader
    $(document).ready(function () {
        $(".preloader").fadeOut();
    })

</script>
<!-- End Script -->

</html>
