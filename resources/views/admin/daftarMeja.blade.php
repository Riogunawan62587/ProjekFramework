@extends('layouts.admin_master')

@section('head')

@endsection

@section('page_content')
<!-- delete modal -->
<div class="modal modal-danger fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modal_5"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form action="/admin/meja/delete" method="post">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title h6" id="modal_title_6">Hapus Data Meja</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="py-3 text-center">
            <i class="fas fa-exclamation-circle fa-4x"></i>
            <h5 class="heading h4 mt-4">Apakah Anda Yakin?</h5>
            <p>
              Anda akan menghapus data. Langkah ini tidak dapat dikembalikan!
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

<div class="page-content">
  <!-- Create meja modal -->
  <div class="modal fade" id="modal-project-create" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form action="/admin/meja" method="post">
          @csrf
          <div class="modal-body">
            <!-- meja name -->
            <div class="form-group">
              <label class="form-control-label">
                Nomor Meja
              </label>
              <input type="text" name="nama" class="form-control">
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
      <div
        class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-start mb-3 mb-md-0">
        <!-- Page title + Go Back button -->
        <div class="d-inline-block">
          <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Daftar Meja</h5>
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-end">
        <a href="#modal-project-create" class="btn btn-sm btn-white rounded-pill ml-4" data-toggle="modal">
          <span class="btn-inner--icon mr-2"><i class="far fa-plus"></i></span>
          Tambah Meja
        </a>
      </div>
    </div>
  </div>

  <!-- alert message -->
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

  <!-- meja cards -->
  <div class="row">
    @foreach($tables as $table)
    <div class="col-xl-3 col-lg-4 col-sm-6">
      <div class="card hover-shadow-lg">
        <div class="card-body text-center">
          <a href="card-listing.html#" class="avatar rounded-circle avatar-lg hover-translate-y-n3 mb-3">
            <img alt="Image placeholder" src="/assets/admin/assets/img/theme/light/brand-avatar-1.png">
          </a>
          <h5 class="h2">{{$table->nama}}</h5>
          <span class="clearfix"></span>
          <span class="badge badge-pill badge-success">Aktif</span>
        </div>
        <div class="card-footer">
          <div class="actions d-flex justify-content-between px-4">
            <a href="#edit-modal-{{$table->id}}" class="action-item" data-toggle="modal">
              <i class="far fa-pencil"></i>
            </a>
            <a href="#delete-modal" class="action-item text-danger" id="delete-button" data-toggle="modal"
              data_tableid="{{$table->id}}">
              <i class="far fa-trash-alt"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- edit meja modal -->
    <div class="modal fade" id="edit-modal-{{$table->id}}" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <form action="/admin/meja/update" method="post">
            @csrf
            <div class="modal-body">
              <!-- Project name -->
              <div class="form-group">
                <label class="form-control-label">
                  Nama Meja
                </label>
                <input type="text" name="nama" value="{{$table->nama}}" class="form-control">
              </div>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="id" value="{{$table->id}}">
              <button type="submit" class="btn btn-sm btn-primary rounded-pill mr-auto">Save</button>
              <button type="button" class="btn btn-sm btn-link text-danger px-2"
                data-dismiss="modal">Batal</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    @endforeach
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
<script>
  $(document).on('click','#delete-button',function(){
    var tableid=$(this).attr('data_tableid');
    $('#tableid').val(tableid);
    $('#delete-modal').modal('show');
  });

  $(document).ready(function() {
    $("#meja_nav").addClass("active");
  });
</script>
@endsection
