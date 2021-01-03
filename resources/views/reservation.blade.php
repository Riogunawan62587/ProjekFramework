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
<section class="section section_header" data-parallax="scroll" data-image-src="assets/img/35.jpg">
	<div class="container">
		<div class="row">
			<div class="col">

				<!-- Heading -->
				<h1 class="section__heading section_header__heading text-center">
					Reservasi
				</h1>

			</div>
		</div> <!-- / .row -->
	</div> <!-- / .container -->
</section>

<!-- RESERVATION
	================================================== -->
<section class="section section_reservation">
	<div class="container">
		<div class="row">
			<div class="col">

				<!-- Heading -->
				<h2 class="section__heading text-center">
					Pemesanan Meja
				</h2>

				<!-- Subheading -->
				<p class="section__subheading text-center">
					Mohon isi form berikut untuk mengkonfirmasi pemesanan anda.
				</p>

			</div>
		</div> <!-- / .row -->
		<div class="row justify-content-lg-center  section_reservation__row">
			<div class="col-lg-8">

				<!-- Form -->
				<form method="POST" action="{{route('reservasi.simpan')}}">
					@csrf
					<div class="row">
						<div class="col-md-6">

							<div class="form-group">
								<label class="sr-only" for="reservation__form__name">Nama Lengkap</label>
								<input type="text" class="form-control" id="reservation__form__name" name="reservation__form__name"
									value="{{Auth::user()->name}}" disabled>
								<div class="invalid-feedback"></div>
							</div>
							<div class="form-group">
								<label class="sr-only" for="reservation__form__phone">Nomor Telepon</label>
								<input type="tel" class="form-control" id="reservation__form__phone" name="reservation__form__phone"
									value="{{Auth::user()->nomor_telepon}}" disabled>
								<div class="invalid-feedback"></div>
							</div>
							<div class="form-group">
								<label class="sr-only" for="reservation__form__email">Alamat Email</label>
								<input type="email" class="form-control" id="reservation__form__email" name="reservation__form__email"
									value="{{Auth::user()->email}}" disabled>
								<div class="invalid-feedback"></div>
							</div>

						</div>
						<div class="col-md-6">

							<div class="form-group">
								<label class="sr-only" for="reservation__form__people">Jumlah Orang</label>
								<select class="form-control" id="reservation__form__people" name="jumlah_orang">
									<option value="1">1 orang</option>
									<option value="2">2 orang</option>
									<option value="3">3 orang</option>
									<option value="4">4 orang</option>
									<option value="5">5 orang</option>
									<option value="6">6 orang</option>
								</select>
								<div class="invalid-feedback"></div>
							</div>
							<div class="form-group">
								<label class="sr-only" for="reservation__form__date">Tanggal</label>
								<input type="date" class="form-control" id="reservation__form__date" name="tanggal" value="2016-12-31">
								<div class="invalid-feedback"></div>
							</div>
							<div class="form-group">
								<label class="sr-only" for="reservation__form__time">Jam</label>
								<select class="form-control" id="reservation__form__time" name="jam">
									<option value="10:00">10:00</option>
									<option value="11:00">11:00</option>
									<option value="12:00">12:00</option>
									<option value="13:00">13:00</option>
									<option value="14:00">14:00</option>
									<option value="15:00">15:00</option>
									<option value="16:00">16:00</option>
									<option value="17:00">17:00</option>
									<option value="18:00">18:00</option>
									<option value="19:00">19:00</option>
									<option value="20:00">20:00</option>
									<option value="21:00">21:00</option>
									<option value="22:00">22:00</option>
								</select>
								<div class="invalid-feedback"></div>
							</div>

						</div>
						<div class="col">

							<div class="text-center">
								<button type="submit" class="btn btn-primary">
									Pesan Sekarang
								</button>
							</div>

						</div>
					</div> <!-- / .row -->
				</form>

			</div>
		</div> <!-- / .row -->
	</div> <!-- / .container -->
</section>

<!-- PHONE
	================================================== -->
<section class="section section_phone section_no-padding_top">
	<div class="container">
		<div class="row justify-content-lg-center section_phone__row">
			<div class="col-lg-8">

				<p class="font-small text-center">
					atau hubungi kami di:
				</p>
				<p class="section_phone__number text-center" style="color: black">
					+62 888 123 4567
				</p>

			</div>
		</div> <!-- / .row -->
	</div> <!-- / .container -->
</section>

@endsection