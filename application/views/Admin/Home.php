<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/backend/assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/backend/assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/backend/assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/backend/assets/vendor/quill/quill.snow.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/backend/assets/vendor/quill/quill.bubble.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/backend/assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/backend/assets/vendor/simple-datatables/style.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/backend/assets/css/style.css') ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <!-- Toggle Sidebar -->
    <div class="d-flex align-items-center justify-content-between">
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <!-- End Toggle Sidebar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <!-- Profile Iamge Icon -->
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">
              <?php echo ucwords($this->session->userdata('username')) ?>
            </span>
          </a>
          <!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= site_url('admin_logout') ?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <!-- Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link active" href="<?= site_url('admin_home') ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->

      <!-- Daftar isi -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= site_url('daftar_isi') ?>">
          <i class="bi bi-grid"></i>
          <span>Bab</span>
        </a>
      </li>
      <!-- End Daftar isi -->

      <!-- Materi -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= site_url('materi') ?>">
          <i class="bi bi-grid"></i>
          <span>Materi</span>
        </a>
      </li>
      <!-- End Materi -->

      <!-- Setting -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= site_url('setting_page') ?>">
          <i class="bi bi-grid"></i>
          <span>Setting Halaman</span>
        </a>
      </li>
      <!-- End Setting -->

      <!-- Isi Materi -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="<?= site_url('isi_materi') ?>">
          <i class="bi bi-grid"></i>
          <span>Isi Materi</span>
        </a>
      </li> -->
      <!-- End Isi Materi -->

    </ul>

  </aside>
  <!-- ======= End Sidebar ======= -->

  <main id="main" class="main">
    <section class="section">

      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
                <?= $home['salam'] ?>
                <?= $home['nama_apk'] ?>
                <?= $home['nama_sekolah'] ?>
              </h5>
            </div>
          </div>

        </div>

      </div> <!-- end row -->

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer" class="footer"> -->
    <!-- <div class="copyright"> -->
      <!-- &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved -->
    <!-- </div> -->
    <!-- <div class="credits"> -->
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
    <!-- </div> -->
  <!-- </footer> -->
  <!-- End Footer -->

  <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/backend/assets/vendor/apexcharts/apexcharts.min.js') ?>"></script>
  <script src="<?= base_url('assets/backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/backend/assets/vendor/chart.js/chart.min.js') ?>"></script>
  <script src="<?= base_url('assets/backend/assets/vendor/echarts/echarts.min.js') ?>"></script>
  <script src="<?= base_url('assets/backend/assets/vendor/quill/quill.min.js') ?>"></script>
  <script src="<?= base_url('assets/backend/assets/vendor/simple-datatables/simple-datatables.js') ?>"></script>
  <script src="<?= base_url('assets/backend/assets/vendor/tinymce/tinymce.min.js') ?>"></script>
  <script src="<?= base_url('assets/backend/assets/vendor/php-email-form/validate.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/backend/assets/js/main.js') ?>"></script>
  <script src="<?= base_url('assets/backend/dataTables.min.js') ?>"></script>

</body>

</html>