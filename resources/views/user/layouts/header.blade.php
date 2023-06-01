<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="{{ route('index') }}"><img src="{{ asset('user/assets/img/logo.svg') }}"
                    alt=""></a></h1>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{ route('index') }}">HOME</a></li>
                @if (!empty(Auth::user()->id))
                <li><a class="nav-link scrollto" href="{{ route('user.dashboard.show') }}">DASHBOARD</a></li>
                @endif
                <li><a class="nav-link scrollto" href="{{ route('user.contact') }}">CONTACT US</a></li>
                @if (empty(Auth::user()->id) || Auth::user()->user_type == '1')
                    <li><span><a class="btn main-btn" href="{{ route('user.login') }}">LOGIN</a></span></li>
                @else

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                <li>    <button type="submit" class="btn">Logout</button> </li>
                </form>
                {{-- <a class="btn main-btn" href="{{ route('user.login') }}">LOGOUT</a></span></li> --}}
                    {{-- <li><a class="nav-link scrollto"
                            href="{{ route('user.dashboard.show') }}">{{ Auth::user()->name }}</a></li> --}}
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
