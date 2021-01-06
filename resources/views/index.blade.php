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

			<!-- Navbar navigation: Left -->
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="{{route('menu.index')}}">Daftar Menu</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{route('reservasi.index')}}">Reservasi</a>
				</li>
			</ul>

			<!-- Brand name -->
			<a class="navbar-brand navbar-brand_2 d-none d-lg-flex ml-auto mr-auto" href="{{route('home.index')}}">
				Nusantara
			</a>

			<!-- Navbar navigation: Right -->
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="{{route('artikel.index')}}">Artikel</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{route('reservasi.my_reservation')}}">Reservasi Saya</a>
				</li>
			</ul>
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
						<a class="btn btn-primary text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
							Logout
						</a>
					</div>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
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