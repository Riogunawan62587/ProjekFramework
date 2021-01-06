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
<section class="section section_header" data-parallax="scroll" data-image-src="assets/img/14.jpg">
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
					Artikel terbaru kami
				</h2>

				<!-- Subheading -->
				<p class="section__subheading text-center">
					Artikel, berita, maupun info - info menarik seputar kuliner nusantara hingga dari seluruh dunia tersedia
					disini.
				</p>

			</div>
		</div> <!-- / .row -->
	</div> <!-- / .container -->
</section>

<!-- INFO
	================================================== -->

@foreach ($data_artikel as $dt)
@if ($dt->id % 2 == 1)
<section class="section section_info section_info_opposite section_no-padding_top section_no-padding_bottom">
	<div class="container">
		<div class="row align-items-justify">
			<div class="col-md-6 order-md-3">

				<div class="section_info__img">
					<img src="assets/img/{{$dt->gambar}}" alt="...">
				</div>

			</div>
			<div class="col-md-1 order-md-2"></div>
			<div class="col-md-5 order-md-1">

				<div class="section_info__body">
					<h3 class="section__preheading text-primary">
						<?php
							$time = strtotime($dt->tanggal);
							$tanggal = date('F d, Y',$time);
						?>
						<time datetime="{!!$tanggal!!}">{!!$tanggal!!}</time>
					</h3>
					<h2 class="section__heading">
						{{$dt->judul}}
					</h2>
					<p class="section__subheading">
						@if (strlen($dt->deskripsi) > 200)
						{!! substr($dt->deskripsi, 0, 200).'...' !!}
						@else
						{!! $dt->deskripsi !!}
						@endif
					</p>
					<a href="#modal-read-more1{{$dt->id}}" class="btn btn-primary" data-toggle="modal">
						Lihat selengkapnya...
					</a>
				</div>

			</div>
		</div> <!-- / .row -->
	</div> <!-- / .container -->

	{{-- modal --}}
	<div class="modal fade" id="modal-read-more1{{$dt->id}}" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<img src="/assets/img/{{$dt->gambar}}" alt="" id="gambar" class="img-fluid z-depth-1">
					<label for="gambar" class="mt-3"><b>{!!$dt->judul!!}</b></label>
					<p>{!!$dt->deskripsi!!}</p>
				</div>
				<div class="modal-footer align-self-center">
					<button type="button" class="btn btn-sm btn-danger rounded-pill mr-auto" data-dismiss="modal">Kembali</button>
				</div>
			</div>
		</div>
	</div>
</section>

@else
<section class="section section_info section_no-padding_top section_no-padding_bottom">
	<div class="container">
		<div class="row align-items-justify">
			<div class="col-md-6">

				<div class="section_info__img">
					<img src="assets/img/{{$dt->gambar}}" alt="...">
				</div>

			</div>
			<div class="col-md-1"></div>
			<div class="col-md-5">

				<div class="section_info__body">
					<h3 class="section__preheading text-primary">
						<?php
							$time = strtotime($dt->tanggal);
							$tanggal = date('F d, Y',$time);
						?>
						<time datetime="{!!$tanggal!!}">{!!$tanggal!!}</time>
					</h3>
					<h2 class="section__heading">
						{!!$dt->judul!!}
					</h2>
					<p class="section__subheading">
						@if (strlen($dt->deskripsi) > 200)
						{!! substr($dt->deskripsi, 0, 200).'...' !!}
						@else
						{!! $dt->deskripsi !!}
						@endif
					</p>
					<a href="#modal-read-more2{{$dt->id}}" class="btn btn-primary" data-toggle="modal">
						Lihat selengkapnya...
					</a>
				</div>

			</div>
		</div> <!-- / .row -->
	</div> <!-- / .container -->

	{{-- modal --}}
	<div class="modal fade" id="modal-read-more2{{$dt->id}}" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<img src="/assets/img/{{$dt->gambar}}" alt="" id="gambar" class="img-fluid z-depth-1">
					<label for="gambar" class="mt-3"><b>{!!$dt->judul!!}</b></label>
					<p>{!!$dt->deskripsi!!}</p>
				</div>
				<div class="modal-footer align-self-center">
					<button type="button" class="btn btn-sm btn-danger rounded-pill mr-auto" data-dismiss="modal">Batal</button>
				</div>
			</div>
		</div>
	</div>
</section>
@endif
@endforeach

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