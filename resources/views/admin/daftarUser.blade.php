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
        <form action="/admin/pengguna/hapus" method="post">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title h6" id="modal_title_6">Konfirmasi Hapus</h5>
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
              <input type="hidden" name="user_id" id="user_id">
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


  <!-- Page title -->
  <div class="page-title">
    <div class="row justify-content-between align-items-center">
      <div
        class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-start mb-3 mb-md-0">
        <!-- Page title + Go Back button -->
        <div class="d-inline-block">
          <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Daftar Pengguna</h5>
        </div>
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

  <!-- Project cards -->
  <div class="card">
    <!-- Card header -->
    <div class="card-header actions-toolbar border-0">
      <div class="actions-search" id="actions-search">
        <div class="input-group input-group-merge input-group-flush">
          <div class="input-group-prepend">
            <span class="input-group-text bg-transparent"><i class="far fa-search"></i></span>
          </div>
          <input type="text" class="form-control form-control-flush" placeholder="Type and hit enter ...">
          <div class="input-group-append">
            <a href="table-listing.html#" class="input-group-text bg-transparent" data-action="search-close"
              data-target="#actions-search"><i class="far fa-times"></i></a>
          </div>
        </div>
      </div>
      <div class="row justify-content-between align-items-center">
        <div class="col">
          <h6 class="d-inline-block mb-0">Pengguna</h6>
        </div>
        <div class="col text-right">
          <div class="actions"><a href="table-listing.html#" class="action-item mr-3" data-action="search-open"
              data-target="#actions-search"><i class="far fa-search"></i></a>
            <div class="dropdown mr-3">
              <a href="table-listing.html#" class="action-item" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="far fa-filter"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="table-listing.html#">
                  <i class="far fa-sort-amount-down"></i>Newest
                </a>
                <a class="dropdown-item" href="table-listing.html#">
                  <i class="far fa-sort-alpha-down"></i>From A-Z
                </a>
                <a class="dropdown-item" href="table-listing.html#">
                  <i class="far fa-sort-alpha-up"></i>From Z-A
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- Table -->
    <div class="table-responsive">
      <table class="table align-items-center">
        <thead>
          <tr>
            <th scope="col" class="sort text-center" data-sort="name">ID</th>
            <th scope="col" class="sort" data-sort="budget">Nama Lengkap</th>
            <th scope="col" class="sort" data-sort="status">Tanggal Pendaftaran</th>
            <th scope="col">Nomor Telepon</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody class="list">
          @foreach($users as $user)
          <tr>
            <th scope="row" class="text-center">
              {{$user->id}}
            </th>
            <td class="budget">
              {{$user->name}}
            </td>
            <td>
              {{$user->created_at}}
            </td>
            <td>
              {{$user->nomor_telepon}}
            </td>
            <td class="text-right">
              <div class="dropdown" data-toggle="dropdown">
                <a href="#" class="action-item" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="far fa-ellipsis-h"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <form action="/admin/pengguna/detail" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{$user->id}}">
                    <button type="submit" class="dropdown-item">Lihat</button>
                  </form>
                  <a href="#delete-modal" class="dropdown-item" id="delete-button" data-toggle="modal" data_userid="{{$user->id}}">Hapus</a>
                </div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <!-- Load more -->

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
    var user_id=$(this).attr('data_userid');
    $('#user_id').val(user_id);
    $('#delete-modal').modal('show');
  });

  $(document).ready(function() {
    $("#pengguna_nav").addClass("active");
  });
</script>
@endsection
