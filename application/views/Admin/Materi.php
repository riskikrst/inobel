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
  <link href="<?= base_url('assets/backend/dataTables.min.css') ?>" rel="stylesheet">

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
        <a class="nav-link collapsed" href="<?= site_url('admin_home') ?>">
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
        <a class="nav-link active" href="<?= site_url('materi') ?>">
          <i class="bi bi-grid"></i>
          <span>Materi</span>
        </a>
      </li>
      <!-- End Materi -->

      <!-- Kamus -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= site_url('kamus') ?>">
          <i class="bi bi-grid"></i>
          <span>Kamus</span>
        </a>
      </li>
      <!-- End Kamus -->

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
              <div><br/>
                <span class="card-title h5">
                  Daftar Materi
                </span>

                <a class="btn btn-sm btn-outline-primary float-end" data-bs-toggle="modal" data-bs-target="#ModalAdd">
                  <i class='bx bx-plus-circle'></i> Tambah Materi
                </a>
              </div><br/><br/>

              <!-- <div class="float-end"> -->
              
              <!-- </div> -->

              <table id="Tb_daftarisi" class="table display">
                <thead>
                  <tr>
                    <th width="5%" class="text-center">No.</th>
                    <th width="45%" class="text-center">Nama Materi</th>
                    <th width="35%" class="text-center">Bab</th>
                    <th width="15%" class="text-center">Opsi</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $no=1; foreach($materi as $m) { ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $m['nama'] ?></td>
                    <td><?= $m['judul'] ?></td>
                    <td>
                      <!-- <a class="btn btn-sm btn-outline-primary" href="<?= site_url('v_materi/'.$m['id']) ?>">
                        <i class="bx bx-edit-alt bx-sm"></i>
                      </a> -->

                      <a class="btn btn-sm btn-outline-primary" href="<?= site_url('isi_materi/'.$m['id']) ?>">
                        <i class="bx bx-plus-circle bx-sm"></i>
                      </a>

                    </td>
                  </tr>
                  <?php } ?>

                </tbody>
              </table>
            </div>
          </div>


          <!-- KUMPULAN MODAL -->
          <div class="modal fade" id="ModalAdd" tabindex="-1">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title font-weight-bold">Tambah Materi</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?php echo form_open_multipart('add_materi')?>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-lg-6">
                      <span class="font-weight-bold text-primary px-1">Bab</span>
                      <select class="form-select form-select-sm" name="id_bab">
                        <option value="">Pilih Bab</option>
                        <?php foreach($daftar_isi as $di) { ?>
                        <option value="<?= $di['id'] ?>"><?= $di['judul'] ?></option>
                        <?php } ?>
                      </select>
                    </div>

                    <div class="col-lg-6">
                      <span class="font-weight-bold text-primary px-1">Nama Materi</span>
                      <input class="form-control form-control-sm" name="nama" type="text" autocomplete="off" required>
                    </div>

                  </div><br/>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                <?php echo form_close() ?>

              </div>
            </div>
          </div>

        </div>

      </div> <!-- end row -->

    </section>

  </main><!-- End #main -->

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
  <script type="text/javascript" src="<?= base_url('assets/backend/jquery-351.js') ?>"></script>
  <script src="<?= base_url('assets/backend/assets/js/main.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/backend/dataTables.min.js') ?>"></script>

  <script>
    $(document).ready(function () {
      $('#Tb_daftarisi').DataTable();
  });
  </script>

</body>

</html>