<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html"><img src="{{ asset('user/assets/img/logo.png') }}" alt=""></a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{ route('index') }}">HOME</a></li>
          <li><a class="nav-link scrollto" href="{{ route('user.dashboard.show') }}">DASHBOARD</a></li>
          <li><a class="nav-link scrollto" href="contact.html">CONTACT US</a></li>
          <li><span><a class="btn main-btn" href="{{ route('user.login') }}">LOGIN</a></span></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>