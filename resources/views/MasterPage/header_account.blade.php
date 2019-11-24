<div class="shadow">
    <div class="col-md-8 container justify ">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand pacifico" href="/home">
                <img src="{{ asset('images/icon.png') }}" class="m-b-5" width="30" height="30" alt="">
                <span style="border-left: 1px black solid; height: 28px; margin-bottom: -7%" class="navbar-brand m-r-13 m-l-8"></span>Splash
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                </ul>
                <div class="form-inline my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item m-t-4">
                            <a class="nav-link navbar-brand m-r-15 josefin" href="/home">Home</a>
                        </li>
                        <li class="nav-item m-t-4">
                            <a class="nav-link navbar-brand m-r-20 josefin" href="#">Explore</a>
                        </li>
                        <h6 class="navbar-brand m-t-4 josefin"><span style="border-left: 1px black solid" class="m-r-20"></span>Hello... {{ Auth::user()->name }} </h6>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
