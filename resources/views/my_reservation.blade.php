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

		<!-- delete modal -->
		<div class="modal modal-danger fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modal_5"
			aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<form action="{{route('reservasi.my_reservation.delete')}}" method="post">
						@csrf
						<div class="modal-header">
							<h5 class="modal-title h6" id="modal_title_6">This is way to dangerous</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="py-3 text-center">
								<i class="fas fa-exclamation-circle fa-4x"></i>
								<h5 class="heading h4 mt-4">Should we stop now?</h5>
								<p>
									You can easy create stackable modal boxes. For example, your inline content or Ajax response can
									contain a gallery:
								</p>
								<input type="hidden" name="reservasiid" id="reservasiid">
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-sm btn-primary">Hapus</button>
							<button type="button" class="btn btn-sm btn-white" data-dismiss="modal">Batal</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="row">
			@foreach ($reservasi_saya as $rsv)
			<div class="col-xl-3 col-lg-4 col-sm-6">
				@if ($rsv->status == 0)
				<div class="card hover-shadow-lg">
					<div class="card-header border-0 pb-0">
						<div class="d-flex justify-content-center align-items-center">
							<div>
								<h6 class="mb-0 text-center"><b><i>Mohon menunggu konfirmasi atas reservasi anda</i></b></h6>
							</div>
						</div>
					</div>
					<div class="card-body text-center">
						<?php
							$time = strtotime($rsv->tanggal);
							$time_2 = strtotime($rsv->jam);
							$tanggal = date('d/m/Y',$time);
							$jam = date('H:i',$time_2);
						?>
						<h5 class="h2">{{$tanggal}}</h5>
						<h5 class="h6">Jam : {{$jam}} WIB</h5>
						<h5 class="h6">Jumlah orang : {{$rsv->jumlah_orang}}</h5>
						<span class="clearfix"></span>
					</div>
					<div class="card-footer">
						<div class="actions d-flex justify-content-center">
							<a href="#delete-modal" class="action-item text-danger" id="delete-button" data-toggle="modal"
								data_reservasiid={{$rsv->id}}>
								<i class="far fa-trash-alt"></i> BATALKAN RESERVASI
							</a>
						</div>
					</div>

					@else
					<div class="card bg-info hover-shadow-lg">
						<div class="card-header border-0 pb-0">
							<div class="d-flex justify-content-center align-items-center">
								<div>
									<h6 class="mb-0 text-center" style="color: white"><b>ID Reservasi : {{$rsv->id}}</b></h6>
								</div>
							</div>
						</div>
						<div class="card-body text-center">
							<?php
							$time = strtotime($rsv->tanggal);
							$time_2 = strtotime($rsv->jam);
							$tanggal = date('d/m/Y',$time);
							$jam = date('H:i',$time_2);
						?>
							<h5 class="h2" style="color: white">{{$tanggal}}</h5>
							<h5 class="h6" style="color: white">Jam : {{$jam}} WIB</h5>
							<h5 class="h6" style="color: white">Jumlah orang : {{$rsv->jumlah_orang}}</h5>
							<span class="clearfix"></span>
						</div>
						<div class="card-footer">

							@if ($rsv->bukti_pembayaran == null)
							{{-- Modal --}}
							<div class="modal fade" id="modal-project-create" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<form class="" action="{{route('reservasi.my_reservation.simpan')}}" method="post"
											enctype="multipart/form-data">
											@csrf
											<div class="modal-body">
												<div class="form-group">
													<div>
														<label class="form-control-label">
															Upload Bukti Pembayaran
														</label>
														<input type="file" name="bukti" id="file-1" class="custom-input-file" style="color: red" />
														<label for="file-1">
															<i class="fa fa-upload"></i>
															<span>Choose a file…</span>
														</label>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<input type="hidden" name="reservasiid" value="{{$rsv->id}}">
												<button type="button" class="btn btn-sm btn-danger rounded-pill mr-auto"
													data-dismiss="modal">Batal</button>
												<button type="submit" class="btn btn-sm btn-success rounded-pill px-4">Save</button>
											</div>
										</form>
									</div>
								</div>
							</div>

							{{-- Button --}}
							<div class="text-center actions d-flex justify-content-center">
								<a href="#modal-project-create" class="btn btn-light rounded-pill" data-toggle="modal">
									<span class="btn-inner"></span>
									Upload Bukti
								</a>
							</div>

							@elseif($rsv->bukti_pembayaran != null)

							<div class="actions d-flex justify-content-center text-center">
								<h5 style="color: white"><b>Anda sudah mengupload bukti pembayaran</b></h5>
							</div>

							@endif
						</div>

						@endif


					</div>
				</div>
				@endforeach
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