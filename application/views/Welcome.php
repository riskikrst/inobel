<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inovasi Belajar Pepak Bahasa Jawa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="<?= base_url('assets/opening/assets/img/favicon.png') ?>" rel="icon"> -->
  <!-- <link href="<?= base_url('assets/opening/assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Sofia|raleway" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/opening/assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/opening/assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/opening/assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/opening/assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/opening/assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/opening/assets/css/style.css') ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: TheEvent - v4.9.1
  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">
        <span class="font-normal"><?= $home['salam'] ?></span><br>
        <span><?= $home['nama_apk'] ?></span>
        <br/><br/>
        <span class="font-normal"><?= $home['nama_sekolah'] ?></span>
      </h1>
      <p class="mb-4 pb-0"></p>
      <a href="<?= site_url('home') ?>" class="about-btn scrollto">Mulai Sinau</a>
    </div>
  </section><!-- End Hero Section -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/opening/assets/vendor/aos/aos.js') ?>"></script>
  <script src="<?= base_url('assets/opening/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/opening/assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
  <script src="<?= base_url('assets/opening/assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
  <script src="<?= base_url('opening/assets/vendor/php-email-form/validate.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/opening/assets/js/main.js') ?>"></script>

</body>

</html>