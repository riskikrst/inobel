<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Inovasi Belajar Pepak Bahasa Jawa</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url('assets/css/styles.css') ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/backend/assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
    </head>
    <body id="page-top">
        
        
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <a class="btn btn-primary btn-sm" href="<?= site_url('home') ?>">
                    <i class="bx bxs-chevrons-left bx-sm"></i><i class="bx bxs-chevrons-left bx-sm"></i>
                </a>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <h5 class="text-center text-uppercase text-secondary mb-0"> <?= $detail_materi['nama'] ?> </h5>
                    <div class="divider-custom-line"></div>
                </div>
                
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item-->
                    
                    <div class="col-md-12 col-lg-12 mb-12">
                        <?= $detail_materi['isi'] ?>
                    </div>
                    <!-- Portfolio Item-->

                </div>
            </div>
        </section>
        
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Lilik Sri Wahyuni, S.Pd</small></div>
        </div>

        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <h6 class="portfolio-modal-title text-secondary text-uppercase mb-0">Daftar Materi</h6>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center p-2">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12" id="DaftarMateri">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
        <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    </body>
</html>