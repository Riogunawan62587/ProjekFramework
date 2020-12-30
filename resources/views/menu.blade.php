@extends('layouts.master')

@section('content')

<!-- NAVBAR
	================================================== -->
<nav class="navbar navbar-light navbar-expand-lg fixed-top">
	<div class="container">

		<!-- Navbar: Brand -->
		<a class="navbar-brand navbar-brand_2 d-lg-none" href="{{route('home.index')}}">Touché</a>

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
<section class="section section_header" data-parallax="scroll" data-image-src="assets/img/11.jpg">
	<div class="container">
		<div class="row">
			<div class="col">

				<!-- Heading -->
				<h1 class="section__heading section_header__heading text-center">
					Daftar Menu
				</h1>

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
					Browse by categories
				</h2>
				<p class="section__subheading text-center">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit.
					Ratione numquam eos perferendis itaque hic unde, ad, laudantium minima.
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

			<div class="col-md-6 section_menu__grid__item mains">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/26.jpg" alt="...">
							</div>
						</div>
						<div class="col-7">
							<h4>Lorem ipsum dolor sit amet</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
							</p>
						</div>
						<div class="col-2">
							<div class="section_menu__item__price text-center">
								$15
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			<div class="col-md-6 section_menu__grid__item lunch">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/31.jpg" alt="...">
							</div>
						</div>
						<div class="col-7">
							<h4>Fusce id ante ut arcu</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
							</p>
						</div>
						<div class="col-2">
							<div class="section_menu__item__price text-center">
								$23
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			<div class="col-md-6 section_menu__grid__item dinner">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/27.jpg" alt="...">
							</div>
						</div>
						<div class="col-7">
							<h4>Fusce sed dolor eget tortor</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
							</p>
						</div>
						<div class="col-2">
							<div class="section_menu__item__price text-center">
								$16
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			<div class="col-md-6 section_menu__grid__item drinks">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/28.jpg" alt="...">
							</div>
						</div>
						<div class="col-7">
							<h4>Phasellus non elit in dolor</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
							</p>
						</div>
						<div class="col-2">
							<div class="section_menu__item__price text-center">
								$10
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			<div class="col-md-6 section_menu__grid__item drinks">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/29.jpg" alt="...">
							</div>
						</div>
						<div class="col-7">
							<h4>In vel odio eu massa semper</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
							</p>
						</div>
						<div class="col-2">
							<div class="section_menu__item__price text-center">
								$35
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			<div class="col-md-6 section_menu__grid__item dinner">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/28.jpg" alt="...">
							</div>
						</div>
						<div class="col-7">
							<h4>Morbi ac est consectetur</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
							</p>
						</div>
						<div class="col-2">
							<div class="section_menu__item__price text-center">
								$18
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			<div class="col-md-6 section_menu__grid__item lunch">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/30.jpg" alt="...">
							</div>
						</div>
						<div class="col-7">
							<h4>Lorem ipsum dolor sit amet</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
							</p>
						</div>
						<div class="col-2">
							<div class="section_menu__item__price text-center">
								$15
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			<div class="col-md-6 section_menu__grid__item mains">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/27.jpg" alt="...">
							</div>
						</div>
						<div class="col-7">
							<h4>Fusce id ante ut arcu</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
							</p>
						</div>
						<div class="col-2">
							<div class="section_menu__item__price text-center">
								$23
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			<div class="col-md-6 section_menu__grid__item mains">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/28.jpg" alt="...">
							</div>
						</div>
						<div class="col-7">
							<h4>Fusce sed dolor eget tortor</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
							</p>
						</div>
						<div class="col-2">
							<div class="section_menu__item__price text-center">
								$16
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			<div class="col-md-6 section_menu__grid__item lunch">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/29.jpg" alt="...">
							</div>
						</div>
						<div class="col-7">
							<h4>Phasellus non elit in dolor</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
							</p>
						</div>
						<div class="col-2">
							<div class="section_menu__item__price text-center">
								$10
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			<div class="col-md-6 section_menu__grid__item dinner">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/29.jpg" alt="...">
							</div>
						</div>
						<div class="col-7">
							<h4>In vel odio eu massa semper</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
							</p>
						</div>
						<div class="col-2">
							<div class="section_menu__item__price text-center">
								$35
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			<div class="col-md-6 section_menu__grid__item drinks">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/30.jpg" alt="...">
							</div>
						</div>
						<div class="col-7">
							<h4>Morbi ac est consectetur</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
							</p>
						</div>
						<div class="col-2">
							<div class="section_menu__item__price text-center">
								$18
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			<div class="col-md-6 section_menu__grid__item mains">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/29.jpg" alt="...">
							</div>
						</div>
						<div class="col-7">
							<h4>Lorem ipsum dolor sit amet</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
							</p>
						</div>
						<div class="col-2">
							<div class="section_menu__item__price text-center">
								$15
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			<div class="col-md-6 section_menu__grid__item lunch">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/28.jpg" alt="...">
							</div>
						</div>
						<div class="col-7">
							<h4>Fusce id ante ut arcu</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
							</p>
						</div>
						<div class="col-2">
							<div class="section_menu__item__price text-center">
								$23
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			<div class="col-md-6 section_menu__grid__item dinner">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/30.jpg" alt="...">
							</div>
						</div>
						<div class="col-7">
							<h4>Fusce sed dolor eget tortor</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
							</p>
						</div>
						<div class="col-2">
							<div class="section_menu__item__price text-center">
								$16
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			<div class="col-md-6 section_menu__grid__item drinks">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/31.jpg" alt="...">
							</div>
						</div>
						<div class="col-7">
							<h4>Phasellus non elit in dolor</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
							</p>
						</div>
						<div class="col-2">
							<div class="section_menu__item__price text-center">
								$10
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			<div class="col-md-6 section_menu__grid__item drinks">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/26.jpg" alt="...">
							</div>
						</div>
						<div class="col-7">
							<h4>In vel odio eu massa semper</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
							</p>
						</div>
						<div class="col-2">
							<div class="section_menu__item__price text-center">
								$35
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			<div class="col-md-6 section_menu__grid__item dinner">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/31.jpg" alt="...">
							</div>
						</div>
						<div class="col-7">
							<h4>Morbi ac est consectetur</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
							</p>
						</div>
						<div class="col-2">
							<div class="section_menu__item__price text-center">
								$18
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			<div class="col-md-6 section_menu__grid__item lunch">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/27.jpg" alt="...">
							</div>
						</div>
						<div class="col-7">
							<h4>Lorem ipsum dolor sit amet</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
							</p>
						</div>
						<div class="col-2">
							<div class="section_menu__item__price text-center">
								$15
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			<div class="col-md-6 section_menu__grid__item mains">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/30.jpg" alt="...">
							</div>
						</div>
						<div class="col-7">
							<h4>Fusce id ante ut arcu</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
							</p>
						</div>
						<div class="col-2">
							<div class="section_menu__item__price text-center">
								$23
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			<div class="col-md-6 section_menu__grid__item mains">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/31.jpg" alt="...">
							</div>
						</div>
						<div class="col-7">
							<h4>Fusce sed dolor eget tortor</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
							</p>
						</div>
						<div class="col-2">
							<div class="section_menu__item__price text-center">
								$16
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			<div class="col-md-6 section_menu__grid__item lunch">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/26.jpg" alt="...">
							</div>
						</div>
						<div class="col-7">
							<h4>Phasellus non elit in dolor</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
							</p>
						</div>
						<div class="col-2">
							<div class="section_menu__item__price text-center">
								$10
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			<div class="col-md-6 section_menu__grid__item dinner">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/26.jpg" alt="...">
							</div>
						</div>
						<div class="col-7">
							<h4>In vel odio eu massa semper</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
							</p>
						</div>
						<div class="col-2">
							<div class="section_menu__item__price text-center">
								$35
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>
			<div class="col-md-6 section_menu__grid__item drinks">
				<div class="section_menu__item">
					<div class="row">
						<div class="col-3 align-self-center">
							<div class="section_menu__item__img">
								<img src="assets/img/27.jpg" alt="...">
							</div>
						</div>
						<div class="col-7">
							<h4>Morbi ac est consectetur</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
							</p>
						</div>
						<div class="col-2">
							<div class="section_menu__item__price text-center">
								$18
							</div>
						</div>
					</div> <!-- / .row -->
				</div>
			</div>

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
					Featured dishes
				</h2>

				<!-- Subheading -->
				<p class="section__subheading text-center">
					Quibusdam in labore tempore quidem voluptatum ullam soluta! Maiores!
				</p>

			</div>
		</div>
	</div>

	<!-- Carouse -->
	<div class="section_dishes__carousel">
		<div class="section_dishes__carousel__item">

			<!-- Image -->
			<img src="assets/img/26.jpg" alt="..." class="section_dishes__carousel__item__img">

			<!-- Body -->
			<div class="section_dishes__carousel__item__body">
				<h5 class="section_dishes__carousel__item__body__heading mb-0">
					Lorem ipsum dolor sit amet <span>$25</span>
				</h5>
			</div>

		</div>
		<div class="section_dishes__carousel__item">

			<!-- Image -->
			<img src="assets/img/27.jpg" alt="..." class="section_dishes__carousel__item__img">

			<!-- Body -->
			<div class="section_dishes__carousel__item__body">
				<h5 class="section_dishes__carousel__item__body__heading mb-0">
					Lorem ipsum dolor sit amet <span>$35</span>
				</h5>
			</div>

		</div>
		<div class="section_dishes__carousel__item">

			<!-- Image -->
			<img src="assets/img/28.jpg" alt="..." class="section_dishes__carousel__item__img">

			<!-- Body -->
			<div class="section_dishes__carousel__item__body">
				<h5 class="section_dishes__carousel__item__body__heading mb-0">
					Lorem ipsum dolor sit amet <span>$18</span>
				</h5>
			</div>

		</div>
		<div class="section_dishes__carousel__item">

			<!-- Image -->
			<img src="assets/img/29.jpg" alt="..." class="section_dishes__carousel__item__img">

			<!-- Body -->
			<div class="section_dishes__carousel__item__body">
				<h5 class="section_dishes__carousel__item__body__heading mb-0">
					Lorem ipsum dolor sit amet <span>$32</span>
				</h5>
			</div>

		</div>
		<div class="section_dishes__carousel__item">

			<!-- Image -->
			<img src="assets/img/30.jpg" alt="..." class="section_dishes__carousel__item__img">

			<!-- Body -->
			<div class="section_dishes__carousel__item__body">
				<h5 class="section_dishes__carousel__item__body__heading mb-0">
					Lorem ipsum dolor sit amet <span>$40</span>
				</h5>
			</div>

		</div>
		<div class="section_dishes__carousel__item">

			<!-- Image -->
			<img src="assets/img/31.jpg" alt="..." class="section_dishes__carousel__item__img">

			<!-- Body -->
			<div class="section_dishes__carousel__item__body">
				<h5 class="section_dishes__carousel__item__body__heading mb-0">
					Lorem ipsum dolor sit amet <span>$27</span>
				</h5>
			</div>

		</div>
	</div> <!-- / .section_dishes__carousel -->

</section>

<!-- RESERVATION
	================================================== -->
<section class="section section_gray section_reservation">
	<div class="container">
		<div class="row">
			<div class="col">

				<!-- Heading -->
				<h2 class="section__heading text-center">
					Make online reservation
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

@endsection