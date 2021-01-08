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
					<a class="nav-link" href="{{route('reservasi.my_reservation')}}">Reservasi Saya</a>
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
					Daftar Menu
				</h1>
				<p class="text-center text-white">Untuk Menu Logout Silahkan Klik "Nusantara" Di Atas</p>

			</div>
		</div> <!-- / .row -->
	</div> <!-- / .container -->
</section>

<!-- MENU
	================================================== -->
<section class="section section_menu section_border_bottom">
	<div class="container">
		<div class="row">
			<div class="col">

				<!-- Heading -->
				<h2 class="section__heading text-center">
					Pilih kategori makanan & minuman anda
				</h2>
				<p class="section__subheading text-center">
					Tersedia berbagai macam makanan yang pastinya menggugah selera makan anda dan juga berbgai macam minuman
					menyegarkan dari seluruh bagian nusantara.
				</p>

			</div>
		</div> <!-- / .row -->
		<div class="row">
			<div class="col">

				<!-- Navigation -->
				<nav class="section_menu__nav">
					<ul>
						<li class="active">
							<a href="#menu_images" data-filter=".mains">Mains</a>
						</li>
						<li>
							<a href="#menu_images" data-filter=".lunch">Lunch</a>
						</li>
						<li>
							<a href="#menu_images" data-filter=".dinner">Dinner</a>
						</li>
						<li>
							<a href="#menu_images" data-filter=".drinks">Drinks</a>
						</li>
					</ul>
				</nav>

			</div>
		</div>
		<div class="row section_menu__grid" id="menu_images">

			@foreach ($daftar_menu1 as $daftar_mains)
			<div class="col-md-6 section_menu__grid__item mains">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/{{$daftar_mains->gambar}}" alt="...">
							</div>
						</div>
						<div class="col-6">
							<h4>{{ $daftar_mains->nama }}</h4>
							<p>
								{{ $daftar_mains->deskripsi }}
							</p>
						</div>
						<div class="col-3">
							<div class="section_menu__item__price text-center mt-2">
								<h4>Rp. {{number_format($daftar_mains->harga, 2,",",".") }}</h4>
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			@endforeach

			@foreach ($daftar_menu2 as $daftar_lunch)
			<div class="col-md-6 section_menu__grid__item lunch">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/{{$daftar_lunch->gambar}}" alt="...">
							</div>
						</div>
						<div class="col-6">
							<h4>{{$daftar_lunch->nama}}</h4>
							<p>
								{{$daftar_lunch->deskripsi}}.
							</p>
						</div>
						<div class="col-3">
							<div class="section_menu__item__price text-center mt-2">
								<h4> Rp. {{number_format($daftar_lunch->harga, 2,",",".")}} </h4>
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			@endforeach

			@foreach ($daftar_menu3 as $daftar_dinner)
			<div class="col-md-6 section_menu__grid__item dinner">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/{{$daftar_dinner->gambar}}" alt="...">
							</div>
						</div>
						<div class="col-6">
							<h4>{{$daftar_dinner->nama}}</h4>
							<p>
								{{$daftar_dinner->deskripsi}}.
							</p>
						</div>
						<div class="col-3">
							<div class="section_menu__item__price text-center mt-2">
								<h4> Rp. {{number_format($daftar_dinner->harga, 2,",",".")}} </h4>
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			@endforeach

			@foreach ($daftar_menu4 as $daftar_drinks)
			<div class="col-md-6 section_menu__grid__item drinks">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/{{$daftar_drinks->gambar}}" alt="...">
							</div>
						</div>
						<div class="col-6">
							<h4>{{$daftar_drinks->nama}}</h4>
							<p>
								{{$daftar_drinks->deskripsi}}.
							</p>
						</div>
						<div class="col-3">
							<div class="section_menu__item__price text-center mt-2">
								<h4> Rp. {{number_format($daftar_drinks->harga, 2,",",".")}} </h4>
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			@endforeach

		</div> <!-- / .row -->
	</div> <!-- / .container -->
</section>

<!-- DISHES
	================================================== -->
<section class="section section_dishes">

	<!-- Header -->
	<div class="container">
		<div class="row">
			<div class="col">

				<!-- Heading -->
				<h2 class="section__heading text-center">
					Menu favorit kami
				</h2>

				<!-- Subheading -->
				<p class="section__subheading text-center">
					Makanan dan minuman terlaris kami sepanjang masa!
				</p>

			</div>
		</div>
	</div>

	<!-- Carouse -->
	<div class="section_dishes__carousel">
		@foreach ($daftar_menu as $daftar)
		<div class="section_dishes__carousel__item">

			<!-- Image -->
			<img src="assets/img/{{$daftar->gambar}}" alt="..." class="section_dishes__carousel__item__img">

			<!-- Body -->
			<div class="section_dishes__carousel__item__body">
				<h5 class="section_dishes__carousel__item__body__heading mb-0">
					{{$daftar->nama}}
				</h5>
			</div>

		</div>
		@endforeach
	</div> <!-- / .section_dishes__carousel -->

</section>

@endsection