<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>APG Kristal group</title>
    <meta content="A.P.G Kristal group je društvo za proizvodnju, trgovinu i usluge, osnovano 2008 godine u Beogradu..." name="description">
    <meta content="APG Kristal Group, Auminijumska folija, Papir za pecenje, prijanjajuca folija, folija" name="keywords">

    <!-- Favicons -->
    <link href="/assets/img/favicon.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css?v=2" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Regna - v2.1.0
    * Template URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" @if($landing)class="header-transparent"@endif>
    <div class="container">

        <div id="logo" class="pull-left">
            <a href="/"><img src="/assets/img/kristal-logo.webp" alt=""></a>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                @if($landing)
                    <li class="menu-active"><a href="#hero">Početna</a></li>
                    <li><a href="#about">O nama</a></li>
                    <li class="menu-has-children"><a href="#services">Usluge</a>
                        <ul>
                            <li><a href="/usluge/konfekcija">KONFEKCIJA</a></li>
                            <li><a href="/usluge/profesionalni-kupci">PROFESIONALNI KUPCI</a></li>
                            <li><a href="/usluge/jambo-rolne">JAMBO ROLNE</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children"><a href="#portfolio">Proizvodi</a>
                        <ul>
                            <li><a href="/proizvodi/aluminijumska-folija">ALUMINIJUMSKA FOLIJA</a></li>
                            <li><a href="/proizvodi/prijanjajuca-foilja">PRIJANJAJUĆA FOLIJA</a></li>
                            <li><a href="/proizvodi/papir-za-pecenje">PAPIR ZA PEČENJE</a></li>
                            <li><a href="/proizvodi/aluminijumske-posude">ALUMINIJUMSKE POSUDE</a></li>
                            <li><a href="/proizvodi/papir-u-tabacima">PAPIR U TABACIMA</a></li>
                            <li><a href="/proizvodi/pvc-folija">PVC FOLIJA</a></li>
                            <li><a href="/proizvodi/zica-za-sudove">ŽICA ZA SUDOVE</a></li>
                        </ul>
                    </li>
                    <li><a href="/galerija">Galerija</a></li>
                    <li><a href="#contact">Kontakt</a></li>
                @else
                    <li><a href="/">Početna</a></li>
                    <li><a href="/#about">O nama</a></li>
                    <li class="menu-has-children"><a href="/#services">Usluge</a>
                        <ul>
                            <li><a href="/usluge/konfekcija">KONFEKCIJA</a></li>
                            <li><a href="/usluge/profesionalni-kupci">PROFESIONALNI KUPCI</a></li>
                            <li><a href="/usluge/jambo-rolne">JAMBO ROLNE</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children"><a href="/#portfolio">Proizvodi</a>
                        <ul>
                            <li><a href="/proizvodi/aluminijumska-folija">ALUMINIJUMSKA FOLIJA</a></li>
                            <li><a href="/proizvodi/prijanjajuca-foilja">PRIJANJAJUĆA FOLIJA</a></li>
                            <li><a href="/proizvodi/papir-za-pecenje">PAPIR ZA PEČENJE</a></li>
                            <li><a href="/proizvodi/aluminijumske-posude">ALUMINIJUMSKE POSUDE</a></li>
                            <li><a href="/proizvodi/papir-u-tabacima">PAPIR U TABACIMA</a></li>
                            <li><a href="/proizvodi/pvc-folija">PVC FOLIJA</a></li>
                            <li><a href="/proizvodi/zica-za-sudove">ŽICA ZA SUDOVE</a></li>
                        </ul>
                    </li>
                    <li><a href="/galerija">Galerija</a></li>
                    <li><a href="/#contact">Kontakt</a></li>
                @endif
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- End Header -->

@yield('content')

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">

        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>APG Kristal group</strong>. All Rights Reserved
        </div>
        <div class="credits">
            Made by <a href="https://stcompany.org">ST Company</a>
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer>
<!-- End Footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- Vendor JS Files -->
<script src="/assets/vendor/jquery/jquery.min.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="/assets/vendor/php-email-form/validate.js"></script>
<script src="/assets/vendor/counterup/counterup.min.js"></script>
<script src="/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/assets/vendor/superfish/superfish.min.js"></script>
<script src="/assets/vendor/hoverIntent/hoverIntent.js"></script>
<script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="/assets/vendor/venobox/venobox.min.js"></script>
<script src="/assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="/assets/js/main.js?v=2"></script>

</body>

</html>
