@extends('layouts.admin_master')

@section('head')

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
    <form class="col-xl-12" action="/admin/artikel/update" method="post" enctype="multipart/form-data" id="edit-form">
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
              <div class="text-danger" id="gambar-error"></div>
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
            <div class="text-danger" id="judul-error"></div>
          </div>

          <div class="form-group">
            <label class="form-control-label mb-0">
              Konten artikel
            </label>
            <textarea class="ckeditor" name="deskripsi" id="deskripsi">{{$article->deskripsi}}</textarea>
            <div class="text-danger" id="deskripsi-error"></div>
          </div>

          <div class="text-right">
            <input type="hidden" name="article_id" value="{{$article->id}}">
            <a href="/admin/artikel" class="btn btn-link text-sm text-muted font-weight-bold">Batal</a>
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
            target="_blank">Kelompok 10B PBF</a>. All rights reserved.</p>
      </div>
    </div>
  </div>
</div>

@endsection

@section('footer')
<script src="/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="/assets/plugins/jquery-validation/dist/additional-methods.min.js"></script>
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<style>
  label.error.fail-alert {
    color: red;
  }
  input.error.fail-alert{
    border: 2px solid red;
  }
  input.valid.success-alert {
    border: 2px solid #4CAF50;
    color: green;
  }
</style>
<script>
  $(document).ready(function() {
    $("#artikel_nav").addClass("active");
  });
</script>
<script>
$(document).ready(function () {

  $('#edit-form').validate({
      ignore: [],
      debug: false,
      errorClass: "error fail-alert",
      validClass: "valid success-alert",
      rules: {
          judul: {
              required: true,
              maxlength: 255
          },
          gambar:{
            extension: "png|jpg|jpeg"
          },
          deskripsi:{
              required: function()
              {
                CKEDITOR.instances.deskripsi.updateElement();
              },
              minlength:10
          }
      },
      messages: {
        judul:{
          required: "Judul tidak boleh kosong!",
          maxlength: "Judul tidak boleh melebihi 255 karakter!"
        },
        gambar:{
          extension: "Format file anda tidak didukung. Silahkan masukkan gambar dengan format .png .jpg .jpeg!"
        },
        deskripsi:{
          required:"Isi Artikel tidak boleh kosong!",
          minlength:"Isi Artikel tidak valid!"
        }
      },
      errorPlacement: function(error, element) {
        if (element.attr("name") == "judul") {
          error.appendTo("#judul-error");
        } else if (element.attr("name") == "gambar") {
          error.appendTo("#gambar-error");
        } else if (element.attr("name") == "deskripsi") {
          error.appendTo("#deskripsi-error");
        }
      }
  });
});
</script>
@endsection
