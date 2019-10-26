<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo isset($title)? $title : 'Lulus Tepat Waktu! Aamiin' ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="BHost template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="BHost template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="assets/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="assets/styles/responsive.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/bootstrap-4.1.2/bootstrap.min.css')?>">
<link href="<?php echo base_url('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/animate.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/elements.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/elements_responsive.css')?>">
<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/Chart.min.js')?>"></script>
<script src="<?php echo base_url('assets/styles/bootstrap-4.1.2/popper.js')?>"></script>
<script src="<?php echo base_url('assets/styles/bootstrap-4.1.2/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/utils.js')?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
</head>
<body>

<div class="super_container">
  
  <!-- Header -->

  <header class="header trans_400">
    <div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
      <div class="logo"><a href="#">waste<span>data</span></a></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-2">
            <nav class="main_nav">
              <ul class="d-flex flex-row align-items-center justify-content-start">
                <li><a href="<?php echo base_url() ?>">Beranda</a></li>
                <li><a href="contact.html">Kontak</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="header_right d-flex flex-row align-items-center justify-content-start">

        <!-- Header Links -->
        <div class="header_links">
          <ul class="d-flex flex-row align-items-center justify-content-start">
            <li><a href="<?php echo base_url('auth/login') ?>">Masuk</a></li>
          </ul>
        </div>
        <!-- Hamburger -->
        <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
      </div>  
    </div>
  </header>

  <!-- Menu -->



  <?php if(current_url() == base_url().'index.php'): ?>
  
  
  
  <?php else : ?>
  <!-- Home -->

  <div class="home">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="home_content">
            <div class="home_image"><img src="<?php echo base_url('assets/images/elements.png') ?>" alt=""></div>
            <div class="home_title"><?php echo isset($title)? $title : 'Lulus Tepat Waktu! Aamiin' ?></div>    
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php endif; ?>
  <?php echo $content; ?>

  <!-- Footer -->

  <footer class="footer">
    <!-- <div class="footer_phone d-flex flex-row align-items-center justify-content-sm-end justify-content-center">
      <div>Need Help? Call Us 24/7</div>
      <div class="d-flex flex-row align-items-center justify-content-start">
        <i class="fa fa-phone" aria-hidden="true"></i>
        <div>652-345 3222 11</div>
      </div>
    </div> -->
    <div class="footer_content">
      <div class="container">
        <div class="row footer_row">

          <!-- Footer Column -->
          <div class="col-xl-3 col-md-6">
            <div class="footer_title">Hosting Packages</div>
            <div class="footer_list">
              <ul>
                <li><a href="#">Cloud Hosting</a></li>
                <li><a href="#">Web Hosting</a></li>
                <li><a href="#">Reseller Hosting</a></li>
                <li><a href="#">VPS Hosting</a></li>
                <li><a href="#">Dedicated Servers</a></li>
                <li><a href="#">Windows Hosting</a></li>
                <li><a href="#">Linux Servers</a></li>
              </ul>
            </div>
          </div>

          <!-- Footer Column -->
          <div class="col-xl-3 col-md-6">
            <div class="footer_title">Our Services</div>
            <div class="footer_list">
              <ul>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Logo Design</a></li>
                <li><a href="#">Domains Register</a></li>
                <li><a href="#">Search Advertising</a></li>
                <li><a href="#">Email Marketing</a></li>
              </ul>
            </div>
          </div>

          <!-- Footer Column -->
          <div class="col-xl-3 col-md-6">
            <div class="footer_title">Useful Links</div>
            <div class="footer_list">
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>

          <!-- Footer Column -->
          <div class="col-xl-3 col-md-6">
            <div class="logo footer_logo"><a href="#"><span>b</span>Host</a></div>
            <div class="contact_info">
              <ul>
                <li class="d-flex flex-row align-items-start justify-content-start">
                  <div><div>Address</div></div>
                  <div>1481 Creekside Lane Avila Beach, CA 931</div>
                </li>
                <li class="d-flex flex-row align-items-start justify-content-start">
                  <div><div>Phone</div></div>
                  <div>+53 345 7953 32453</div>
                </li>
                <li class="d-flex flex-row align-items-start justify-content-start">
                  <div><div>E-mail</div></div>
                  <div>yourmail@gmail.com</div>
                </li>
              </ul>
            </div>
            <div class="cards">
              <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                <li><a href="#"><img src="<?php echo base_url('assets/images/card_1.png') ?>" alt=""></a></li>
                <li><a href="#"><img src="<?php echo base_url('assets/images/card_2.png') ?>" alt=""></a></li>
                <li><a href="#"><img src="<?php echo base_url('assets/images/card_3.png') ?>" alt=""></a></li>
                <li><a href="#"><img src="<?php echo base_url('assets/images/card_4.png') ?>" alt=""></a></li>
                <li><a href="#"><img src="<?php echo base_url('assets/images/card_5.png') ?>" alt=""></a></li>
              </ul>
            </div>
            <div class="social footer_social">
              <ul class="d-flex flex-row align-items-center justify-content-start">
                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright_bar text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
  </footer>
</div>

<script src="<?php echo base_url('assets/plugins/greensock/TweenMax.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/greensock/TimelineMax.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/scrollmagic/ScrollMagic.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/greensock/animation.gsap.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/greensock/ScrollToPlugin.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/easing/easing.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/progressbar/progressbar.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/parallax-js-master/parallax.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery-circle-progress-1.2.2/circle-progress.js')?>"></script>
<script src="<?php echo base_url('assets/js/elements.js')?>"></script>
<script src="<?php echo base_url('body/js/jquery.min.js')?>"></script>
<script src="<?php echo base_url('body/js/popper.min.js')?>"></script>
<script src="<?php echo base_url('body/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('body/js/confer.bundle.js')?>"></script>
<script src="<?php echo base_url('body/js/default-assets/active.js')?>"></script>
</body>
</html>