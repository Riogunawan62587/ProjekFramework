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
<section class="section section_header" data-parallax="scroll" data-image-src="assets/img/19.jpg">
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
					Online table reservation
				</h2>

				<!-- Subheading -->
				<p class="section__subheading text-center">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam illo praesentium sequi in cum, beatae
					maiores quae qui.
				</p>

			</div>
		</div> <!-- / .row -->
		<div class="row justify-content-lg-center  section_reservation__row">
			<div class="col-lg-8">

				<!-- Form -->
				<form class="section_reservation__form" id="reservation__form">
					<div class="row">
						<div class="col-md-6">

							<div class="form-group">
								<label class="sr-only" for="reservation__form__name">Full name</label>
								<input type="text" class="form-control" id="reservation__form__name" name="reservation__form__name"
									placeholder="Full name">
								<div class="invalid-feedback"></div>
							</div>
							<div class="form-group">
								<label class="sr-only" for="reservation__form__phone">Phone number</label>
								<input type="tel" class="form-control" id="reservation__form__phone" name="reservation__form__phone"
									placeholder="Phone number">
								<div class="invalid-feedback"></div>
							</div>
							<div class="form-group">
								<label class="sr-only" for="reservation__form__email">E-mail address</label>
								<input type="email" class="form-control" id="reservation__form__email" name="reservation__form__email"
									placeholder="E-mail address">
								<div class="invalid-feedback"></div>
							</div>

						</div>
						<div class="col-md-6">

							<div class="form-group">
								<label class="sr-only" for="reservation__form__people">People</label>
								<select class="form-control" id="reservation__form__people" name="reservation__form__people">
									<option value="1">1 person</option>
									<option value="2" selected="">2 persons</option>
									<option value="3">3 persons</option>
									<option value="4">4 persons</option>
									<option value="5">5 persons</option>
								</select>
								<div class="invalid-feedback"></div>
							</div>
							<div class="form-group">
								<label class="sr-only" for="reservation__form__date">Date</label>
								<input type="date" class="form-control" id="reservation__form__date" name="reservation__form__date"
									value="2016-12-31">
								<div class="invalid-feedback"></div>
							</div>
							<div class="form-group">
								<label class="sr-only" for="reservation__form__time">Time</label>
								<input type="time" class="form-control" id="reservation__form__time" name="reservation__form__time"
									value="18:00">
								<div class="invalid-feedback"></div>
							</div>

						</div>
						<div class="col">

							<div class="text-center">
								<button type="submit" class="btn btn-primary">
									Reserve a table
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
					or call us:
				</p>
				<p class="section_phone__number text-center">
					<a href="tel:+19876543210">+1 987 654 3210</a>
				</p>

			</div>
		</div> <!-- / .row -->
	</div> <!-- / .container -->
</section>

<!-- MAP
	================================================== -->
<section class="section section_map">
	<div class="section_map__map" data-lat="40.7590403" data-lng="-74.0392713" data-zoom="12"
		data-info="<h4 class='section_map__map__heading text-center'>Touche restaurant</h4><p class='section_map__map__content text-center text-muted'>1234 Altschul, New York, NY 10027-0000<br>+1 987 654 3210</p>">
	</div>
</section>

@endsection