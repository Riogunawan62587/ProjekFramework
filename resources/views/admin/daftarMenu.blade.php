@extends('layouts.admin_master')

@section('head')

@endsection

@section('page_content')
<div class="page-content">

  <!-- delete modal -->
  <div class="modal modal-danger fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modal_5"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form action="{{ url('/admin/menu/delete') }}" method="post">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title h6" id="modal_title_6">Konfirmasi hapus</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="py-3 text-center">
              <i class="fas fa-exclamation-circle fa-4x"></i>
              <h5 class="heading h4 mt-4">Apakah anda yakin untuk menghapus?</h5>
              <p>
                Anda tidak akan bisa mengembalikan lagi data menu ini jika menghapusnya
              </p>
              <input type="hidden" name="menuid" id="menuid">
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

  <!-- Create menu modal -->
  <div class="modal fade" id="modal-project-create" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form class="" action="{{ url('/admin/menu') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <!-- Project name -->
            <div class="form-group">
              <label class="form-control-label">
                Nama Menu
              </label>
              <input type="text" name="nama" class="form-control">
              @error('nama')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <!-- Project description -->
            <div class="form-group">
              <label class="form-control-label mb-0">
                Deskripsi menu
              </label>
              <textarea class="form-control" data-toggle="autosize" name="deskripsi" rows="3"></textarea>
              @error('deskripsi')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <!-- Project privacy -->
            <div class="form-group">
              <label class="form-control-label">
                Kategori Produk
              </label>
              <div class="row">
                <div class="col-3">
                  <div class="custom-control custom-checkbox">
                    <input type="radio" class="custom-control-input" name="kategori" id="radio-project-1" value="mains">
                    <label class="custom-control-label form-control-label text-muted"
                      for="radio-project-1">Mains</label>
                  </div>
                </div>
                <div class="col-3">
                  <div class="custom-control custom-checkbox">
                    <input type="radio" class="custom-control-input" name="kategori" id="radio-project-2" value="lunch">
                    <label class="custom-control-label form-control-label text-muted"
                      for="radio-project-2">Lunch</label>
                  </div>
                </div>
                <div class="col-3">
                  <div class="custom-control custom-checkbox">
                    <input type="radio" class="custom-control-input" name="kategori" id="radio-project-3" value="dinner">
                    <label class="custom-control-label form-control-label text-muted"
                      for="radio-project-3">Dinner</label>
                  </div>
                </div>
                <div class="col-3">
                  <div class="custom-control custom-checkbox">
                    <input type="radio" class="custom-control-input" name="kategori" id="radio-project-4" value="drinks">
                    <label class="custom-control-label form-control-label text-muted"
                      for="radio-project-4">Drinks</label>
                  </div>
                </div>
              </div>
              @error('tipe')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="form-group">
              <label class="form-control-label">
                Harga
              </label>
              <input type="text" name="harga" class="form-control">
              @error('harga')
              <small class="text-danger">{{ $message }}</small>
              @enderror
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
                @error('gambar')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-sm btn-primary rounded-pill mr-auto">Save</button>
            <button type="button" class="btn btn-sm btn-link text-danger px-2" data-dismiss="modal">Batal</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Page title -->
  <div class="page-title">
    <div class="row justify-content-between align-items-center">
      <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-start mb-3 mb-md-0">
        <!-- Page title + create menu -->
        <div class="d-inline-block">
          <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Daftar Menu</h5>
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-end">
        <a href="#modal-project-create" class="btn btn-sm btn-white rounded-pill ml-4" data-toggle="modal">
          <span class="btn-inner--icon mr-2"><i class="far fa-plus"></i></span>
          Tambah Menu
        </a>
      </div>
    </div>
  </div>

  <!-- menu cards -->
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
  <div class="row">
    @foreach($foods as $food)
    <div class="col-xl-3 col-lg-4 col-sm-6">
      <div class="card hover-shadow-lg">
        <div class="card-header border-0 pb-0">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h6 class="mb-0">Menu {{$food->id}}</h6>
            </div>
          </div>
        </div>
        <div class="card-body text-center">
          <div class="avatar avatar-lg hover-translate-y-n3 mb-3">
            <img src="{{ url('/assets/img/'.$food->gambar) }}" alt="" class="img-fluid">
          </div>
          <h5 class="h2"><a href="card-listing.html#">{{$food->nama}}</a></h5>
          <h5 class="h6"><a href="card-listing.html#">Rp. {{$food->harga}}</a></h5>
          <span class="clearfix"></span>
        </div>
        <div class="card-footer">
          <div class="actions d-flex justify-content-between px-4">
            <form action="{{ url('/admin/menu/edit') }}" method="post">
              @csrf
              <input type="hidden" name="menuid" value="{{$food->id}}">
              <button type="submit" class="action-item"><i class="far fa-pencil"></i></button>
            </form>
            <a href="#delete-modal" class="action-item text-danger" id="delete-button" data-toggle="modal"
              data_menuid="{{$food->id}}">
              <i class="far fa-trash-alt"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  <!-- Footer -->
  <div class="footer pt-5 pb-4 footer-light" id="footer-main">
    <div class="row text-center text-sm-left align-items-sm-center">
      <div class="col-sm-6">
        <p class="text-sm mb-0">&copy; 2020 <a href="https://webpixels.io" class="h6 text-sm" target="_blank">Kelompok
            10B PBF</a>. All rights reserved.</p>
      </div>
    </div>
  </div>
</div>
@endsection

@section('footer')
<script>
  $(document).on('click','#delete-button',function(){
    var menuid=$(this).attr('data_menuid');
    $('#menuid').val(menuid);
    $('#delete-modal').modal('show');
  });

  $(document).ready(function() {
    $("#menu_nav").addClass("active");
    @if(Session::has('errors')) $('#modal-project-create').modal({show: true}); @endif
  });
</script>
@endsection