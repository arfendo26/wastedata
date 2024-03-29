<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo isset($title)? $title : 'Lulus Tepat Waktu! Aamiin' ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="BHost template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
  
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>"> 
  
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/main_styles.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/responsive.css')?>">
  
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/bootstrap-4.1.2/bootstrap.min.css')?>">
<link href="<?php echo base_url('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/animate.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/elements.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/elements_responsive.css')?>">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/about.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/about_responsive.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/magnific-popup.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/slicknav.css')?>">

<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/Chart.min.js')?>"></script>
<script src="<?php echo base_url('assets/styles/bootstrap-4.1.2/popper.js')?>"></script>
<script src="<?php echo base_url('assets/styles/bootstrap-4.1.2/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/utils.js')?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
<style type="text/css">
  *{
    /*border:1px dashed red;*/
  }
  .home {
     height: auto !important; 
  }
  .main_nav {
       padding-right: 2%; 
  }
  .home_title {
     margin-top: 0; 
  }
</style>
</head>
<body>

<div class="super_container">
  
  <!-- Header -->

  <header class="header trans_400">
    <div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
      <div class="logo" style ="z-index:100"><a href="<?php echo base_url() ?>" >rego<span>sampah</span></a></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-2">
            <nav class="main_nav ">
              <ul class="d-flex flex-row align-items-center justify-content-start pull-right">
                <!-- <li><a href="">Beranda</a></li> -->
                <li><a href="<?php echo base_url('about')?>"><strong>Tentang Kami</strong></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="header_right d-flex flex-row align-items-center justify-content-start">

        <!-- Header Links -->
        <!-- <div class="header_links">
          <ul class="d-flex flex-row align-items-center justify-content-start">
            <li>
              <a href="#test-form" class="login popup-with-form"><span>Masuk</span></a>
            </li>
          </ul>
        </div> -->
        <!-- Hamburger -->
        <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>

      </div>  
    </div>
  </header>

  <<!-- Menu -->

  <div class="menu trans_500">
    <div class="menu_content d-flex flex-column align-items-center justify-content-center">
      <div class="menu_nav trans_500">
        <ul class="text-center">
          <li><a href="<?php echo base_url('about')?>">Tentang Kami</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Home -->




  <?php if(current_url() == base_url().'index.php'): ?>
        
        
  
  <?php else : ?>
  <!-- Home -->

  

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
    <div class="footer_content" style="padding-top: 100px; padding-bottom: 100px">
      <div class="container">
        <div class="row footer_row">

          <!-- Footer Column -->
          <div class="col-xl-7 col-md-6">
            <div class="footer_title">regoSAMPAH dibuat dalam Oh, Plastic! Festival</div>
              <br><br><br>
              <p>Oh, Plastic! Festival adalah rangkaian acara yang diadakan oleh Ocean Plastic Prevention Accelerator (SecondMuse Indonesia) untuk meningkatkan kesadaran dan aksi kolaborasi dalam mengatasi permasalahan polusi plastik di Surabaya dan Indonesia. Festival diadakan pada 26-27 Oktober 2019 di Surabaya dan akan berkolaborasi dengan berbagai stakeholder terkait. regoSAMPAH sendiri merupakan solusi dari challenge Waste Data Hackathon yang
              diselenggarakan oleh OPPA (SecondMuse Indonesia) yaitu platform yang dapat menampilkan visualisasi dan prediksi harga sampah plastik.</p>
            
          </div>


          <!-- Footer Column -->
          <div class="col-xl-5 col-md-6">
            <div class="logo footer_logo"><a>rego<span>sampah</span></a></div>
            <div class="contact_info">
              <ul>
                <li class="d-flex flex-row align-items-start justify-content-start">
                  <div><div>Instagram</div></div>
                  <div>oppaccelerator</div>
                </li>
                <li class="d-flex flex-row align-items-start justify-content-start">
                  <div>Web<div></div></div>
                  <div>oppa.id</div>
                </li>
                <li class="d-flex flex-row align-items-start justify-content-start">
                  <div><div>E-mail</div></div>
                  <div>oppa@secondmuse.com</div>
                </li>
              </ul>
            </div>
            <br>
                <a href="#"><img src="<?php echo base_url('assets/images/oppa.png') ?>" style="width:20%; margin-right:20px "  alt=""></a>
                <a href="#"><img src="<?php echo base_url('assets/images/secondmuse.png') ?>" style="width:20%" alt=""></a>
             </div>
        </div>
      </div>
    </div>
    <div class="copyright_bar text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
  </footer>

  <form id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="img/form-logo.png" alt="">
                    </a>
                </div>
                <h3>Sign in</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input type="email" placeholder="Enter email">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="password" placeholder="Password">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed_btn_green">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>


</div>

<!-- <script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script> -->
<script src="<?php echo base_url('assets/js/owl.carousel.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/isotope.pkgd.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/ajax-form.js')?>"></script>
<script src="<?php echo base_url('assets/js/waypoints.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.counterup.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/imagesloaded.pkgd.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/scrollIt.js')?>"></script>  
<script src="<?php echo base_url('assets/js/jquery.scrollUp.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/wow.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/nice-select.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.slicknav.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/plugins.js')?>"></script>
<script src="<?php echo base_url('assets/js/gijgo.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/contact.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.ajaxchimp.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.form.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.validate.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/mail-script.js')?>"></script>
<script src="<?php echo base_url('assets/js/main.js')?>"></script>
<script src="<?php echo base_url('assets/styles/bootstrap-4.1.2/popper.js')?>"></script>
<script src="<?php echo base_url('assets/styles/bootstrap-4.1.2/bootstrap.min.js')?>"></script>

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

<script src="<?php echo base_url('assets/js/confer.bundle.js')?>"></script>
<script src="<?php echo base_url('assets/js/default-assets/active.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.dropdown.js')?>"></script>
<script src="<?php echo base_url('assets/js/about.js')?>"></script>

<script src="<?php echo base_url('body/js/confer.bundle.js')?>"></script>
<script src="<?php echo base_url('body/js/default-assets/active.js')?>"></script>

</body>
</html>