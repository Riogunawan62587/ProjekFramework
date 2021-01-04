<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description"
    content="Purpose Application UI is the following chapter we've finished in order to create a complete and robust solution next to the already known Purpose Website UI.">
  <meta name="author" content="Webpixels">
  <title>Nusantara Dashboard</title>
  <!-- Favicon -->
  <link rel="icon" href="/assets/admin/assets/img/brand/favicon.png" type="image/png">
  <!-- Font Awesome 5 -->
  <!-- Sidenav header -->
  <link rel="stylesheet" href="/assets/admin/assets/libs/@fortawesome/fontawesome-pro/css/all.min.css">
  <!-- Purpose CSS -->
  <link rel="stylesheet" href="/assets/admin/assets/css/purpose.css" id="stylesheet">
</head>

<body class="application application-offset">
  <!-- Chat modal -->
  <!-- Customizer modal -->

  <!-- Application container -->
  <div class="container-fluid container-application">
    <!-- Sidenav -->
    <div class="sidenav" id="sidenav-main">
      <div class="sidenav-header d-flex align-items-center text-center">
        <h1 class="text-white">Nusantara</h1>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler sidenav-toggler-dark d-md-none" data-action="sidenav-unpin"
            data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- User mini profile -->
      <div class="sidenav-user d-flex flex-column align-items-center justify-content-between text-center">
        <!-- Avatar -->
        <div>
          <a href="card-listing.html#" class="avatar rounded-circle avatar-xl">
            <img alt="Image placeholder"
              src="https://preview.webpixels.io/purpose-application-ui-kit/assets/img/theme/light/team-1-800x800.jpg"
              class="">
          </a>
          <div class="mt-4">
            <h5 class="mb-0 text-white">Matte</h5>
            <span class="d-block text-sm text-white opacity-8 mb-3">Admin Restoran</span>
          </div>
        </div>
      </div>
      <!-- Application nav -->
      <div class="nav-application clearfix">
        <a href="/admin/dashboard" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="far fa-home fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Dashboard</span>
        </a>
        <a href="/admin/menu" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="far fa-project-diagram fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Daftar Menu</span>
        </a>
        <a href="/admin/meja" class="btn btn-square text-sm active">
          <span class="btn-inner--icon d-block"><i class="far fa-tasks fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Daftar Meja</span>
        </a>
        <a href="/admin/reservasi" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="far fa-columns fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Daftar Reservasi</span>
        </a>
        <a href="/admin/pengguna" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="far fa-users-cog fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Daftar Pengguna</span>
        </a>
        <a href="/admin/artikel" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="far fa-newspaper fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Daftar Artikel</span>
        </a>
      </div>
    </div>
    <!-- Content -->
    <div class="main-content position-relative">
      <!-- Main nav -->
      <nav class="navbar navbar-main navbar-expand-lg navbar-dark bg-primary navbar-border" id="navbar-main">
        <div class="container-fluid">
          <!-- Brand + Toggler (for mobile devices) -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse"
            aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- User's navbar -->
          <div class="navbar-user d-lg-none ml-auto">
            <ul class="navbar-nav flex-row align-items-center">
              <li class="nav-item">
                <a href="card-listing.html#" class="nav-link nav-link-icon sidenav-toggler" data-action="sidenav-pin"
                  data-target="#sidenav-main"><i class="far fa-bars"></i></a>
              </li>
              <li class="nav-item">
                <a href="card-listing.html#" class="nav-link nav-link-icon" data-action="omnisearch-open"
                  data-target="#omnisearch"><i class="far fa-search"></i></a>
              </li>
              <li class="nav-item dropdown dropdown-animate">
                <a class="nav-link nav-link-icon" href="card-listing.html#" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false"><i class="far fa-bell"></i></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                  <div class="py-3 px-3">
                    <h5 class="heading h6 mb-0">Notifications</h5>
                  </div>
                  <div class="list-group list-group-flush">
                    <a href="card-listing.html#" class="list-group-item list-group-item-action">
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                        data-title="2 hrs ago">
                        <div>
                          <span class="avatar bg-primary text-white rounded-circle">AM</span>
                        </div>
                        <div class="flex-fill ml-3">
                          <div class="h6 text-sm mb-0">Alex Michael <small class="float-right text-muted">2 hrs
                              ago</small></div>
                          <p class="text-sm lh-140 mb-0">
                            Some quick example text to build on the card title.
                          </p>
                        </div>
                      </div>
                    </a>
                    <a href="card-listing.html#" class="list-group-item list-group-item-action">
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                        data-title="3 hrs ago">
                        <div>
                          <span class="avatar bg-warning text-white rounded-circle">SW</span>
                        </div>
                        <div class="flex-fill ml-3">
                          <div class="h6 text-sm mb-0">Sandra Wayne <small class="float-right text-muted">3 hrs
                              ago</small></div>
                          <p class="text-sm lh-140 mb-0">
                            Some quick example text to build on the card title.
                          </p>
                        </div>
                      </div>
                    </a>
                    <a href="card-listing.html#" class="list-group-item list-group-item-action">
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                        data-title="5 hrs ago">
                        <div>
                          <span class="avatar bg-info text-white rounded-circle">JM</span>
                        </div>
                        <div class="flex-fill ml-3">
                          <div class="h6 text-sm mb-0">Jason Miller <small class="float-right text-muted">5 hrs
                              ago</small></div>
                          <p class="text-sm lh-140 mb-0">
                            Some quick example text to build on the card title.
                          </p>
                        </div>
                      </div>
                    </a>
                    <a href="card-listing.html#" class="list-group-item list-group-item-action">
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                        data-title="2 hrs ago">
                        <div>
                          <span class="avatar bg-dark text-white rounded-circle">MJ</span>
                        </div>
                        <div class="flex-fill ml-3">
                          <div class="h6 text-sm mb-0">Mike Thomson <small class="float-right text-muted">2 hrs
                              ago</small></div>
                          <p class="text-sm lh-140 mb-0">
                            Some quick example text to build on the card title.
                          </p>
                        </div>
                      </div>
                    </a>
                    <a href="card-listing.html#" class="list-group-item list-group-item-action">
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                        data-title="3 hrs ago">
                        <div>
                          <span class="avatar bg-primary text-white rounded-circle">RN</span>
                        </div>
                        <div class="flex-fill ml-3">
                          <div class="h6 text-sm mb-0">Richard Nixon <small class="float-right text-muted">3 hrs
                              ago</small></div>
                          <p class="text-sm lh-140 mb-0">
                            Some quick example text to build on the card title.
                          </p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="py-3 text-center">
                    <a href="card-listing.html#" class="link link-sm link--style-3">View all notifications</a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown dropdown-animate">
                <a class="nav-link pr-lg-0" href="card-listing.html#" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-4-800x800.jpg">
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                  <h6 class="dropdown-header px-0">Hi, Heather!</h6>
                  <a href="../user/profile.html" class="dropdown-item">
                    <i class="far fa-user"></i>
                    <span>My profile</span>
                  </a>
                  <a href="../account/settings.html" class="dropdown-item">
                    <i class="far fa-cog"></i>
                    <span>Settings</span>
                  </a>
                  <a href="../account/billing.html" class="dropdown-item">
                    <i class="far fa-credit-card"></i>
                    <span>Billing</span>
                  </a>
                  <a href="../shop/orders.html" class="dropdown-item">
                    <i class="far fa-shopping-basket"></i>
                    <span>Orders</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="../authentication/login.html" class="dropdown-item">
                    <i class="far fa-sign-out-alt"></i>
                    <span>Logout</span>
                  </a>
                </div>
              </li>
            </ul>
          </div>
          <!-- Navbar nav -->
          <div class="collapse navbar-collapse navbar-collapse-fade" id="navbar-main-collapse">
            <!-- Right menu -->
            <ul class="navbar-nav ml-lg-auto align-items-center d-none d-lg-flex">
              <li class="nav-item dropdown dropdown-animate">
                <a class="nav-link pr-lg-0" href="card-listing.html#" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <div class="media media-pill align-items-center">
                    <span class="avatar rounded-circle">
                      <img alt="Image placeholder" src="/assets/admin/assets/img/theme/light/team-4-800x800.jpg">
                    </span>
                    <div class="ml-2 d-none d-lg-block">
                      <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
                    </div>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                  <h6 class="dropdown-header px-0">Hi, John!</h6>
                  <a href="card-listing.html#!" class="dropdown-item">
                    <i class="far fa-user"></i>
                    <span>My profile</span>
                  </a>
                  <a href="card-listing.html#!" class="dropdown-item">
                    <i class="far fa-cog"></i>
                    <span>Settings</span>
                  </a>
                  <a href="card-listing.html#!" class="dropdown-item">
                    <i class="far fa-credit-card"></i>
                    <span>Billing</span>
                  </a>
                  <a href="card-listing.html#!" class="dropdown-item">
                    <i class="far fa-tasks"></i>
                    <span>Activity</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  @if (Auth::check() && Auth::user())
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
                    <i class="far fa-sign-out-alt"></i>
                    <span>Logout</span>
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                  @endif
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Omnisearch -->

      <!-- delete modal -->
      <div class="modal modal-danger fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modal_5"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <form action="/admin/meja/delete" method="post">
              @csrf
              <div class="modal-header">
                <h5 class="modal-title h6" id="modal_title_6">This is way to dangerous</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="py-3 text-center">
                  <i class="fas fa-exclamation-circle fa-4x"></i>
                  <h5 class="heading h4 mt-4">Should we stop now?</h5>
                  <p>
                    You can easy create stackable modal boxes. For example, your inline content or Ajax response can
                    contain a gallery:
                  </p>
                  <input type="hidden" name="tableid" id="tableid">
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

      <!-- Page content -->
      <div class="page-content">
        <!-- Create project modal -->
        <div class="modal fade" id="modal-project-create" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <form action="/admin/meja" method="post">
                @csrf
                <div class="modal-body">
                  <!-- Project name -->
                  <div class="form-group">
                    <label class="form-control-label">
                      Nama Meja
                    </label>
                    <input type="text" name="nama" class="form-control">
                  </div>
                  <!-- Project privacy -->
                  <div class="form-group">
                    <label class="form-control-label">
                      Kapasitas Orang
                    </label>
                    <div class="row">
                      <div class="col-2">
                        <div class="custom-control custom-checkbox">
                          <input type="radio" class="custom-control-input" name="kapasitas" value="1"
                            id="radio-project-1">
                          <label class="custom-control-label form-control-label text-muted"
                            for="radio-project-1">1</label>
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="custom-control custom-checkbox">
                          <input type="radio" class="custom-control-input" name="kapasitas" value="2"
                            id="radio-project-2">
                          <label class="custom-control-label form-control-label text-muted"
                            for="radio-project-2">2</label>
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="custom-control custom-checkbox">
                          <input type="radio" class="custom-control-input" name="kapasitas" value="3"
                            id="radio-project-3">
                          <label class="custom-control-label form-control-label text-muted"
                            for="radio-project-3">3</label>
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="custom-control custom-checkbox">
                          <input type="radio" class="custom-control-input" name="kapasitas" value="4"
                            id="radio-project-4">
                          <label class="custom-control-label form-control-label text-muted"
                            for="radio-project-4">4</label>
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="custom-control custom-checkbox">
                          <input type="radio" class="custom-control-input" name="kapasitas" value="5"
                            id="radio-project-5">
                          <label class="custom-control-label form-control-label text-muted"
                            for="radio-project-5">5</label>
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="custom-control custom-checkbox">
                          <input type="radio" class="custom-control-input" name="kapasitas" value="6"
                            id="radio-project-6">
                          <label class="custom-control-label form-control-label text-muted"
                            for="radio-project-6">6</label>
                        </div>
                      </div>
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
        <!-- Project cards -->
        <div class="row">
          @foreach($tables as $table)
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="card hover-shadow-lg">
              <div class="card-body text-center">
                <a href="card-listing.html#" class="avatar rounded-circle avatar-lg hover-translate-y-n3 mb-3">
                  <img alt="Image placeholder" src="/assets/admin/assets/img/theme/light/brand-avatar-1.png">
                </a>
                <h5 class="h2">{{$table->nama}}</h5>
                <h6><i class="fas fa-user-friends"></i> {{$table->kapasitas}}</h6>
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
                    <!-- Project privacy -->
                    <div class="form-group">
                      <label class="form-control-label">
                        Kapasitas Orang
                      </label>
                      <div id="kapasitas-select" class="tab-pane tab-example-result fade show active" role="tabpanel"
                        aria-labelledby="select-menu-result-tab">
                        <select class="custom-select" name="kapasitas">
                          <option selected hidden>Pilih Kapasitas</option>
                          <option value="1" @if($table->kapasitas == 1) selected @endif>1</option>
                          <option value="2" @if($table->kapasitas == 2) selected @endif>2</option>
                          <option value="3" @if($table->kapasitas == 3) selected @endif>3</option>
                          <option value="4" @if($table->kapasitas == 4) selected @endif>4</option>
                          <option value="5" @if($table->kapasitas == 5) selected @endif>5</option>
                          <option value="6" @if($table->kapasitas == 6) selected @endif>6</option>
                        </select>
                      </div>
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
    </div>
    <!-- Scripts -->
    <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
    <script src="/assets/admin/assets/js/purpose.core.js"></script>
    <!-- Page JS -->
    <script src="/assets/admin/assets/libs/autosize/dist/autosize.min.js"></script>
    <script src="/assets/admin/assets/libs/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <!-- Purpose JS -->
    <script src="/assets/admin/assets/js/purpose.js"></script>
    <!-- Demo JS - remove it when starting your project -->
    <script src="/assets/admin/assets/js/demo.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-104437451-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-104437451-1');
    </script>
    <script>
      $(document).on('click','#delete-button',function(){
        var tableid=$(this).attr('data_tableid');
        $('#tableid').val(tableid);
        $('#delete-modal').modal('show');
    });
    </script>
</body>

</html>