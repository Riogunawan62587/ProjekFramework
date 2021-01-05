@extends('layouts.admin_master')

@section('head')
<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
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
          <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Tambah Artikel</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="row align-items-center">
    <form class="col-xl-12" action="/admin/artikel/tambah" method="post" enctype="multipart/form-data">
      @csrf
      <div class="card">
        <div class="card-body">
          <div class="form-group">
            <div>
              <label class="form-control-label">
                Upload Gambar Menu
              </label>
              <input type="file" name="gambar" id="file-1" class="custom-input-file" />
              <label for="file-1">
                <i class="fa fa-upload"></i>
                <span>Choose a file…</span>
              </label>
              @error('gambar')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="form-group">
            <label class="form-control-label">
              Judul artikel
            </label>
            <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror">
            @error('judul')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
            <label class="form-control-label mb-0">
              Konten artikel
            </label>
            <textarea class="form-control @error('deskripsi') is-invalid @enderror" data-toggle="autosize" name="deskripsi" id="deskripsi" rows="3"></textarea>
            @error('deskripsi')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="text-right">
            <a href="/admin/artikel" class="btn btn-link text-sm text-muted font-weight-bold">Batal</a>
            <button type="submit" class="btn btn-sm btn-primary rounded-pill">Simpan</button>
          </div>
        </div>
      </div>
    </form>
  </div>

  <!-- Footer -->
  <div class="footer pt-5 pb-4 footer-light" id="footer-main">
    <div class="row text-center text-sm-left align-items-sm-center">
      <div class="col-sm-6">
        <p class="text-sm mb-0">&copy; 2021 <a href="https://webpixels.io" class="h6 text-sm"
            target="_blank">Kelompok 7 PBF</a>. All rights reserved.</p>
      </div>
    </div>
  </div>
</div>

@endsection

@section('footer')
<script>
  ClassicEditor
      .create( document.querySelector( '#deskripsi' ) )
      .catch( error => {
          console.error( error );
      } );

  $(document).ready(function() {
    $("#artikel_nav").addClass("active");
  });
</script>
@endsection
