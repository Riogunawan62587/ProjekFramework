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
          <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Detail Reservasi</h5>
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-end">
        <div class="row no-gutters">
          @if($reservation->table_id != null)
          <div class="text-right col-auto bg-primary-dark py-2 px-5 rounded shadow-sm">
              <span class="text-white">{{$table->nama}}</span>
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>

  <div class="row align-items-center">
    <form class="col-xl-12" action="{{ url('/admin/reservasi') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="card">
        <div class="card-body">
          <h5>Data Pemesan</h5>
          <div class="form-group">
            <label class="form-control-label">
              Nama Pemesan
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
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5>Data Reservasi</h5>
          <div class="row">
            <div class="form-group col-5">
              <label class="form-control-label">
                Tanggal
              </label>
              <input type="text" name="name" value="{{$reservation->tanggal}}" class="form-control" disabled>
            </div>
            <div class="form-group col-4">
              <label class="form-control-label">
                Jam
              </label>
              <input type="text" name="name" value="{{$reservation->jam}}" class="form-control" disabled>
            </div>
            <div class="form-group col-3">
              <label class="form-control-label">
                Jumlah Orang
              </label>
              <input type="text" name="name" value="{{$reservation->jumlah_orang}}" class="form-control" disabled>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h5>Status Pemesanan</h5>
          <div class="row align-items-center mb-3">
            <div class="col-md-6">
              <span>Status Pemesanan</span>
            </div>
            <div class="col-auto bg-primary rounded p-2">
              @if($reservation->status == 0)<span class="text-white">Belum diverifikasi</span>@endif
              @if($reservation->status == 1)<span class="text-white">Diverifikasi</span>@endif
              @if($reservation->status == 2)<span class="text-white">Dibayar</span>@endif
            </div>
          </div>
          <div class="row align-items-center mb-3">
            <div class="col-md-6">
              <span>Bukti Pembayaran</span>
            </div>
            <div class="col-auto">
              @if($reservation->bukti_pembayaran == null)<span>Belum ada bukti</span>@endif
              @if($reservation->bukti_pembayaran != null)<span>{{$reservation->bukti_pembayaran}}</span>@endif
            </div>
            @if($reservation->bukti_pembayaran != null)
            <div class="col-auto">
              <a href="#" id="modal-bukti" class="btn btn-primary">
                <img id="imageresource" src="{{ url('/assets/img/'.$reservation->bukti_pembayaran) }}" hidden>
                <span>Lihat</span>
              </a>
            </div>
            @endif
          </div>
          <div class="row align-items-center">
            <div class="col-md-6">
              <span>Ubah Status Verifikasi</span>
            </div>
            <div id="status-select" class="tab-pane tab-example-result fade show active col-md-6 mb-3 pl-0"
              role="tabpanel" aria-labelledby="select-menu-result-tab">
              <select class="custom-select" name="status" @if($reservation->status == 2) disabled @endif>
                <option selected hidden>Pilih Status</option>
                <option value="0" @if($reservation->status == 0) selected @endif>Belum diverifikasi</option>
                <option value="1" @if($reservation->status == 1) selected @endif>Verifikasi</option>
                <option value="2" @if($reservation->status == 2) selected @endif>Dibayar</option>
              </select>
            </div>
          </div>

          @if($reservation->status == 0 || $reservation->status == 1)
          <div class="text-right">
            <a href="{{ url('/admin/reservasi')}}" class="btn btn-link text-sm text-muted font-weight-bold">Batal</a>
            <input type="hidden" name="reservation_id" value="{{$reservation->id}}">
            <button type="submit" class="btn btn-sm btn-primary rounded-pill">Simpan</button>
          </div>
          @endif
        </div>
    </form>
  </div>

  <!-- bootstrap modal image -->
  <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
              class="sr-only">Close</span></button>
        </div>
        <div class="modal-body">
          <img src="" id="imagepreview" class="img-fluid">
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
  $("#modal-bukti").on("click", function() {
    $('#imagepreview').attr('src', $('#imageresource').attr('src')); // here asign the image to the modal when the user click the enlarge link
    $('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
  });

  $(document).ready(function() {
    $("#reservasi_nav").addClass("active");
  });
</script>
@endsection
