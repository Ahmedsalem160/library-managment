<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Courses | Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('template/img/favicon.ico')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('template/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/bootstrap.min.css')}}">

</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('template/img/logo/loder.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    @include('nav')


    @yield('content')


    @include('footer')

      <!-- Scroll Up -->
  <div id="back-top" >
     <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
  </div>


  <!-- JS here -->
<script src="{{asset('template/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('template/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('template/js/popper.min.js')}}"></script>
<script src="{{asset('template/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('template/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('template/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('template/js/slick.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset('template/js/wow.min.js')}}"></script>
<script src="{{asset('template/js/animated.headline.js')}}"></script>
<script src="{{asset('template/js/jquery.magnific-popup.js')}}"></script>

<!-- Date Picker -->
<script src="{{asset('template/js/gijgo.min.js')}}"></script>
<!-- Nice-select, sticky -->
<script src="{{asset('template/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('template/js/jquery.sticky.js')}}"></script>
<!-- Progress -->
<script src="{{asset('template/js/jquery.barfiller.js')}}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{asset('template/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('template/js/waypoints.min.js')}}"></script>
<script src="{{asset('template/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('template/js/hover-direction-snake.min.js')}}"></script>

<!-- contact js -->
<script src="{{asset('template/js/contact.js')}}"></script>
<script src="{{asset('template/js/jquery.form.js')}}"></script>
<script src="{{asset('template/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('template/js/mail-script.js')}}"></script>
<script src="{{asset('template/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{asset('template/js/plugins.js')}}"></script>
<script src="{{asset('template/js/main.js')}}"></script>

</body>

</html>
