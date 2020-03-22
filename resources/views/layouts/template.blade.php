<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="keywords" content="#">
  <meta name="description" content="#">
  <title>Rent a Car</title>
  <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
  <!-- Bootstrap -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Fontawesome -->
  <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
  <!-- Flaticon -->
  <link href="{{asset('css/font/flaticon.css')}}" rel="stylesheet">
  <!-- Swiper Slider -->
  <link href="{{asset('css/swiper.min.css')}}" rel="stylesheet">
  <!-- Range Slider -->
  <link href="{{asset('css/bootstrap-slider.min.css')}}" rel="stylesheet">
  <!-- Nice Select -->
  <link href="{{asset('css/nice-select.css')}}" rel="stylesheet">
  <!-- magnific popup -->
  <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
  <!-- Custom Stylesheet -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <!-- Custom Responsive -->
  <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
  <!-- Color Change -->
  <link class="color-changing" href="{{asset('css/color4.css')}}" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;display=swap">
  <!-- place -->
</head>

<body class="loader">
  <!-- Start header -->
  @include('includes/header')
  <!-- end middle sec -->
  <!-- start navigation -->
  @include('includes/navigation')
  <!-- end navigation -->
  <!-- end header -->
  <!-- start banner -->
  @include('includes/banner')
  <!-- end banner -->
  <!-- Section  -->
  @yield('content')
  <!-- End of Section -->
  <!-- start how it works -->
  @include('includes/how_it_works')
  <!-- end how it works -->
  <!-- start our testimonials -->
  @include('includes/testimonials')
  <!-- end our testimonials -->
  <!-- start faqs -->
  @include('includes/faq')
  <!-- end faqs -->
  <!-- start our-brands -->
  @include('includes/brands')
  <!-- end our-brands -->
  <!-- start copyright -->
  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="footer-social">
            <ul>
              <li>
                <a href="#" class="text-custom-white animated-button"><i class="fab fa-facebook-f"></i> Facebook</a>
              </li>
              <li>
                <a href="#" class="text-custom-white animated-button"><i class="fab fa-twitter"></i> Twitter</a>
              </li>
              <li>
                <a href="#" class="text-custom-white animated-button"><i class="fab fa-google-plus-g"></i> Google</a>
              </li>
              <li>
                <a href="#" class="text-custom-white animated-button"><i class="fab fa-pinterest-p"></i> Pintrest</a>
              </li>
            </ul>
          </div>
          <div class="copyright-text">
            <p class="text-custom-black no-margin">© Islignton College - 2020 | All Right Reserved. <a href="#" class="text-custom-black fw-400">Designed By Samrika Sedai</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end copyright -->
  <div id="back-top" class="back-top">
    <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a>
  </div>
  </div>
  <!-- Theme skins -->
  <!-- Place all Scripts Here -->
  <!-- jQuery -->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <!-- Popper -->
  <script src="{{asset('js/popper.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <!-- Range Slider -->
  <script src="{{asset('js/bootstrap-slider.min.js')}}"></script>
  <!-- Swiper Slider -->
  <script src="{{asset('js/swiper.min.js')}}"></script>
  <!-- Jarallex -->
  <script src="{{asset('js/jarallax.min.js')}}"></script>
  <script src="{{asset('js/jarallax-video.min.js')}}"></script>
  <!-- Nice Select -->
  <script src="{{asset('js/jquery.nice-select.js')}}"></script>
  <!-- Isotope masonary -->
  <script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
  <!-- magnific popup -->
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <!-- Maps -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>
  <!-- Custom Js -->
  <script src="{{asset('js/custom.js')}}"></script>
  <!-- /Place all Scripts Here -->
</body>

<!-- Mirrored from slidesigma.com/themes/html/rims/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Mar 2020 05:12:52 GMT -->

</html>