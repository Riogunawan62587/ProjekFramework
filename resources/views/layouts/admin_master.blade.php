<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Nusantara Dashboard</title>
  <!-- Favicon -->
  <link rel="icon" href="{{ url('/assets/admin/assets/img/brand/favicon.png') }}" type="image/png">
  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="{{ url('/assets/admin/assets/libs/@fortawesome/fontawesome-pro/css/all.min.css') }}">
  <!-- Purpose CSS -->
  <link rel="stylesheet" href="{{ url('/assets/admin/assets/css/purpose.css') }}" id="stylesheet">

  @yield('head')
</head>

<body class="application application-offset">
  <!-- Application container -->
  <div class="container-fluid container-application">
    <!-- Sidenav -->
    <div class="sidenav" id="sidenav-main">
      <div class="sidenav-header d-flex align-items-center text-center">
        <h1 class="text-white">Nusantara</h1>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler sidenav-toggler-dark d-md-none" data-action="sidenav-unpin"
            data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- User mini profile -->
      <div class="sidenav-user d-flex flex-column align-items-center justify-content-between text-center">
        <!-- Avatar -->
        <div>
          <a href="#" class="avatar rounded-circle avatar-xl">
            <img src="/assets/img/user.png">
          </a>
          <div class="mt-4">
            <h5 class="mb-0 text-white">Selamat Datang,</h5>
            <span class="d-block text-sm text-white opacity-8 mb-3">{{ Auth::user()->name }}</span>
          </div>
        </div>
      </div>
      <!-- Application nav -->
      <div class="nav-application clearfix">
        <a href="{{ url('/admin/dashboard') }}" class="btn btn-square text-sm" id="dashboard_nav">
          <span class="btn-inner--icon d-block"><i class="far fa-home fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Dashboard</span>
        </a>
        <a href="{{ url('/admin/menu') }}" class="btn btn-square text-sm" id="menu_nav">
          <span class="btn-inner--icon d-block"><i class="far fa-project-diagram fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Daftar Menu</span>
        </a>
        <a href="{{ url('/admin/meja') }}" class="btn btn-square text-sm" id="meja_nav">
          <span class="btn-inner--icon d-block"><i class="far fa-tasks fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Daftar Meja</span>
        </a>
        <a href="{{ url('/admin/reservasi') }}" class="btn btn-square text-sm" id="reservasi_nav">
          <span class="btn-inner--icon d-block"><i class="far fa-columns fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Daftar Reservasi</span>
        </a>
        <a href="{{ url('/admin/pengguna') }}" class="btn btn-square text-sm" id="pengguna_nav">
          <span class="btn-inner--icon d-block"><i class="far fa-users-cog fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Daftar Pengguna</span>
        </a>
        <a href="{{ url('/admin/artikel') }}" class="btn btn-square text-sm" id="artikel_nav">
          <span class="btn-inner--icon d-block"><i class="far fa-newspaper fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Daftar Artikel</span>
        </a>
      </div>
    </div>

    <!-- Content -->
    <div class="main-content position-relative">
      <!-- Main nav -->
      <nav class="navbar navbar-main navbar-expand-lg navbar-dark bg-primary navbar-border" id="navbar-main">
        <div class="container-fluid">
          <!-- Brand + Toggler (for mobile devices) -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse"
            aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- User's navbar -->
          <div class="navbar-user d-lg-none ml-auto">
            <ul class="navbar-nav flex-row align-items-center">
              <li class="nav-item dropdown dropdown-animate">
                <a class="nav-link pr-lg-0" href="card-listing.html#" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-4-800x800.jpg">
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                  <h6 class="dropdown-header px-0">Hi, Heather!</h6>
                  @if (Auth::check() && Auth::user())
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="far fa-sign-out-alt"></i>
                    <span>Logout</span>
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                  @endif
                </div>
              </li>
            </ul>
          </div>

          <!-- Navbar nav -->
          <div class="collapse navbar-collapse navbar-collapse-fade" id="navbar-main-collapse">
            <!-- Right menu -->
            <ul class="navbar-nav ml-lg-auto align-items-center d-none d-lg-flex">
              <li class="nav-item dropdown dropdown-animate">
                <a class="nav-link pr-lg-0" href="card-listing.html#" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <div class="media media-pill align-items-center">
                    <span class="avatar rounded-circle">
                      <img alt="Image placeholder" src="/assets/img/user.png">
                    </span>
                    <div class="ml-2 d-none d-lg-block">
                      <span class="mb-0 text-sm  font-weight-bold">{{Auth()->user()->name}}</span>
                    </div>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                  <h6 class="dropdown-header px-0">Hi, {{Auth()->user()->name }}!</h6>
                  @if (Auth::check() && Auth::user())
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="far fa-sign-out-alt"></i>
                    <span>Logout</span>
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                  @endif
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Page content -->
      @yield('page_content')
    </div>
    <!-- Scripts -->
    <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
    <script src="{{ url('/assets/admin/assets/js/purpose.core.js') }}"></script>
    <!-- Page JS -->
    <script src="{{ url('/assets/admin/assets/libs/autosize/dist/autosize.min.js') }}"></script>
    <script src="{{ url('/assets/admin/assets/libs/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <!-- Purpose JS -->
    <script src="{{ url('/assets/admin/assets/js/purpose.js') }}"></script>
    <!-- Demo JS - remove it when starting your project -->
    <script src="{{ url('/assets/admin/assets/js/demo.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-104437451-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-104437451-1');
    </script>

    @yield('footer')
</body>

</html>
