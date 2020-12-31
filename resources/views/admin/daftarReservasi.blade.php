<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Purpose Application UI is the following chapter we've finished in order to create a complete and robust solution next to the already known Purpose Website UI.">
  <meta name="author" content="Webpixels">
  <title>Purpose – Application UI Kit</title>
  <!-- Favicon -->
  <link rel="icon" href="/assets/admin/assets/img/brand/favicon.png" type="image/png">
  <!-- Font Awesome 5 -->
  <!-- Sidenav header -->
  <link rel="stylesheet" href="/assets/admin/assets/libs/@fortawesome/fontawesome-pro/css/all.min.css"><!-- Purpose CSS -->
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
          <div class="sidenav-toggler sidenav-toggler-dark d-md-none" data-action="sidenav-unpin" data-target="#sidenav-main">
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
            <img alt="Image placeholder" src="https://preview.webpixels.io/purpose-application-ui-kit/assets/img/theme/light/team-1-800x800.jpg" class="">
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
        <a href="/admin/meja" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="far fa-tasks fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Daftar Meja</span>
        </a>
        <a href="/admin/reservasi" class="btn btn-square text-sm active">
          <span class="btn-inner--icon d-block"><i class="far fa-columns fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Daftar Reservasi</span>
        </a>
        <a href="/admin/pengguna" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="far fa-users-cog fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Daftar Pengguna</span>
        </a>
      </div>
    </div>
    <!-- Content -->
    <div class="main-content position-relative">
      <!-- Main nav -->
      <nav class="navbar navbar-main navbar-expand-lg navbar-dark bg-primary navbar-border" id="navbar-main">
        <div class="container-fluid">
          <!-- Brand + Toggler (for mobile devices) -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- User's navbar -->
          <div class="navbar-user d-lg-none ml-auto">
            <ul class="navbar-nav flex-row align-items-center">
              <li class="nav-item">
                <a href="card-listing.html#" class="nav-link nav-link-icon sidenav-toggler" data-action="sidenav-pin" data-target="#sidenav-main"><i class="far fa-bars"></i></a>
              </li>
              <li class="nav-item">
                <a href="card-listing.html#" class="nav-link nav-link-icon" data-action="omnisearch-open" data-target="#omnisearch"><i class="far fa-search"></i></a>
              </li>
              <li class="nav-item dropdown dropdown-animate">
                <a class="nav-link nav-link-icon" href="card-listing.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-bell"></i></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                  <div class="py-3 px-3">
                    <h5 class="heading h6 mb-0">Notifications</h5>
                  </div>
                  <div class="list-group list-group-flush">
                    <a href="card-listing.html#" class="list-group-item list-group-item-action">
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="2 hrs ago">
                        <div>
                          <span class="avatar bg-primary text-white rounded-circle">AM</span>
                        </div>
                        <div class="flex-fill ml-3">
                          <div class="h6 text-sm mb-0">Alex Michael <small class="float-right text-muted">2 hrs ago</small></div>
                          <p class="text-sm lh-140 mb-0">
                            Some quick example text to build on the card title.
                          </p>
                        </div>
                      </div>
                    </a>
                    <a href="card-listing.html#" class="list-group-item list-group-item-action">
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="3 hrs ago">
                        <div>
                          <span class="avatar bg-warning text-white rounded-circle">SW</span>
                        </div>
                        <div class="flex-fill ml-3">
                          <div class="h6 text-sm mb-0">Sandra Wayne <small class="float-right text-muted">3 hrs ago</small></div>
                          <p class="text-sm lh-140 mb-0">
                            Some quick example text to build on the card title.
                          </p>
                        </div>
                      </div>
                    </a>
                    <a href="card-listing.html#" class="list-group-item list-group-item-action">
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="5 hrs ago">
                        <div>
                          <span class="avatar bg-info text-white rounded-circle">JM</span>
                        </div>
                        <div class="flex-fill ml-3">
                          <div class="h6 text-sm mb-0">Jason Miller <small class="float-right text-muted">5 hrs ago</small></div>
                          <p class="text-sm lh-140 mb-0">
                            Some quick example text to build on the card title.
                          </p>
                        </div>
                      </div>
                    </a>
                    <a href="card-listing.html#" class="list-group-item list-group-item-action">
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="2 hrs ago">
                        <div>
                          <span class="avatar bg-dark text-white rounded-circle">MJ</span>
                        </div>
                        <div class="flex-fill ml-3">
                          <div class="h6 text-sm mb-0">Mike Thomson <small class="float-right text-muted">2 hrs ago</small></div>
                          <p class="text-sm lh-140 mb-0">
                            Some quick example text to build on the card title.
                          </p>
                        </div>
                      </div>
                    </a>
                    <a href="card-listing.html#" class="list-group-item list-group-item-action">
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="3 hrs ago">
                        <div>
                          <span class="avatar bg-primary text-white rounded-circle">RN</span>
                        </div>
                        <div class="flex-fill ml-3">
                          <div class="h6 text-sm mb-0">Richard Nixon <small class="float-right text-muted">3 hrs ago</small></div>
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
                <a class="nav-link pr-lg-0" href="card-listing.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <a class="nav-link pr-lg-0" href="card-listing.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                  <a href="card-listing.html#!" class="dropdown-item">
                    <i class="far fa-sign-out-alt"></i>
                    <span>Logout</span>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Omnisearch -->

      <!-- Page content -->
      <div class="page-content">
        <!-- Create project modal -->
        <div class="modal fade" id="modal-project-create" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <!-- Project name -->
                <div class="form-group">
                  <label class="form-control-label">
                    Nama Menu
                  </label>
                  <input type="text" class="form-control">
                </div>
                <!-- Project description -->
                <div class="form-group">
                  <label class="form-control-label mb-0">
                    Deskripsi menu
                  </label>
                  <textarea class="form-control" data-toggle="autosize" rows="3"></textarea>
                </div>
                <!-- Project privacy -->
                <div class="form-group">
                  <label class="form-control-label">
                    Kategori Produk
                  </label>
                  <div class="row">
                    <div class="col-3">
                      <div class="custom-control custom-checkbox">
                        <input type="radio" class="custom-control-input" name="project-privacy" id="radio-project-1">
                        <label class="custom-control-label form-control-label text-muted" for="radio-project-1">Mains</label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="custom-control custom-checkbox">
                        <input type="radio" class="custom-control-input" name="project-privacy" id="radio-project-2">
                        <label class="custom-control-label form-control-label text-muted" for="radio-project-2">Lunch</label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="custom-control custom-checkbox">
                        <input type="radio" class="custom-control-input" name="project-privacy" id="radio-project-3" checked>
                        <label class="custom-control-label form-control-label text-muted" for="radio-project-3">Dinner</label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="custom-control custom-checkbox">
                        <input type="radio" class="custom-control-input" name="project-privacy" id="radio-project-3" checked>
                        <label class="custom-control-label form-control-label text-muted" for="radio-project-3">Drinks</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Project members -->
                <div class="form-group">
                  <label class="form-control-label">
                    Harga
                  </label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <div>
                    <label class="form-control-label">
                      Upload Gambar Menu
                    </label>
                    <input type="file" name="file-1[]" id="file-1" class="custom-input-file" data-multiple-caption="{count} files selected" multiple="" />
                    <label for="file-1">
                      <i class="fa fa-upload"></i>
                      <span>Choose a file…</span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary rounded-pill mr-auto">Save</button>
                <button type="button" class="btn btn-sm btn-link text-danger px-2" data-dismiss="modal">Batal</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Page title -->
        <div class="page-title">
          <div class="row justify-content-between align-items-center">
            <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-start mb-3 mb-md-0">
              <!-- Page title + Go Back button -->
              <div class="d-inline-block">
                <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Daftar Reservasi</h5>
              </div>
            </div>
          </div>
        </div>
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
                  <a href="table-listing.html#" class="input-group-text bg-transparent" data-action="search-close" data-target="#actions-search"><i class="far fa-times"></i></a>
                </div>
              </div>
            </div>
            <div class="row justify-content-between align-items-center">
              <div class="col">
                <h6 class="d-inline-block mb-0">Reservasi</h6>
              </div>
              <div class="col text-right">
                <div class="actions"><a href="table-listing.html#" class="action-item mr-3" data-action="search-open" data-target="#actions-search"><i class="far fa-search"></i></a>
                  <div class="dropdown mr-3">
                    <a href="table-listing.html#" class="action-item" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                  <th scope="col" class="sort" data-sort="budget">Nama Pemesan</th>
                  <th scope="col" class="sort" data-sort="status">Tanggal</th>
                  <th scope="col">Jam</th>
                  <th scope="col" class="sort" data-sort="completion">Nomor Meja</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody class="list">
                <tr>
                  <th scope="row" class="text-center">
                    1
                  </th>
                  <td class="budget">
                    Rio Gunawan Pratama
                  </td>
                  <td>
                    28-12-2020
                  </td>
                  <td>
                    15.15 WIB
                  </td>
                  <td>
                    Meja 5
                  </td>
                  <td class="text-right">
                    <div class="dropdown" data-toggle="dropdown">
                      <a href="table-listing.html#" class="action-item" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-ellipsis-h"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="table-listing.html#" class="dropdown-item">Lihat</a>
                        <a href="table-listing.html#" class="dropdown-item">Hapus</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row" class="text-center">
                    1
                  </th>
                  <td class="budget">
                    Rio Gunawan Pratama
                  </td>
                  <td>
                    28-12-2020
                  </td>
                  <td>
                    15.15 WIB
                  </td>
                  <td>
                    Meja 5
                  </td>
                  <td class="text-right">
                    <div class="dropdown" data-toggle="dropdown">
                      <a href="table-listing.html#" class="action-item" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-ellipsis-h"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="table-listing.html#" class="dropdown-item">Lihat</a>
                        <a href="table-listing.html#" class="dropdown-item">Hapus</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row" class="text-center">
                    1
                  </th>
                  <td class="budget">
                    Rio Gunawan Pratama
                  </td>
                  <td>
                    28-12-2020
                  </td>
                  <td>
                    15.15 WIB
                  </td>
                  <td>
                    Meja 5
                  </td>
                  <td class="text-right">
                    <div class="dropdown" data-toggle="dropdown">
                      <a href="table-listing.html#" class="action-item" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-ellipsis-h"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="table-listing.html#" class="dropdown-item">Lihat</a>
                        <a href="table-listing.html#" class="dropdown-item">Hapus</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row" class="text-center">
                    1
                  </th>
                  <td class="budget">
                    Rio Gunawan Pratama
                  </td>
                  <td>
                    28-12-2020
                  </td>
                  <td>
                    15.15 WIB
                  </td>
                  <td>
                    Meja 5
                  </td>
                  <td class="text-right">
                    <div class="dropdown" data-toggle="dropdown">
                      <a href="table-listing.html#" class="action-item" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-ellipsis-h"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="table-listing.html#" class="dropdown-item">Lihat</a>
                        <a href="table-listing.html#" class="dropdown-item">Hapus</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row" class="text-center">
                    1
                  </th>
                  <td class="budget">
                    Rio Gunawan Pratama
                  </td>
                  <td>
                    28-12-2020
                  </td>
                  <td>
                    15.15 WIB
                  </td>
                  <td>
                    Meja 5
                  </td>
                  <td class="text-right">
                    <div class="dropdown" data-toggle="dropdown">
                      <a href="table-listing.html#" class="action-item" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-ellipsis-h"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="table-listing.html#" class="dropdown-item">Lihat</a>
                        <a href="table-listing.html#" class="dropdown-item">Hapus</a>
                      </div>
                    </div>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
        <!-- Load more -->

      <!-- Footer -->
      <div class="footer pt-5 pb-4 footer-light" id="footer-main">
        <div class="row text-center text-sm-left align-items-sm-center">
          <div class="col-sm-6">
            <p class="text-sm mb-0">&copy; 2020 <a href="https://webpixels.io" class="h6 text-sm" target="_blank">Kelompok 7 PBF</a>. All rights reserved.</p>
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
</body>

</html>
