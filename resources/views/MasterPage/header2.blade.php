{{-- Header: Login, Register, Email, Reset --}}

<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand pacifico fs-20 m-r-60 m-t-4" href="/">
        <img src="{{ asset('images/icon.png') }}" class="d-inline-block align-top" width="35" height="35" alt="">
        <span style="border-left: 1px black solid; height: 28px; margin-bottom: -7%" class="navbar-brand m-r-13 m-l-8"></span>Splash
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item m-t-4">
                    <a class="nav-link navbar-brand m-r-15 josefin" href="/">Home</a>
                </li>
                <li class="nav-item m-t-4">
                    <a class="nav-link navbar-brand m-r-15 josefin" href="/login">Explore</a>
                </li>
                <li class="nav-item m-t-4">
                    <a class="nav-link navbar-brand m-r-20 josefin" href="/about">About</a>
                </li>
                <a class="m-r-20 m-t-4" href="/login">
                    <button type="button" class="btn btn-outline-dark josefin bdr-20">Submit a Photo</button>
                </a>
                <a class="navbar-brand josefin m-t-4" href="/login">
                    <span style="border-left: 1px black solid" class="m-r-20"></span>Login
                </a>
                <a href="/register">
                    <button type="button" class="btn btn-success m-t-4 josefin bdr-20">Join free</button>
                </a>
            </ul>
        </form>
    </div>
</nav>
