<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Sitenar | Dinas Tenaga Kerja dan Transmigrasi</title>
    <meta name="author" content="wicaksu">
    <meta name="description" content="HTML Landing Page Teamplate">
    <meta name="keywords" content="ketenaga kerjaan, kerjaan, disnaker, dinas, goverment">
    <!-- FAVICON FILES -->
    <link href="assets/images/icons/sitenar144.png" rel="apple-touch-icon" sizes="144x144">
    <link href="assets/images/icons/sitenar120.png" rel="apple-touch-icon" sizes="120x120">
    <link href="assets/images/icons/sitenar76.png" rel="apple-touch-icon" sizes="76x76">
    <link href="assets/images/icons/icon.png" rel="shortcut icon">
    <!-- CSS FILES -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/iconfont.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/color.css">
</head>

<body>
    <div id="dtr-wrapper" class="clearfix">

        <!-- preloader starts -->
        <div class="dtr-preloader">
            <div class="dtr-preloader-inner">
                <div class="dtr-loader">Loading...</div>
            </div>
        </div>
        <!-- preloader ends -->

        <!-- Small Devices Header
============================================= -->
        <div class="dtr-responsive-header header-with-slick-menu fixed-top">
            <div class="container">

                <!-- small devices logo -->
                <div class="dtr-responsive-header-left"> <a class="dtr-logo" href="/"><img
                            src="assets/images/SITenar.png" alt="logo"></a> </div>
                <!-- small devices logo ends -->

                <!-- menu button -->
                <button id="dtr-menu-button" class="dtr-hamburger" type="button"><span
                        class="dtr-hamburger-lines-wrapper"><span class="dtr-hamburger-lines"></span></span></button>
            </div>
            <div class="dtr-responsive-header-menu"></div>
        </div>
        <!-- Small Devices Header ends
============================================= -->

        <!-- header starts
============================================= -->
        <header id="dtr-header-global" class="fixed-top">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">

                    <!-- header left starts -->
                    <div class="dtr-header-left">

                        <!-- logo -->
                        <a class="logo-default dtr-scroll-link" href="/"><img src="assets/images/SITenar.png"
                                alt="logo"></a>

                        <!-- logo on scroll -->
                        <a class="logo-alt dtr-scroll-link" href="/"><img src="assets/images/SITenar.png"
                                alt="logo"></a>
                        <!-- logo on scroll ends -->

                    </div>
                    <!-- header left ends -->

                    <!-- menu starts-->
                    <div class="main-navigation">
                        <ul class="sf-menu dtr-nav dark-nav-on-load dark-nav-on-scroll">
                            <li> <a class="nav-link" href="/">Beranda</a> </li>
                            <li> <a class="nav-link" href="/#blog">Pengumuman</a> </li>
                            <li> <a class="nav-link" href="/#lowongan">Lowongan</a> </li>
                            <li> <a class="nav-link" href="/#team">Profil Pejabat</a> </li>
                            <li> <a class="nav-link" href="/#statistik">Statistik</a> </li>

                            @if (Route::has('login'))
                            @auth
                            <li> <a class="nav-link" href="{{ url('/'.Auth::user()->role) }}">Dashboard</a> </li>
                            @else<li> <a class="nav-link" href="{{ url("login") }}">Masuk</a> </li>

                            @if (Route::has('register'))<li> <a class="nav-link" href="{{ url("register")
                                    }}">Register</a> </li>
                            @endif
                            @endauth
                    </div>
                    @endif
                    </ul>
                </div>
                <!-- menu ends -->

            </div>
    </div>
    </header>
    <!-- header ends
================================================== -->

    <!-- == main content area starts == -->
    <div id="dtr-main-content">

        {{ $slot }}

    </div>
    <br>
    <!-- == main content area ends == -->

    <!-- footer section starts
================================================== -->
    <footer id="dtr-footer">

        <!--== main footer row starts ==-->
        <div class="dtr-main-footer">
            <div class="container">
                <div class="row">

                    <!--== column 1 starts ==-->
                    <div class="col-12 col-md-6 col-lg-5"><a class="dtr-scroll-link" href="#home"><img
                                src="assets/images/sitenar_light.png" alt="logo"></a>
                        <p class="dtr-mt-20 dtr-mb-40">Sitenar merupakan aplikasi untuk <br> pengelolaan
                            <i>Perusahaan</i> dan <i>Pekerja</i> <br>yang di kelola langsung oleh Disnaker.
                        </p>
                        <p class="d-flex align-items-center"><i
                                class="icon-phone-call-fill dtr-mr-10 color-blue"></i>1-800-234 567 89</p>
                        <p class="d-flex align-items-center"><i
                                class="icon-envelope-simple-fill dtr-mr-10 color-blue"></i>cs@sitenar.madiunkab.go.id
                        </p>
                    </div>
                    <!--== column 1 ends ==-->

                    <!--== column 2 starts ==-->
                    <div class="col-12 col-md-6 col-lg-2 small-device-space">
                        <h6>Resources</h6>
                        <ul class="dtr-list-line line-accent">
                            <li>
                                <p><a href="#home">Beranda</a></p>
                            </li>
                            <li>
                                <p><a href="#blog">Pengumuman</a></p>
                            </li>
                            <li>
                                <p><a href="#lowongan">Lowongan</a></p>
                            </li>
                            <li>
                                <p><a href="#item">Profil Pejabat</a></p>
                            </li>
                            <li>
                                <p><a href="#statistik">Statistik</a></p>
                            </li>
                        </ul>
                    </div>
                    <!--== column 2 ends ==-->

                    <!--== column 3 starts ==-->
                    <div class="col-12 col-md-6 col-lg-2 small-device-space">
                        <h6>Company</h6>
                        <ul class="dtr-list-line line-accent">
                            <li>
                                <p><a href="#">About Us</a></p>
                            </li>
                            <li>
                                <p><a href="#">Tutorial Pengunaan</a></p>
                            </li>
                            <li>
                                <p><a href="#">Contact</a></p>
                            </li>
                        </ul>
                    </div>
                    <!--== column 3 ends ==-->

                    <!--== column 4 starts ==-->
                    <div class="col-12 col-md-6 col-lg-3">
                        <h6>Subscribe</h6>
                        <p>Untuk mendapatkan informasi terkini dari Sitenar.</p>

                        <!-- form starts -->
                        <div class="dtr-subscribe-form dtr-mt-20">
                            <input type="email" name="your-email" placeholder="sitenar@madiunkab.go.id" />
                            <button type="submit" class="dtr-subscribe-btn">Submit</button>
                        </div>
                        <!-- form ends -->

                    </div>
                    <!--== column 4 ends ==-->

                </div>
            </div>
        </div>
        <!--== main footer row ends ==-->

        <!--== copyright row starts ==-->
        <div class="dtr-copyright">
            <div class="container">
                <div class="row">

                    <!--== column 1 starts ==-->
                    <div class="col-12 col-md-6">

                        <!-- social starts -->
                        <ul class="dtr-social dtr-social-list">
                            <li><a href="#" class="dtr-twitter" target="_blank" title="twitter"></a></li>
                            <li><a href="#" class="dtr-facebook" target="_blank" title="facebook"></a></li>
                            <li><a href="#" class="dtr-linkedin" target="_blank" title="linkedin"></a></li>
                        </ul>
                        <!-- social ends -->

                    </div>
                    <!--== column 1 ends ==-->

                    <!--== column 2 starts ==-->
                    <div class="col-12 col-md-6 text-end small-device-space">
                        <p>© 2021 sitenar. All rights reserved</p>
                    </div>
                    <!--== column 2 ends ==-->

                </div>
            </div>
        </div>
        <!--== copyright row ends ==-->

    </footer>
    <!-- footer section ends
================================================== -->
    <!-- take top arrow -->
    <a id="take-to-top" href="#" class="dtr-fade-scroll "></a>
    </div>
    <!-- #dtr-wrapper ends -->

    <!-- JS FILES -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>