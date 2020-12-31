@extends('layouts.master')

@section('content')

<!-- NAVBAR
	================================================== -->
<nav class="navbar navbar-light navbar-expand-lg fixed-top">
	<div class="container">

		<!-- Navbar: Brand -->
		<a class="navbar-brand navbar-brand_2 d-lg-none" href="index.html">Touché</a>

		<!-- Navbar: Toggler -->
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
			data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
			aria-label="Toggle navigation">
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

<!-- HEADER
	================================================== -->
<section class="section section_header" data-parallax="scroll" data-image-src="assets/img/36.jpg">
	<div class="container">
		<div class="row">
			<div class="col">

				<!-- Heading -->
				<h1 class="section__heading section_header__heading text-center">
					Reservasi Saya
				</h1>

			</div>
		</div> <!-- / .row -->
	</div> <!-- / .container -->
</section>

<!-- INFO
	================================================== -->
<section class="section section_info section_info_opposite">
	<div class="container">
		<div class="row">
			<div class="col">

				<!-- Heading -->
				<h2 class="section__heading text-center">
					Daftar & Riwayat Pesanan Saya
				</h2>

				<!-- Subheading -->
				<p class="section__subheading text-center">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia obcaecati sit odio velit culpa aspernatur
					consectetur natus quidem minima veritatis.
				</p>

			</div>
		</div> <!-- / .row -->
		<div class="row align-items-justify">
			<div class="col-md-6 order-md-3">

				<div class="section_info__img">
					<img src="assets/img/34.jpg" alt="...">
				</div>

			</div>
			<div class="col-md-1 order-md-2"></div>
			<div class="col-md-5 order-md-1">

				<div class="section_info__body">
					<p class="lead text-heading">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident sequi ratione, accusamus quo mollitia
						architecto, explicabo obcaecati.
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum enim saepe aperiam eius, quam blanditiis
						necessitatibus dolorem dignissimos pariatur quas velit nihil tempora, libero unde molestiae! Illum,
						inventore. Iusto, autem!
					</p>
					<br>
					<p>
						<a href="about-us.html#" class="btn btn-primary">
							Contact Us
						</a>
					</p>
				</div>

			</div>
		</div> <!-- / .row -->
	</div> <!-- / .container -->
</section>

<!-- QUOTE
	================================================== -->
<section class="section section_quote section_gray">
	<div class="container section_quote__container">
		<div class="row">
			<div class="col col-md-8 ml-md-auto mr-md-auto">

				<!-- Blockquote -->
				<blockquote class="section_quote__blockquote">
					<p class="text-center">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae ab nobis cupiditate odit repudiandae
						maiores in et autem voluptate cum.
					</p>
					<footer class="text-center">
						George Bernard Shaw
					</footer>
				</blockquote>

			</div>
		</div> <!-- / .row -->
	</div> <!-- / .container -->
</section>

@endsection