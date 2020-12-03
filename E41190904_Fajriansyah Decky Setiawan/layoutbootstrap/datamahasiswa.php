<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Sistem Akademik</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="formmahasiswa.php">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Form Mahasiswa  </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="formdosen.php">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Form Dosen</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="datamahasiswa.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Data Mahasiswa</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="datadosen.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Data Dosen</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form --> 
          <div>
            <h1 style="color: white;">
              SISTEM AKADEMIK
            </h1>
          </div>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-primary pb-5">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Data Mahasiswa</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="name mb-0 text-sm" data-sort="name">NIM</th>
                    <th scope="col" class="name mb-0 text-sm" data-sort="budget">NAMA</th>
                   <th scope="col" class="name mb-0 text-sm" data-sort="status">ALAMAT</th>
                    <th scope="col" class="name mb-0 text-sm" data-sort="status">TANGGAL LAHIR</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        </a>
                        <div class="media-body">
                          <span class="sort">E41190904</span>
                        </div>
                      </div>
                    </th>
                    <th scope="row">
                      <div class="media align-items-center">
                        </a>
                        <div class="media-body">
                          <span class="sort">Fajriansyah Decky Setiawan</span>
                        </div>
                      </div>
                    </th>
                    <th scope="row">
                      <div class="media align-items-center">
                        </a>
                        <div class="media-body">
                          <span class="sort">Madura</span>
                        </div>
                      </div>
                    </th>
                    <th scope="row">
                      <div class="media align-items-center">
                        </a>
                        <div class="media-body">
                          <span class="sort">24-12-2000</span>
                        </div>
                      </div>
                    </th>
                    <tr>
                      <th scope="row">
                        <div class="media align-items-center">
                          </a>
                          <div class="media-body">
                            <span class="sort">E41190905</span>
                          </div>
                        </div>
                      </th>
                      <th scope="row">
                        <div class="media align-items-center">
                          </a>
                          <div class="media-body">
                            <span class="sort">Anya Geraldine</span>
                          </div>
                        </div>
                      </th>
                      <th scope="row">
                        <div class="media align-items-center">
                          </a>
                          <div class="media-body">
                            <span class="sort">Madura</span>
                          </div>
                        </div>
                      </th>
                      <th scope="row">
                        <div class="media align-items-center">
                          </a>
                          <div class="media-body">
                            <span class="sort">24-12-2002</span>
                          </div>
                        </div>
                      </th>
                </tbody>
              </table>
            </div>
            <!-- Card footer -->
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">By Decky</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">By Decky</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
</body>

</html>