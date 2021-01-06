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
          <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Edit menu</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-xl-5">
      <div>
        <div class="card">
          <div class="card-header">
            <h5>Gambar</h5>
          </div>
          <div class="card-body">
            <img src="/assets/img/{{$food->gambar}}" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-7">
      <form action="/admin/menu/update" enctype="multipart/form-data" method="post" id="edit-form">
        @csrf
        <div class="card">
          <div class="card-header">
            <h5>Edit</h5>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label class="form-control-label">
                Nama Menu
              </label>
              <input type="text" name="nama" value="{{$food->nama}}" class="form-control">
              <div class="text-danger" id="nama-error"></div>
            </div>

            <!-- description -->
            <div class="form-group">
              <label class="form-control-label mb-0">
                Deskripsi menu
              </label>
              <textarea class="form-control" data-toggle="autosize" name="deskripsi" rows="3">{{$food->deskripsi}}</textarea>
              <div class="text-danger" id="deskripsi-error"></div>
            </div>

            <!-- category -->
            <div class="form-group">
              <label class="form-control-label">
                Kategori Produk
              </label>
              <div class="row">
                <div class="col-3">
                  <div class="custom-control custom-checkbox">
                    <input type="radio" class="custom-control-input" name="kategori" id="radio-project-1"
                      value="1" @if($food->tipe == 1) checked @endif>
                    <label class="custom-control-label form-control-label text-muted"
                      for="radio-project-1">Mains</label>
                  </div>
                </div>
                <div class="col-3">
                  <div class="custom-control custom-checkbox">
                    <input type="radio" class="custom-control-input" name="kategori" id="radio-project-2"
                      value="2" @if($food->tipe == 2) checked @endif>
                    <label class="custom-control-label form-control-label text-muted"
                      for="radio-project-2">Lunch</label>
                  </div>
                </div>
                <div class="col-3">
                  <div class="custom-control custom-checkbox">
                    <input type="radio" class="custom-control-input" name="kategori" id="radio-project-3"
                      value="3" @if($food->tipe == 3) checked @endif>
                    <label class="custom-control-label form-control-label text-muted"
                      for="radio-project-3">Dinner</label>
                  </div>
                </div>
                <div class="col-3">
                  <div class="custom-control custom-checkbox">
                    <input type="radio" class="custom-control-input" name="kategori" id="radio-project-4"
                      value="4" @if($food->tipe == 4) checked @endif>
                    <label class="custom-control-label form-control-label text-muted"
                      for="radio-project-4">Drinks</label>
                  </div>
                </div>
              </div>
              <div class="text-danger" id="kategori-error"></div>
            </div>

            <div class="form-group">
              <label class="form-control-label">
                Harga
              </label>
              <input type="text" name="harga" value="{{$food->harga}}" class="form-control">
              <div class="text-danger" id="harga-error"></div>
            </div>
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
            <input type="hidden" name="menuid" value="{{$food->id}}">
            <div class="text-right">
              <a href="/admin/menu" class="btn btn-link text-sm text-muted font-weight-bold">Batal</a>
              <button type="submit" class="btn btn-sm btn-primary rounded-pill">Update</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- Footer -->
  <div class="footer pt-5 pb-4 footer-light" id="footer-main">
    <div class="row text-center text-sm-left align-items-sm-center">
      <div class="col-sm-6">
        <p class="text-sm mb-0">&copy; 2020 <a href="https://webpixels.io" class="h6 text-sm"
            target="_blank">Kelompok 7 PBF</a>. All rights reserved.</p>
      </div>
    </div>
  </div>
</div>

@endsection

@section('footer')
<script src="/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="/assets/plugins/jquery-validation/dist/additional-methods.min.js"></script>
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
    $("#menu_nav").addClass("active");
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
          nama: {
              required: true,
              maxlength: 255
          },
          gambar:{
            extension: "png|jpg|jpeg"
          },
          deskripsi:{
              required: true,
              minlength: 10
          },
          kategori:{
            required: true
          },
          harga:{
            required: true,
            digits: true
          }
      },
      messages: {
        nama:{
          required: "Nama menu boleh kosong!",
          maxlength: "Nama menu tidak boleh melebihi 255 karakter!"
        },
        gambar:{
          extension: "<span>Format file anda tidak didukung. Silahkan masukkan gambar dengan format .png .jpg .jpeg!</span>"
        },
        deskripsi:{
          required:"Deskripsi menu tidak boleh kosong!",
          minlength:"Deskripsi menu tidak valid!"
        },
        kategori:{
          required: "Silahkan pilih kategori menu!"
        },
        harga:{
          required: "Harga tidak boleh kosong!",
          digits: "Harga harus berupa angka!"
        }
      },
      errorPlacement: function(error, element) {
        if (element.attr("name") == "gambar") {
          error.appendTo("#gambar-error");
        } else if (element.attr("name") == "nama") {
          error.appendTo("#nama-error");
        } else if (element.attr("name") == "deskripsi") {
          error.appendTo("#deskripsi-error");
        } else if (element.attr("name") == "kategori") {
          error.appendTo("#kategori-error");
        } else if (element.attr("name") == "harga") {
          error.appendTo("#harga-error");
        }
      }
  });
});
</script>
@endsection
