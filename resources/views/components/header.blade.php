<nav class="navbar navbar-expand-lg navbar-dark bg-darkblue">
    <a class="navbar-brand" href="{{url('/')}}">
        <img src="{{asset("images/app-icon.png")}}" width="20" height="30" class="d-inline-block align-top" alt="">
            Covid-19 Tracker
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item {{Request::is("/") ? 'active' : 'non-active'}}">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item {{Request::is("gejala") ? 'active' : 'non-active'}}">
                <a class="nav-link" href="{{url('gejala')}}">Gejala</a>
            </li>
        </ul>
    </div>
    <div class="form-inline my-2 my-lg-0">
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                {{auth()->user()->username}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
  </nav>