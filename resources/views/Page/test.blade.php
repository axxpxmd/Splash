<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

        <h2>Fade in Overlay</h2>
        <p>Hover over the image to see the effect.</p>
        
        <div class="container">
          <div class="overlay rounded-circle">
            <div class="text">Hello World</div>
          </div>
          <img src="{{ asset('images/boy.png') }}" class="rounded-circle" alt="Avatar">
        </div>
</body>
</html>
