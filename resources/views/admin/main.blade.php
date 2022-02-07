<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('judul')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/backend/assets/img/favicon.png" rel="icon">
  <link href="/backend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/backend/assets//vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/backend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/backend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/backend/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/backend/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/backend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/backend/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/backend/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">ADM AiMerch</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ auth()->user()->profile_photo_path }}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ auth()->user()->name }}</h6>
              <span>{{ auth()->user()->email }}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.show') }}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault();
                this.closest('form').submit();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
                </a>
              </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.index') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
    
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('article.index') }}">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>DATABASE</span>
        </a>
      </li><!-- End DATABASE Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.html">
          <i class="bi bi-envelope"></i>
          <span>Berita</span>
        </a>
      </li><!-- End Berita Nav -->
    </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">
      @yield('content')
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin & Dakasakti.id</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/backend/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/backend/assets/vendor/chart.js/chart.min.js"></script>
  <script src="/backend/assets/vendor/echarts/echarts.min.js"></script>
  <script src="/backend/assets/vendor/quill/quill.min.js"></script>
  <script src="/backend/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/backend/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="/backend/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/backend/assets/js/main.js"></script>

</body>

</html>