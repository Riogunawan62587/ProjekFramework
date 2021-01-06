@extends('layouts.admin_master')

@section('head')

@endsection

@section('page_content')
<div class="page-content">
  <!-- Page title -->
  <div class="page-title">
    <div class="row justify-content-between align-items-center">
      <div
        class="col-md-12 d-flex align-items-center justify-content-between justify-content-md-start mb-3 mb-md-0">
        <!-- Page title + Go Back button -->
        <div class="d-inline-block">
          <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Dashboard</h5>
        </div>
      </div>
    </div>
  </div>

  <!-- Project cards -->
  @if(session('success'))
  <div class="row">
    <div class="col-xl-12">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Heads up!</strong> This is a info alert with <a href="alerts.html#" class="alert-link">an example
          link</a> — check it out!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
  @endif

  <div class="row">
    <h5 class="col-xl-12 text-white">Summary</h5>
    <div class="col-xl-3 col-md-6">
      <div class="card card-stats">
        <!-- Card body -->
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h6 class="text-muted mb-1">Total Reservasi</h6>
              <span class="h3 font-weight-bold mb-0">{{$total_reservations}}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card card-stats">
        <!-- Card body -->
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h6 class="text-muted mb-1">Total Pengguna</h6>
              <span class="h3 font-weight-bold mb-0">{{$total_users}}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card card-stats">
        <!-- Card body -->
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h6 class="text-muted mb-1">Total Meja</h6>
              <span class="h3 font-weight-bold mb-0">{{$total_tables}}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card card-stats">
        <!-- Card body -->
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h6 class="text-muted mb-1">Total Menu</h6>
              <span class="h3 font-weight-bold mb-0">{{$total_foods}}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row align-items-center">
    <h5 class="col-md-6 text-white mb-0">Pesanan Terbaru</h5>
    <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-end">
      <a href="/admin/reservasi" class="btn btn-sm btn-white rounded-pill">Lihat Selengkapnya</a>
    </div>
    <div class="col-md-12 mb-3"></div>
    @foreach($reservations as $reservation)
      @foreach($tables as $table)
        @foreach($users as $user)
          @if($reservation->user_id == $user->id || $reservation->table_id == $table->id || $reservation->table_id == null )
          <div class="col-xl-12 col-md-12">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        @if($reservation->table_id != null)
                          <h6 class="bg-primary rounded text-white p-2">{{$table->nama}}</h6>
                        @endif
                        @if($reservation->table_id == null)
                          <h6 class="bg-primary-light rounded text-white p-2">Belum ada nomor</h6>
                        @endif
                      </div>
                      <h6 class="col text-right">{{$reservation->tanggal}} {{$reservation->jam}}</h6>
                    </div>
                    <div class="row">
                      <h6 class="text-muted mb-1 col-xl-6">Nomor Reservasi</h6>
                      <h6 class="col-xl-6 text-right">{{$reservation->id}}</h6>
                    </div>
                    <div class="row">
                      <h6 class="text-muted mb-1 col-xl-6">Nama Pemesan</h6>
                      <h6 class="col-xl-6 text-right">{{$user->name}}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endif
        @endforeach
      @endforeach
    @endforeach
  </div>
  <!-- Load more -->

  <!-- Footer -->
  <div class="footer pt-5 pb-4 footer-light" id="footer-main">
    <div class="row text-center text-sm-left align-items-sm-center">
      <div class="col-sm-6">
        <p class="text-sm mb-0">&copy; 2021 <a href="https://webpixels.io" class="h6 text-sm"
            target="_blank">Kelompok 10B PBF</a>. All rights reserved.</p>
      </div>
    </div>
  </div>
</div>

@endsection

@section('footer')
<script>
  $(document).ready(function() {
    $("#dashboard_nav").addClass("active");
  });
</script>
@endsection
