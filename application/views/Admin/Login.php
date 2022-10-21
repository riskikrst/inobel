<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Page</title>
  <link rel="stylesheet" href="<?= base_url('assets/backend/style.css') ?>">
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <h4>Admin <?= $page['nama_sekolah'] ?></h4>
              <form id="flogin" class="pt-3" action="<?= site_url('admin_login'); ?>" method="post" role="login"></form>
                <div class="form-group">
                  <input form="flogin" type="email" class="form-control form-control-lg" name="username" placeholder="Username" autocomplete="off" required>
                </div>

                <div class="form-group">
                  <input form="flogin" type="password" class="form-control form-control-lg" name="password" placeholder="Password" autocomplete="off" required>
                </div>
                
                <div class="mt-3">
                    <button form="flogin" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="submit" value="login">
                        SIGN IN
                    </button>
                </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
</body>

</html>