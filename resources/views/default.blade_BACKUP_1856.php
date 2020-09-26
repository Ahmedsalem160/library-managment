<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
@include('nav')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="{{asset('index')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <a class="nav-link" href="{{asset('books')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-cog"></i></div>
                        Book Controller
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Pages
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Authentication
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('loginStudent')}}">Login</a>
                                    <a class="nav-link" href="{{route('registerStudent')}}">Register</a>
                                </nav>
                            </div>
                        </nav>
                    </div>
                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="{{route('show_all')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                        Show Books
                    </a>
                    <a class="nav-link" href="{{ route('books.create') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>
                        Add Book
                    </a>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Library Management
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        @yield('content')
        @include('footer')
    </div>
<<<<<<< HEAD
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{asset('demo/chart-area-demo.js')}}"></script>
<script src="{{asset('demo/chart-bar-demo.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="{{asset('demo/datatables-demo.js')}}"></script>
=======
    <!-- Preloader Start -->
    {{--@include('nav')--}}


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

>>>>>>> master
</body>
</html>
