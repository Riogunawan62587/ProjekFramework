@extends('layouts.master')

@section('content')

<!-- NAVBAR
	================================================== -->
<nav class="navbar navbar-light navbar-expand-lg fixed-top">
	<div class="container">

		<!-- Navbar: Brand -->
		<a class="navbar-brand navbar-brand_2 d-lg-none" href="{{route('home.index')}}">Nusantara</a>

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
					<a class="nav-link" href="{{route('home.tentang_kami')}}">Tentang Kami</a>
				</li>
			</ul>

		</div> <!-- / .navbar-collapse -->

	</div> <!-- / .container -->
</nav> <!-- / .navbar -->

<!-- HEADER
	================================================== -->
<section class="section section_header" data-parallax="scroll" data-image-src="assets/img/33.jpg">
	<div class="container">
		<div class="row">
			<div class="col">

				<!-- Heading -->
				<h1 class="section__heading section_header__heading text-center">
					Artikel
				</h1>

			</div>
		</div> <!-- / .row -->
	</div> <!-- / .container -->
</section>

<!-- INFO
	================================================== -->
<section class="section section_info section_info_opposite section_no-padding_bottom">
	<div class="container">
		<div class="row">
			<div class="col">

				<!-- Heading -->
				<h2 class="section__heading text-center">
					Our latest news
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
					<img src="assets/img/35.jpg" alt="...">
				</div>

			</div>
			<div class="col-md-1 order-md-2"></div>
			<div class="col-md-5 order-md-1">

				<div class="section_info__body">
					<h3 class="section__preheading text-primary">
						<time datetime="2017-08-30">August 30, 2017</time>
					</h3>
					<h2 class="section__heading">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum voluptas, aut ea quae!
					</h2>
					<p class="section__subheading">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit accusamus corporis nam eveniet,
						saepe, ipsum nostrum fugit, iste commodi expedita totam optio velit excepturi nemo, repellat doloribus
						laudantium repudiandae labore!
					</p>
					<a href="news-and-events.html#" class="btn btn-primary">
						Read more...
					</a>
				</div>

			</div>
		</div> <!-- / .row -->
	</div> <!-- / .container -->
</section>

<!-- INFO
	================================================== -->
<section class="section section_info section_no-padding_top section_no-padding_bottom">
	<div class="container">
		<div class="row align-items-justify">
			<div class="col-md-6">

				<div class="section_info__img">
					<img src="assets/img/34.jpg" alt="...">
				</div>

			</div>
			<div class="col-md-1"></div>
			<div class="col-md-5">

				<div class="section_info__body">
					<h3 class="section__preheading text-primary">
						<time datetime="2017-08-29">August 29, 2017</time>
					</h3>
					<h2 class="section__heading">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum voluptas, aut ea quae!
					</h2>
					<p class="section__subheading">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit accusamus corporis nam eveniet,
						saepe, ipsum nostrum fugit, iste commodi expedita totam optio velit excepturi nemo, repellat doloribus
						laudantium repudiandae labore!
					</p>
					<a href="news-and-events.html#" class="btn btn-primary">
						Read more...
					</a>
				</div>

			</div>
		</div> <!-- / .row -->
	</div> <!-- / .container -->
</section>

<!-- NEWSLETTER
	================================================== -->
<section class="section section_gray section_newsletter">
	<div class="container">
		<div class="row">
			<div class="col">

				<!-- Heading -->
				<h2 class="section__heading section_newsletter__heading text-center">
					Kontak Kami
				</h2>
				<p class="section__subheading text-center">
					Kontak kami jika anda ingin menambahkan sebuah artikel kuliner yang anda butuhkan.
				</p>

			</div>
		</div> <!-- / .row -->
	</div> <!-- / .container -->
</section>

@endsection