@extends('layouts.master')

@section('content')

<!-- NAVBAR
	================================================== -->
<nav class="navbar navbar-light navbar-expand-lg fixed-top">
	<div class="container">

		<!-- Navbar: Brand -->
		<a class="navbar-brand navbar-brand_2 d-lg-none" href="index.html">Matteé</a>

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

<!-- EVENTS
	================================================== -->
<section class="section section_events section_no-padding_bottom">

	<!-- Intro -->
	<div class="container">
		<div class="row">
			<div class="col">

				<!-- Heading -->
				<h2 class="section__heading text-center">
					Upcoming events
				</h2>

				<!-- Subheading -->
				<p class="section__subheading text-center">
					Commodi rem veritatis quis eaque mollitia.
				</p>

			</div>
		</div> <!-- / .row -->
	</div> <!-- / .container -->

	<!-- Events -->
	<div class="section_events__items">

		<!-- Event #1 -->
		<div class="section_events__item active">

			<!-- Bg image -->
			<div class="section_events__item__bg" style="background-image: url(assets/img/8.jpg)"></div>

			<!-- Content -->
			<div class="container">

				<!-- Content: Large -->
				<div class="section_events__item__content_lg">
					<div class="row">
						<div class="col-md-8 col-lg-5">

							<!-- Date -->
							<h3 class="section__preheading text-primary">
								<time datetime="2017-09-30">September 30, 2017</time>
							</h3>

							<!-- Heading -->
							<h2 class="section__heading text-white">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum voluptas, aut ea quae!
							</h2>

							<!-- Description -->
							<p class="section__subheading">
								Alias earum, labore doloremque iusto a modi et, dolorem veritatis iste quis ab. Facere est optio,
								voluptate molestias aspernatur impedit perferendis odit?
							</p>

							<!-- Button -->
							<a href="news-and-events.html#section_reservation" class="btn btn-primary text-white">
								Reserve a table
							</a>

						</div>
					</div> <!-- / .row -->
				</div> <!-- / .section_events__item__content_lg -->

				<!-- Content: Small -->
				<div class="section_events__item__content_sm">
					<div class="row">
						<div class="col-3 col-md-2 col-lg-1">

							<!-- Date -->
							<time datetime="2017-09-30">
								30 <small>Sep</small>
							</time>

						</div>
						<div class="col-9 col-md-7 col-lg-8">

							<!-- Heading -->
							<h4>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum voluptas, aut ea quae!
							</h4>

						</div>
						<div class="col-9 ml-auto col-md-3 text-md-right">

							<!-- Button -->
							<a href="news-and-events.html#section_reservation" class="btn btn-primary">
								Reserve a table
							</a>

						</div>
					</div> <!-- / .row -->
				</div> <!-- / .section_events__item__content_sm -->

			</div> <!-- / .container -->

		</div> <!-- / .section_events__item -->

		<!-- Event #2 -->
		<div class="section_events__item">

			<!-- Bg image -->
			<div class="section_events__item__bg" style="background-image: url(assets/img/9.jpg)"></div>

			<!-- Content -->
			<div class="container">

				<!-- Content: Large -->
				<div class="section_events__item__content_lg">
					<div class="row">
						<div class="col-md-8 col-lg-5">

							<!-- Date -->
							<h3 class="section__preheading text-primary">
								<time datetime="2017-09-29">September 29, 2017</time>
							</h3>

							<!-- Heading -->
							<h2 class="section__heading text-white">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum voluptas, aut ea quae!
							</h2>

							<!-- Description -->
							<p class="section__subheading">
								Alias earum, labore doloremque iusto a modi et, dolorem veritatis iste quis ab. Facere est optio,
								voluptate molestias aspernatur impedit perferendis odit?
							</p>

							<!-- Button -->
							<a href="news-and-events.html#section_reservation" class="btn btn-primary text-white">
								Reserve a table
							</a>

						</div>
					</div> <!-- / .row -->
				</div> <!-- / .section_events__item__content_lg -->

				<!-- Content: Small -->
				<div class="section_events__item__content_sm">
					<div class="row">
						<div class="col-3 col-md-2 col-lg-1">

							<!-- Date -->
							<time datetime="2017-09-29">
								29 <small>Sep</small>
							</time>

						</div>
						<div class="col-9 col-md-7 col-lg-8">

							<!-- Heading -->
							<h4>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum voluptas, aut ea quae!
							</h4>

						</div>
						<div class="col-9 ml-auto col-md-3 text-md-right">

							<!-- Button -->
							<a href="news-and-events.html#section_reservation" class="btn btn-primary">
								Reserve a table
							</a>

						</div>
					</div> <!-- / .row -->
				</div> <!-- / .section_events__item__content_sm -->

			</div> <!-- / .container -->

		</div> <!-- / .section_events__item -->

		<!-- Event #3 -->
		<div class="section_events__item">

			<!-- Bg image -->
			<div class="section_events__item__bg" style="background-image: url(assets/img/10.jpg)"></div>

			<!-- Content -->
			<div class="container">

				<!-- Content: Large -->
				<div class="section_events__item__content_lg">
					<div class="row">
						<div class="col-md-8 col-lg-5">

							<!-- Date -->
							<h3 class="section__preheading text-primary">
								<time datetime="2017-09-28">September 28, 2017</time>
							</h3>

							<!-- Heading -->
							<h2 class="section__heading text-white">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum voluptas, aut ea quae!
							</h2>

							<!-- Description -->
							<p class="section__subheading">
								Alias earum, labore doloremque iusto a modi et, dolorem veritatis iste quis ab. Facere est optio,
								voluptate molestias aspernatur impedit perferendis odit?
							</p>

							<!-- Button -->
							<a href="news-and-events.html#section_reservation" class="btn btn-primary text-white">
								Reserve a table
							</a>

						</div>
					</div> <!-- / .row -->
				</div> <!-- / .section_events__item__content_lg -->

				<!-- Content: Small -->
				<div class="section_events__item__content_sm">
					<div class="row">
						<div class="col-3 col-md-2 col-lg-1">

							<!-- Date -->
							<time datetime="2017-09-28">
								28 <small>Sep</small>
							</time>

						</div>
						<div class="col-9 col-md-7 col-lg-8">

							<!-- Heading -->
							<h4>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum voluptas, aut ea quae!
							</h4>

						</div>
						<div class="col-9 ml-auto col-md-3 text-md-right">

							<!-- Button -->
							<a href="news-and-events.html#section_reservation" class="btn btn-primary">
								Reserve a table
							</a>

						</div>
					</div> <!-- / .row -->
				</div> <!-- / .section_events__item__content_sm -->

			</div> <!-- / .container -->

		</div> <!-- / .section_events__item -->

	</div> <!-- / .section_events__items -->

</section>

<!-- NEWSLETTER
	================================================== -->
<section class="section section_gray section_newsletter">
	<div class="container">
		<div class="row">
			<div class="col">

				<!-- Heading -->
				<h2 class="section__heading section_newsletter__heading text-center">
					Newsletter
				</h2>
				<p class="section__subheading text-center">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam illo praesentium sequi in cum, beatae
					maiores quae qui.
				</p>

			</div>
		</div> <!-- / .row -->
		<div class="row justify-content-center">
			<div class="col-lg-6">

				<!-- Form -->
				<div id="mc_embed_signup">
					<form class="section_newsletter__form validate"
						action="https://simpleqode.us15.list-manage.com/subscribe/post-json?u=507744bbfd1cc2879036c7780&amp;id=4523d25e1b&amp;c=?"
						method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank"
						novalidate="">
						<div id="mc_embed_signup_scroll" class="row">
							<div class="mc-field-group form-group col-md-9">
								<label for="mce-EMAIL" class="sr-only">E-mail address</label>
								<input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL"
									placeholder="Email address">
							</div>
							<div id="mce-responses" class="clear">
								<div class="response"></div>
								<div class="response" id="mce-success-response"></div>
							</div>
							<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<div aria-hidden="true" id="mce-hidden-input">
								<input type="text" name="b_507744bbfd1cc2879036c7780_4523d25e1b" tabindex="-1" value="">
							</div>
							<div class="clear col-md-3 text-center">
								<button type="submit" class="btn btn-primary" id="mc-embedded-subscribe">
									Subscribe
								</button>
							</div>
						</div>
					</form>
				</div> <!-- #mc_embed_signup -->

			</div>
		</div> <!-- / .row -->
	</div> <!-- / .container -->
</section>

@endsection