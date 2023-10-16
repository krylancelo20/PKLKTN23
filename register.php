<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title><?= $title; ?></title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico') ?>" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
      <!-- Chart list Js -->
      <link rel="stylesheet" href="<?= base_url('assets/./js/chartist/chartist.min.css') ?>">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="<?= base_url('assets/css/typography.css') ?>">
      <!-- Style CSS -->
      <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>">
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <?php
    $errors = session()->getFlashdata('errors');
    if (!empty($errors)) { ?>
      <div class="alert alert-danger" role="alert">
        <ul>
          <?php foreach ($errors as $key => $value) { ?>
            <li><?= esc($value); ?></li>
          <?php } ?>
        </ul>
      </div>
    <?php  } ?>
    <?php

    if (session()->getFlashdata('pesan')) {
      echo '<div class="alert alert-warning" role="alert">';
      echo session()->getFlashdata('pesan');
      echo '</div>';
    }

    if (session()->getFlashdata('success')) {
      echo '<div class="alert alert-success" role="alert">';
      echo session()->getFlashdata('success');
      echo '</div>';
    }

    ?>

      <!-- loader END -->
        <!-- Sign in Start -->
        <section class="sign-in-">
            <div class="container mt-5 p-0 bg-white">
                <div class="row no-gutters">
                    <div class="col-sm-6 align-self-center">
                        <div class="sign-in-from">
                            <h1 class="mb-0">Register</h1>
                            <!-- <p>Enter your email address and password to access admin panel.</p> -->
                            <form class="mt-4" action="cek_register" method="post">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control mb-0" id="username" placeholder="Masukan username" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control mb-0" id="password" placeholder="Masukan password" name="password">
                                </div>
                                <div class="form-group">
                                <input type="checkbox" onclick="myFunction()">Tampilkan Password
                                <script>
                                    function myFunction() {
                                        var x = document.getElementById("password");
                                        if (x.type === "password") {
                                            x.type = "text";
                                        } else {
                                            x.type = "password";
                                        }
                                    }
                                </script>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control mb-0" id="nama" placeholder="Masukan nama" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control mb-0" id="email" placeholder="Masukan email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control mb-0" id="alamat" placeholder="Masukan alamat" name="alamat">
                                </div>
                                <div class="d-inline-block w-100">
                                    <!-- <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">I accept <a href="#">Terms and Conditions</a></label>
                                    </div> -->
                                    <button type="submit" class="btn btn-primary float-right">Register</button>
                                </div>
                                <div class="sign-info">
                                    <span class="dark-color d-inline-block line-height-2">Already Have Account ? <a href="/auth">Log In</a></span>
                                    <!-- <ul class="iq-social-media">
                                        <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                        <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                        <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                    </ul> -->
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6 text-center">
                        <div class="sign-in-detail text-white">
                           
                            <div class="slick-slider11" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                                <div class="item">
                                    <img src="<?= base_url('assets/images/login/1.jpeg')?>" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Sistem Informasi Kendaraan Umum</h4>
                                    <!-- <p>It is a long established fact that a reader will be distracted by the readable content.</p> -->
                                </div>
                                <div class="item">
                                    <img src="<?= base_url('assets/images/login/2.jpeg')?>" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Sistem Informasi Kendaraan Umum</h4>
                                    <!-- <p>It is a long established fact that a reader will be distracted by the readable content.</p> -->
                                </div>
                                <div class="item">
                                    <img src="<?= base_url('assets/images/login/3.jpeg')?>" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Sistem Informasi Kendaraan Umum</h4>
                                    <!-- <p>It is a long established fact that a reader will be distracted by the readable content.</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sign in END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
      <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
      <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
      <!-- Appear JavaScript -->
      <script src="<?= base_url('assets/js/jquery.appear.js') ?>"></script>
      <!-- Countdown JavaScript -->
      <script src="<?= base_url('assets/js/countdown.min.js') ?>"></script>
      <!-- Counterup JavaScript -->
      <script src="<?= base_url('assets/js/waypoints.min.js') ?>"></script>
      <script src="<?= base_url('assets/js/jquery.counterup.min.js') ?>"></script>
      <!-- Wow JavaScript -->
      <script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
      <!-- Apexcharts JavaScript -->
      <script src="<?= base_url('assets/js/apexcharts.js') ?>"></script>
      <!-- Slick JavaScript -->
      <script src="<?= base_url('assets/js/slick.min.js') ?>"></script>
      <!-- Select2 JavaScript -->
      <script src="<?= base_url('assets/js/select2.min.js') ?>"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="<?= base_url('assets/js/smooth-scrollbar.js') ?>"></script>
      <!-- Chart Custom JavaScript -->
      <script src="<?= base_url('assets/js/chart-custom.js') ?>"></script>
      <!-- Custom JavaScript -->
      <script src="<?= base_url('assets/js/custom.js') ?>"></script>
   </body>
</html>