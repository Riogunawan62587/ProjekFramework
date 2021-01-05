@extends('layouts.admin_master')

@section('head')
<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
@endsection

@section('page_content')
<div class="page-content">
  
  <!-- Page title -->
  <div class="page-title">
    <div class="row justify-content-between align-items-center">
      <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-start mb-3 mb-md-0">
        <div class="d-inline-block">
          <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Edit Artikel</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="row align-items-center">
    <form class="col-xl-12" action="/admin/artikel/update" method="post" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-auto">
          <div class="card">
            <div class="card-body">
              <img src="/assets/img/{{$article->gambar}}" alt="">
            </div>
          </div>
        </div>
      </div>
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
            <input type="text" name="judul" value="{{$article->judul}}" class="form-control">
          </div>

          <div class="form-group">
            <label class="form-control-label mb-0">
              Konten artikel
            </label>
            <textarea class="form-control" data-toggle="autosize" name="deskripsi" id="deskripsi"
              earows="3">{{$article->deskripsi}}</textarea>
          </div>

          <div class="text-right">
            <input type="hidden" name="article_id" value="{{$article->id}}">
            <a href="create-new.html#" class="btn btn-link text-sm text-muted font-weight-bold">Batal</a>
            <button type="submit" class="btn btn-sm btn-primary rounded-pill">Simpan</button>
          </div>
        </div>
      </div>
    </form>
  </div>
  <!-- Load more -->

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
