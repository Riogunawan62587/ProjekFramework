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
        <form action="/admin/artikel/delete" method="post">
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
                Anda tidak akan bisa mengembalikan lagi data ini jika menghapusnya
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

  <!-- Page title -->
  <div class="page-title">
    <div class="row justify-content-between align-items-center">
      <div
        class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-start mb-3 mb-md-0">
        <!-- Page title + Go Back button -->
        <div class="d-inline-block">
          <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Detail Artikel</h5>
        </div>
      </div>
    </div>
  </div>

  <!-- Alert message -->
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

  <!-- Article Card -->
  <div class="row align-items-center">
    <div class="col-xl-12 col-md-12">
      <div class="card card-stats">
        <!-- Card body -->
        <div class="card-body">
          <div class="row">
            <div class="col">
              <div class="row align-items-center">
                <div class="col-auto">
                  <h6>{{$article->tanggal}}</h6>
                </div>
              </div>
              <div class="row">
                <h1 class="col-xl-12">{{$article->judul}}</h1>
              </div>
              <div class="row mb-3 mt-2">
                <div class="col-md-12 text-center">
                  <img src="/assets/img/{{$article->gambar}}" class="img-fluid rounded">
                </div>
              </div>
              <div class="row">
                <h6 class="text-muted mb-1 col-xl-12">{!! $article->deskripsi !!}</h6>
              </div>
              <div class="row justify-content-end align-items-center">
                <form class="col-auto" action="/admin/artikel/edit" method="post">
                  @csrf
                  <input type="hidden" name="article_id" value="{{$article->id}}">
                  <button type="submit" name="button" class="btn btn-primary btn-sm">Edit</button>
                </form>
                <a href="#delete-modal" class="action-item text-danger" id="delete-button" data-toggle="modal"
                  data_articleid="{{$article->id}}">
                  <i class="far fa-trash-alt"></i>
                  Hapus
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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
  $(document).on('click','#delete-button',function(){
    var articleid=$(this).attr('data_articleid');
    $('#articleid').val(articleid);
    $('#delete-modal').modal('show');
  });

  $(document).ready(function() {
    $("#artikel_nav").addClass("active");
  });
</script>
@endsection
