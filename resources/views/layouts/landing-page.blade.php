<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>POLRESTABES BANDUNG</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{URL::to('/')}}/assets/img/favicon.png" rel="icon">
    <link href="{{URL::to('/')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{URL::to('/')}}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{URL::to('/')}}/assets/css/style.css" rel="stylesheet">

    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster/dist/MarkerCluster.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster/dist/MarkerCluster.Default.css" />
    @yield("css")

    <!-- =======================================================
  * Template Name: Appland
  * Updated: Sep 25 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top  header-transparent ">
            <div class="container d-flex align-items-center justify-content-between">

                <div class="logo">
                    <h1><a href="{{route('landing-page')}}">Kantor Polisi</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html"><img src="{{URL::to('/')}}/assets/img/logo.png" alt="" class="img-fluid"></a>-->
                </div>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="{{route('landing-page')}}">Home</a></li>
                        <li><a class="nav-link scrollto" href="{{route('landing-page')}}#features">About</a></li>
                        <li><a class="nav-link scrollto" href="{{route('landing-page')}}#gallery">Services</a></li>
                        <li><a class="nav-link scrollto" href="{{route('landing-page')}}#faq">F.A.Q</a></li>
                        <li><a class="nav-link scrollto" href="{{route('landing-page')}}#contact">Contacts</a></li>
                        <li><a href="{{ route('login') }}" class="getstarted scrollto">Login</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

            </div>
        </header><!-- End Header -->

        @yield("content")

        <!-- ======= Footer ======= -->
        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Appland</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{URL::to('/')}}/assets/js/jquery-3.7.1.min.js"></script>
        <script src="{{URL::to('/')}}/assets/vendor/aos/aos.js"></script>
        <script src="{{URL::to('/')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{URL::to('/')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="{{URL::to('/')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="{{URL::to('/')}}/assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="{{URL::to('/')}}/assets/js/main.js"></script>

        <!-- Leaflet -->
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
        <script src="https://unpkg.com/leaflet.markercluster/dist/leaflet.markercluster.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @yield("script")


    </body>

</html>