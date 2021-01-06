@extends('layouts.admin_master')

@section('head')

@endsection

@section('page_content')
<div class="page-content">

  <!-- Page title -->
  <div class="page-title">
    <div class="row justify-content-between align-items-center">
      <div
        class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-start mb-3 mb-md-0">
        <!-- Page title + Go Back button -->
        <div class="d-inline-block">
          <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Detail Pengguna</h5>
        </div>
      </div>
    </div>
  </div>

  @if(session('success'))
  <div class="row">
    <div class="col-xl-12">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>{{Session::get('success')}}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
  @endif

  <div class="row align-items-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <h5>Data Pengguna</h5>
          <div class="form-group">
            <label class="form-control-label">
              Tanggal Mendaftar
            </label>
            <input type="text" name="name" value="{{$user->created_at}}" class="form-control" disabled>
          </div>
          <div class="form-group">
            <label class="form-control-label">
              Nama
            </label>
            <input type="text" name="name" value="{{$user->name}}" class="form-control" disabled>
          </div>
          <div class="form-group">
            <label class="form-control-label">
              Nomor Telepon
            </label>
            <input type="text" name="name" value="{{$user->nomor_telepon}}" class="form-control" disabled>
          </div>
          <div class="form-group">
            <label class="form-control-label">
              Email
            </label>
            <input type="text" name="name" value="{{$user->email}}" class="form-control" disabled>
          </div>
          <div class="text-right">
            <a href="/admin/pengguna" class="btn btn-primary btn-sm ">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="footer pt-5 pb-4 footer-light" id="footer-main">
    <div class="row text-center text-sm-left align-items-sm-center">
      <div class="col-sm-12">
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
    $("#pengguna_nav").addClass("active");
  });
</script>
@endsection
