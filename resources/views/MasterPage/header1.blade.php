{{-- Home, --}}

<div class="fixed-top shadow">
    <div class="col-md-7 justify">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <a class="navbar-brand pacifico" style="margin-left: -2%" href="/home">
                <img src="{{ asset('images/icon.png') }}" class="m-b-5" width="30" height="30" alt="">
                <span style="border-left: 1px black solid; height: 28px; margin-bottom: -7%" class="navbar-brand m-r-13 m-l-8"></span>Splash
            </a>
            <!-- Button for Responsive -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#responsive">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="responsive">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                </ul>
                <div class="form-inline my-2 my-lg-0">
                    <ul class="navbar-nav">
                        <li class="nav-item m-t-4">
                            <a class="nav-link navbar-brand m-r-15 josefin" href="/home">Home</a>
                        </li>
                        <li class="nav-item m-t-4">
                            <a class="nav-link navbar-brand m-r-20 josefin" href="#">Explore</a>
                        </li>
                        <a class="m-r-20 m-t-4 josefin">
                            <button type="button" class="btn btn-outline-dark bdr-20" data-toggle="modal" data-target="#publish">Submit a Photo</button>
                        </a>
                        <h6 class="navbar-brand m-t-4 josefin"><span style="border-left: 1px black solid" class="m-r-20"></span>Hello... {{ Auth::user()->name }} </h6>
                        <div class="dropdown">
                            <a class="dropdown-toggle navbar-brand m-t-4" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if (Auth::user()->photo == !'')
                                    <img width="30px" height="30px" src="{{ asset('ava/' . Auth::user()->photo) }}" alt="..." class="rounded-circle">
                                @else
                                    <img width="30px" height="30px" src="{{ asset('images/profil.png') }}" alt="..." class="rounded-circle">
                                @endif
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('profil') }}">Profil</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Log Out
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<!-- Modal Post -->
@include('Page.post')
