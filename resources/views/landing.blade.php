@extends('layouts.master')

@section('content')

<!-- NAVBAR
	================================================== -->
<nav class="navbar navbar-light navbar-expand-lg fixed-top">
  <div class="container">

    <!-- Navbar: Brand -->
    <a class="navbar-brand d-lg-none" href="{{route('home.index')}}">Nusantara</a>

    <!-- Navbar: Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar: Collapse -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

    </div> <!-- / .navbar-collapse -->

  </div> <!-- / .container -->
</nav> <!-- / .navbar -->

<!-- WELCOME
	================================================== -->
<section class="section section_welcome" data-parallax="scroll" data-image-src="assets/img/15.jpg">

  <!-- Content -->
  <div class="section_welcome__main">
    <div class="container">
      <div class="row align-items-center">
        <div class="col">

          <!-- Heading -->
          <h2 class="section__preheading section_welcome__preheading text-center text-muted">
            <span class="text-primary">Matteé Restaurant
          </h2>
          <h1 class="section__heading section_welcome__heading text-center">
            Nusantara
          </h1>
          <p class="section__subheading section_welcome__subheading text-center text-muted">
            Restoran cita rasa Nusantara dengan berbagai macam pilihan makanan asli indonesia yang sudah dikenal di
            berbagai tradisi. Hadirkan kehangatan keluarga dalam setiap makanan!
          </p>

          <!-- Button -->
          <div class="text-center">
            @if (Auth::check() && Auth::user()->role == 'Admin')
            <a href="{{url('/admin/dashboard')}}" class="btn btn-primary text-white">
              Kembali ke Dashboard
            </a>
            @elseif (Auth::check() && Auth::user()->role == 'Pengguna')
            <a href="{{route('home.index')}}" class="btn btn-primary text-white">
              Kembali ke Dashboard
            </a>
            @else
            <a href="#section_reservation" class="btn btn-primary text-white">
              Login Sekarang
            </a>
            @endif
          </div>
        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </div>

  <!-- Footer -->
  <div class="section_welcome__footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md">

          <!-- Address -->
          <div class="section_welcome__footer__address text-center text-lg-right">
            <i class="fas fa-map-marker-alt"></i>Jl. Gajah Mada No. 267, Jember, Jawa Timur
          </div>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </div>

</section>

<!-- DISCOVER
	================================================== -->
<section class="section section_discover section_no-padding_bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-2 align-self-start">

        <!-- Description -->
        <p class="section_discover__description">
          Food for the body is not enough. There must be food for the soul.
          <b>Dorothy Day-</b>
        </p>

      </div>
      <div class="col-md-4 align-self-start">

        <!-- Image -->
        <div class="section_discover__img">
          <img src="assets/img/2.jpg" class="img-fluid" alt="...">
        </div>

      </div>
      <div class="col-md-6 align-self-center">

        <!-- Content -->
        <h2><em>Ragam Kuliner Nusantara</em></h2>
        <p>
          Tersedia berbagai kuliner nusantara yang tentunya dibuat oleh juru masak profesional dengan cita rasa khas
          yang tiada tara serta pas dengan selera orang
          Indonesia.
        </p>

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>

<!-- DISCOVER
	================================================== -->
<section class="section section_discover">
  <div class="container">
    <div class="row">
      <div class="col-md-2 order-md-2 align-self-end">

        <!-- Description -->
        <p class="section_discover__description">
          One should eat to live, not live to eat.
          <b>Moliere-</b>
        </p>

      </div>
      <div class="col-md-4 order-md-3 align-self-start">

        <!-- Image -->
        <div class="section_discover__img alt">
          <img src="assets/img/7.jpg" class="img-fluid" alt="...">
        </div>

      </div>
      <div class="col-md-6 order-md-1 align-self-center">

        <!-- Content -->
        <h2><em>Makanan Adalah Kebutuhan</em></h2>
        <p>
          Penuhi nutrisi tubuh anda dengan kalori yang cukup, vitamin, protein hingga berbagai gizi yang lain. Jangan
          biarkan tubuh anda
          kekurangan itu semua agar tubuh selalu vit dimanapun dan kapanpun anda berada.
        </p>

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>

@if (!Auth::check())
<!-- LOGIN
	================================================== -->
<section class="section section_reservation section_gray" id="section_reservation">
  <div class="container">
    <div class="row">
      <div class="col">

        <!-- Heading -->
        <h2 class="section__heading text-center">
          Login Disini
        </h2>

        <!-- Subheading -->
        <p class="section__subheading text-center">
          Login diperlukan untuk pemesanan untuk alasan keamanan dan pemesanan di website restoran kami
        </p>

      </div>
    </div> <!-- / .row -->
    <div class="row justify-content-lg-center  section_reservation__row">
      <div class="col-lg-8">

        <!-- Form -->
        <form method="post" action="{{ route('login') }}">
          @csrf
          <div class="row">

            <div class="col-md-12">
              <div class="form-group">
                <label class="sr-only" for="email">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                  placeholder="Email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-group">
                <label class="sr-only" for="password">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                  name="password" placeholder="Password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="col">
              <div class="text-right">
                <a href="{{ route('register') }}" class="btn btn-primary">Daftar</a>
              </div>
            </div>

            <div class="col">
              <div class="form-group">
                <div class="text-left">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                  </button>
                </div>
              </div>
            </div>

          </div> <!-- / .row -->
        </form>

        <div class="row justify-content-center text-center">
          <div class="col">
            <p><b>Admin(Halaman Admin) :</b></p>
            <p><b>Email</b> = admin@gmail.com</p>
            <p><b>Password</b> = admin123</p>
          </div>
          <div class="col">
            <p><b>Pengguna(Halaman Pengguna) :</b></p>
            <p><b>Email</b> = riogunawan@gmail.com</p>
            <p><b>Password</b> = qweqweqwe</p>
          </div>
        </div>

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>
@endif

<!-- TESTIMONIALS
	================================================== -->
<section class="section section_testimonials section_border_bottom">
  <div class="container">
    <div class="row">
      <div class="col">

        <!-- Heading -->
        <h2 class="section__heading text-center">
          Apa kata mereka? </h2>

        <!-- Subheading -->
        <p class="section__subheading text-center">
          Testimonial pelanggan tentang retoran kami </p>

      </div>
    </div> <!-- / .row -->
    <div class="row">
      <div class="col">
        <div class="section_testimonials__carousel">
          <div class="section_testimonials__carousel__item text-center text-md-left">
            <div class="row align-items-center">
              <div class="col-md-3 order-md-3">

                <!-- Photo -->
                <div class="section_testimonials__photo">
                  <img src="assets/img/Rio.jpg" class="img-fluid" alt="..." style="width: 800px;height: 250px">
                </div>

              </div>
              <div class="col-md-7 order-md-2">

                <!-- Blockquote -->
                <blockquote class="section_testimonials__blockquote mx-auto">
                  <p>
                    Restoran dengan pilihan menu yang menarik, beragam, dan juga memiliki rasa yang lezat, gurih, dan
                    tentunya mengenyangkan. Harganya juga terjangkau, jadi tidak perlu khawatir akan itu. Jadi tunggu
                    apalagi? Segera pesan sekarang juga.
                  </p>
                  <footer class="text-muted">
                    Rio Gunawan Pratama M
                  </footer>
                </blockquote>

              </div>
              <div class="col-md-1 order-md-1"></div>
            </div> <!-- / .row -->
          </div>
          <div class="section_testimonials__carousel__item text-center text-md-left">
            <div class="row align-items-center">
              <div class="col-md-3 order-md-3">

                <!-- Photo -->
                <div class="section_testimonials__photo">
                  <img src="assets/img/Opank.jpg" class="img-fluid" alt="...">
                </div>

              </div>
              <div class="col-md-7 order-md-2">

                <!-- Blockquote -->
                <blockquote class="section_testimonials__blockquote mx-auto">
                  <p>
                    Harganya juga terjangkau, jadi tidak perlu khawatir akan itu. Jadi tunggu
                    apalagi? Segera pesan sekarang juga.
                  </p>
                  <footer class="text-muted">
                    Muhammad Naufal Hafiyyan
                  </footer>
                </blockquote>

              </div>
              <div class="col-md-1 order-md-1"></div>
            </div> <!-- / .row -->
          </div>
          <div class="section_testimonials__carousel__item text-center text-md-left">
            <div class="row align-items-center">
              <div class="col-md-3 order-md-3">

                <!-- Photo -->
                <div class="section_testimonials__photo">
                  <img src="assets/img/Dicky.jpg" class="img-fluid" alt="...">
                </div>

              </div>
              <div class="col-md-7 order-md-2">

                <!-- Blockquote -->
                <blockquote class="section_testimonials__blockquote mx-auto">
                  <p>
                    Restoran dengan pilihan menu yang menarik, beragam, dan juga memiliki rasa yang lezat, gurih, dan
                    tentunya mengenyangkan.
                  </p>
                  <footer class="text-muted">
                    Dicky Fattah Satria Dwi M
                  </footer>
                </blockquote>

              </div>
              <div class="col-md-1 order-md-1"></div>
            </div> <!-- / .row -->
          </div>
        </div> <!-- / .carousel -->
      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>

@endsection