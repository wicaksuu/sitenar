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
    <link href="{{ URL::asset('assets/images/icons/sitenar144.png') }}" rel="apple-touch-icon" sizes="144x144">
    <link href="{{ URL::asset('assets/images/icons/sitenar120.png') }}" rel="apple-touch-icon" sizes="120x120">
    <link href="{{ URL::asset('assets/images/icons/sitenar76.png') }}" rel="apple-touch-icon" sizes="76x76">
    <link href="{{ URL::asset('assets/images/icons/icon.png') }}" rel="shortcut icon">
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
                            <li> <a class="nav-link" href="#home">Beranda</a> </li>
                            <li> <a class="nav-link" href="#blog">Pengumuman</a> </li>
                            <li> <a class="nav-link" href="#lowongan">Lowongan</a> </li>
                            <li> <a class="nav-link" href="#team">Profil Pejabat</a> </li>
                            <li> <a class="nav-link" href="#statistik">Statistik</a> </li>

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

        <!-- hero section starts
================================================== -->
        <section id="home" class="dtr-section">
            <div class="dtr-section bg-white dtr-hero-section-top-padding">
                <div class="container dtr-pb-100">

                    <!--== row starts ==-->
                    <div class="row">
                        <div class="col-12 col-md-6">

                            <!-- animated hedline starts -->
                            <p class=" dtr-animated-headline font-weight-medium text-left slide color-dark"><span
                                    class="dtr-words-wrapper w-100">
                                    <!--== text starts ==-->
                                    <!-- first line -->
                                    <b class="is-visible">Mencari Pekerjaan<img draggable="false" role="img"
                                            class="emoji" alt="✨"
                                            src="https://s.w.org/images/core/emoji/13.1.0/svg/2728.svg" width="22"></b>
                                    <!-- second line -->
                                    <b class="is-hidden">Pendataan Perusahaan<img draggable="false" role="img"
                                            class="emoji" alt="⚡"
                                            src="https://s.w.org/images/core/emoji/13.1.0/svg/26a1.svg" width="22">
                                    </b>
                                    <!-- third line -->
                                    <b class="is-hidden">Pengelolaan Tenaga Kerja<img draggable="false" role="img"
                                            class="emoji" alt="⭐"
                                            src="https://s.w.org/images/core/emoji/13.1.0/svg/2b50.svg" width="22">
                                    </b>
                                    <!--== text ends ==-->
                                </span></p>
                            <!-- animated hedline ends -->

                            <h1>Selamat Datang</h1>
                            <p class="dtr-intro-content color-dark">
                                Sitenar merupakan portal untuk mencari pekerjaan, informasi lowongan pekerjaan,
                                pendaftaran dan pendataan perusahaan serta portal informasi. yang dikelola langsung
                                oleh disnaker kabupaten Madiun
                                .</p>

                            <!-- button starts -->
                            <a class="dtr-btn dtr-btn-small dtr-mt-50" href="#" role="button">
                                <!-- icon -->
                                <i class="icon-rocket-launch-fill" aria-hidden="true"></i>
                                <p>
                                    <!-- subtext -->
                                    <span class="dtr-btn-subtext">Daftar</span>
                                    <!-- text -->
                                    <span class="dtr-btn-text">Sekarang</span>
                                </p>
                            </a>
                            <!-- button ends -->

                        </div>
                        <div class="col-12 col-md-6 small-device-space">
                            <img src="assets/images/section-img1.png" alt="image">
                        </div>
                    </div>
                    <!--== row ends ==-->

                    <!--== row starts / logo slider ==-->
                    <div class="row dtr-pt-100">
                        <center>
                            <p>Partner Perusahaan</p>
                            <hr>
                        </center>
                        <div class="col-12 col-md-10 offset-md-1">
                            <div class="dtr-slick-slider dtr-slider-5col">
                                <!-- img 1 -->
                                <div> <img src="assets/images/client-1.png" alt="image"> </div>
                                <!-- img 2 -->
                                <div> <img src="assets/images/client-2.png" alt="image"> </div>
                                <!-- img 3 -->
                                <div> <img src="assets/images/client-3.png" alt="image"> </div>
                                <!-- img 4 -->
                                <div> <img src="assets/images/client-4.png" alt="image"> </div>
                                <!-- img 5 -->
                                <div> <img src="assets/images/client-5.png" alt="image"> </div>
                                <!-- img 6 -->
                                <div> <img src="assets/images/client-1.png" alt="image"> </div>
                            </div>
                        </div>
                    </div>
                    <!--== row ends / logo slider ==-->

                </div>
            </div>
        </section>
        <!-- hero section ends
================================================== -->

        <!-- blog section starts
            ================================================== -->
        <section id="blog" class="dtr-section dtr-py-100 bg-white">
            <div class="container">


                <!-- heading starts -->
                <div class="dtr-section-intro text-center dtr-mb-50">
                    <h2 class="dtr-intro-heading"> Pengumuman</h2>
                </div>
                <!-- heading ends -->

                <!--== row starts ==-->
                <div class="dtr-slick-slider dtr-testimonial-slider dtr-slick-has-dots">
                    <!-- column 1 starts -->
                    <div class="dtr-testimonial bg-white">
                        <div class="dtr-post-item">
                            <div class="dtr-post-img"> <img style="height: 200px"
                                    src="https://disnaker.madiunkab.go.id/wp-content/uploads/2020/07/naker3-300x134.jpg"
                                    alt="image">
                            </div>
                            <div class="dtr-post-content"> <span class="dtr-meta-category">
                                    <a href="#">Berita</a>
                                </span>
                                <h5 class="dtr-post-title"><a href="#" rel="bookmark">Lulusan SMA dan Sarjana di Madiun
                                        Dibekali...</a></h5>
                                <div class="dtr-meta color-dark-gray"> <span class="dtr-meta-author-avatar"><img
                                            src="assets/images/user-1-80x80.jpg" alt="image"></span> Aurora
                                    Walker<span class="dtr-meta-date">15. 08. 2021</span></div>
                                <p class="dtr-post-excerpt">Pemerintah Kabupaten Madiun melalui Dinas Tenaga Kerja
                                    Kabupaten Madiun membekali lulusan SLTA dan sarjana dengan
                                    ketrampilan. Pelatihan dilakukan di UPT BLK Madiun, Jl. Sumatra Caruban.</p>
                                <a class="dtr-read-more" href="#"><span class="dtr-read-more-content">Continue
                                        Reading ...</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="dtr-testimonial bg-white">
                        <div class="dtr-post-item">
                            <div class="dtr-post-img"> <img style="height: 200px"
                                    src="https://disnaker.madiunkab.go.id/wp-content/uploads/2020/04/naker-300x177.jpg"
                                    alt="image">
                            </div>
                            <div class="dtr-post-content"> <span class="dtr-meta-category"><a href="#">Berita</a></span>
                                <h5 class="dtr-post-title"><a href="#" rel="bookmark">​Penuhi Kebutuhan PT Global Way,
                                        Disnaker...</a></h5>
                                <div class="dtr-meta color-dark-gray"> <span class="dtr-meta-author-avatar"><img
                                            src="assets/images/user-2-80x80.jpg" alt="image"></span> Noah
                                    Wilson<span class="dtr-meta-date">20. 07. 2021</span></div>
                                <p class="dtr-post-excerpt">​Dinas Tenaga Kerja Kabupaten Madiun menyiapkan tenaga kerja
                                    siap pakai untuk menindaklanjuti laporan kebutuhan tenaga
                                    kerja menjahit sepatu di PT Global Way Indonesia. Penyiapan tenaga kerja itu
                                    diwujudkan dengan penyelenggaraan</p>
                                <a class="dtr-read-more" href="#"><span class="dtr-read-more-content">Continue
                                        Reading ...</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- column 2 ends -->

                    <!-- column 3 starts -->
                    <div class="dtr-testimonial bg-white">
                        <div class="dtr-post-item">
                            <div class="dtr-post-img"> <img style="height: 200px"
                                    src="https://disnaker.madiunkab.go.id/wp-content/uploads/2020/07/naker2-300x159.jpg"
                                    alt="image">
                            </div>
                            <div class="dtr-post-content"> <span class="dtr-meta-category"><a
                                        href="#">Pelatihan</a></span>
                                <h5 class="dtr-post-title"><a href="#" rel="bookmark">Why SaaS application usage
                                        exploding!</a></h5>
                                <div class="dtr-meta color-dark-gray"> <span class="dtr-meta-author-avatar"><img
                                            src="assets/images/user-1-80x80.jpg" alt="image"></span> Aurora
                                    Walker<span class="dtr-meta-date">22. 06. 2021</span></div>
                                <p class="dtr-post-excerpt">Pemkab Madiun, Jawa Timur, melalui Dinas Tenaga Kerja,
                                    mengadakan pelatihan kerajinan sepatu di Balai Pelatihan Disnaker
                                    Kabupaten Madiun, Selasa 15 Oktober 2019. Ada 50 orang peserta yang mengikuti
                                    pelatihan tersebut </p>
                                <a class="dtr-read-more" href="#"><span class="dtr-read-more-content">Continue
                                        Reading ...</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- column 3 ends -->

                </div>
                <!--== row ends ==-->
            </div>
        </section>
        <!-- blog section ends
            ================================================== -->


        <!-- testimonial section starts
================================================== -->
        <section id="lowongan" class="dtr-section dtr-section-with-bg dtr-py-100"
            style="background-image: url(assets/images/section-bg-img2.jpg);">

            <!-- overlay -->
            <div class="dtr-overlay dtr-overlay-dark"></div>

            <!-- content on overlay starts -->
            <div class="container-fluid dtr-overlay-content">

                <!-- heading starts -->
                <div class="dtr-section-intro dtr-dark-bg-intro text-center dtr-mb-50">
                    <h2 class="dtr-intro-heading">Lowongan Pekerjaan</h2>
                </div>
                <!-- heading ends -->

                <!--===== testimonial slider starts =====-->
                <div class="dtr-slick-slider dtr-testimonial-slider dtr-slick-has-dots">

                    <!--== slide 1 starts ==-->
                    <div class="dtr-testimonial bg-white">
                        <div class="dtr-client-info">
                            <p class="dtr-testimonial-user"><img src="assets/images/user-1-80x80.jpg"
                                    alt="Eleanor Jensen"></p>
                            <div>
                                <h5 class="dtr-client-name">David James</h5>
                                <span class="dtr-client-job">Spin Automation</span>
                            </div>
                            <span class="dtr-testimonial-stars dtr-stars-5"></span>
                        </div>
                        <p class="dtr-testimonial-content">“There are many variations of passages of lorem ipsum
                            available but the majority have suffered alteration in some form by injected humour
                            or
                            randomised words which don’t look even slightly believable.”</p>
                        <a class="dtr-read-more" href="#"><span class="dtr-read-more-content">Continue
                                Reading ...</span></a>
                    </div>
                    <!--== slide 1 ends ==-->

                    <!--== slide 2 starts ==-->
                    <div class="dtr-testimonial bg-white">
                        <div class="dtr-client-info">
                            <p class="dtr-testimonial-user"><img src="assets/images/user-2-80x80.jpg"
                                    alt="Eleanor Jensen"></p>
                            <div>
                                <h5 class="dtr-client-name">Eleanor Jensen</h5>
                                <span class="dtr-client-job">Entrepreneur</span>
                            </div>
                            <span class="dtr-testimonial-stars dtr-stars-4"></span>
                        </div>
                        <p class="dtr-testimonial-content">“There are many variations of passages of lorem ipsum
                            available but the majority have suffered alteration in some form by injected humour
                            or
                            randomised words which don’t look even slightly believable.”</p><a class="dtr-read-more"
                            href="#"><span class="dtr-read-more-content">Continue
                                Reading ...</span></a>
                    </div>
                    <!--== slide 2 ends ==-->

                    <!--== slide 3 starts ==-->
                    <div class="dtr-testimonial bg-white">
                        <div class="dtr-client-info">
                            <p class="dtr-testimonial-user"><img src="assets/images/user-3-80x80.jpg"
                                    alt="Eleanor Jensen"></p>
                            <div>
                                <h5 class="dtr-client-name">Alizee Denten</h5>
                                <span class="dtr-client-job">Kantole Global</span>
                            </div>
                            <span class="dtr-testimonial-stars dtr-stars-5"></span>
                        </div>
                        <p class="dtr-testimonial-content">“There are many variations of passages of lorem ipsum
                            available but the majority have suffered alteration in some form by injected humour
                            or
                            randomised words which don’t look even slightly believable.”</p><a class="dtr-read-more"
                            href="#"><span class="dtr-read-more-content">Continue
                                Reading ...</span></a>
                    </div>
                    <!--== slide 3 ends ==-->

                    <!--== slide 4 starts ==-->
                    <div class="dtr-testimonial bg-white">
                        <div class="dtr-client-info">
                            <p class="dtr-testimonial-user"><img src="assets/images/user-1-80x80.jpg"
                                    alt="Eleanor Jensen"></p>
                            <div>
                                <h5 class="dtr-client-name">Andrew Graham</h5>
                                <span class="dtr-client-job">Entrepreneur</span>
                            </div>
                            <span class="dtr-testimonial-stars dtr-stars-4"></span>
                        </div>
                        <p class="dtr-testimonial-content">“There are many variations of passages of lorem ipsum
                            available but the majority have suffered alteration in some form by injected humour
                            or
                            randomised words which don’t look even slightly believable.”</p><a class="dtr-read-more"
                            href="#"><span class="dtr-read-more-content">Continue
                                Reading ...</span></a>
                    </div>
                    <!--== slide 4 ends ==-->

                </div>
                <!--===== testimonial slider ends =====-->

            </div>
            <!-- content on overlay ends -->

        </section>
        <!-- testimonial section ends
================================================== -->

        <!-- team section starts
================================================== -->
        <section id="team" class="dtr-section dtr-pt-100 dtr-pb-70">
            <div class="container">


                <!-- heading starts -->
                <div class="dtr-section-intro text-center dtr-mb-50">
                    <h2 class="dtr-intro-heading">Profil Pejabat</h2>
                </div>
                <!-- heading ends -->

                {{-- test --}}

                <div class="dtr-slick-slider dtr-testimonial-slider dtr-slick-has-dots">
                    <!-- column 1 starts -->
                    <div class="dtr-testimonial">
                        <div style="width: 300px">
                            <div class="dtr-post-item">
                                <!-- member starts -->
                                <div
                                    class="dtr-team dtr-team-social-onhover text-center dtr-team-offset-border dtr-box-rounded">
                                    <div class="dtr-team-content-wrapper dtr-shadow">
                                        <div class="dtr-team-img"> <img src="assets/images/team-member-1.jpg"
                                                alt="image">
                                        </div>
                                        <div class="dtr-team-content bg-white">
                                            <h5 class="dtr-team-title">Will McMilan</h5>
                                            <p class="dtr-team-subtitle">CEO</p>
                                            <!-- team social starts -->
                                            <div class="dtr-team-social">
                                                <ul class="dtr-social dtr-social-list">
                                                    <li><a href="#" class="dtr-twitter" target="_blank"
                                                            title="twitter"></a>
                                                    </li>
                                                    <li><a href="#" class="dtr-facebook" target="_blank"
                                                            title="facebook"></a></li>
                                                    <li><a href="#" class="dtr-linkedin" target="_blank"
                                                            title="linkedin"></a></li>
                                                </ul>
                                            </div>
                                            <!-- team social ends -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- member ends -->

                        </div>
                    </div>
                    <!-- column 1 ends -->
                    <!-- column 2 starts -->
                    <div class="dtr-testimonial">
                        <div style="width: 300px">
                            <div class="dtr-post-item">
                                <!-- member starts -->
                                <div
                                    class="dtr-team dtr-team-social-onhover text-center dtr-team-offset-border dtr-box-rounded">
                                    <div class="dtr-team-content-wrapper dtr-shadow">
                                        <div class="dtr-team-img"> <img src="assets/images/team-member-1.jpg"
                                                alt="image">
                                        </div>
                                        <div class="dtr-team-content bg-white">
                                            <h5 class="dtr-team-title">Will McMilan</h5>
                                            <p class="dtr-team-subtitle">CEO</p>
                                            <!-- team social starts -->
                                            <div class="dtr-team-social">
                                                <ul class="dtr-social dtr-social-list">
                                                    <li><a href="#" class="dtr-twitter" target="_blank"
                                                            title="twitter"></a>
                                                    </li>
                                                    <li><a href="#" class="dtr-facebook" target="_blank"
                                                            title="facebook"></a></li>
                                                    <li><a href="#" class="dtr-linkedin" target="_blank"
                                                            title="linkedin"></a></li>
                                                </ul>
                                            </div>
                                            <!-- team social ends -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- member ends -->

                        </div>
                    </div>
                    <!-- column 2 ends -->

                    <!-- column 1 starts -->
                    <div class="dtr-testimonial">
                        <div style="width: 300px">
                            <div class="dtr-post-item">
                                <!-- member starts -->
                                <div
                                    class="dtr-team dtr-team-social-onhover text-center dtr-team-offset-border dtr-box-rounded">
                                    <div class="dtr-team-content-wrapper dtr-shadow">
                                        <div class="dtr-team-img"> <img src="assets/images/team-member-1.jpg"
                                                alt="image">
                                        </div>
                                        <div class="dtr-team-content bg-white">
                                            <h5 class="dtr-team-title">Will McMilan</h5>
                                            <p class="dtr-team-subtitle">CEO</p>
                                            <!-- team social starts -->
                                            <div class="dtr-team-social">
                                                <ul class="dtr-social dtr-social-list">
                                                    <li><a href="#" class="dtr-twitter" target="_blank"
                                                            title="twitter"></a>
                                                    </li>
                                                    <li><a href="#" class="dtr-facebook" target="_blank"
                                                            title="facebook"></a></li>
                                                    <li><a href="#" class="dtr-linkedin" target="_blank"
                                                            title="linkedin"></a></li>
                                                </ul>
                                            </div>
                                            <!-- team social ends -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- member ends -->

                        </div>
                    </div>
                    <!-- column 1 ends -->

                </div>
                {{-- end test --}}
            </div>
        </section>
        <!-- team section ends
================================================== -->

        <!-- section starts
================================================== -->
        <section id="statistik" class="dtr-section dtr-pt-100">
            <div class="container">

                <!-- heading starts -->
                <div class="dtr-section-intro text-left dtr-mb-50">
                    <h2 class="dtr-intro-heading">Statistik & Tutorial</h2>

                </div>
                <!-- heading ends -->

                <!--== row starts ==-->
                <div class="row">

                    <!-- column 1 starts -->
                    <div class="col-12 col-md-4 dtr-py-50">

                        <!-- counter starts -->
                        <div class="dtr-counter"> <i class="icon-cursor-fill color-blue"></i>
                            <div> <span class="dtr-counter-number counting-number color-blue" data-from="1" data-to="20"
                                    data-speed="1600">90</span> <span
                                    class="dtr-counter-suffix color-light-purple">+</span>
                                <p class="dtr-count-text">Jumlah Lowongan</p>
                            </div>
                        </div>
                        <!-- counter ends -->

                    </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-4 dtr-py-50 dtr-border-left dtr-border-right">

                        <!-- counter starts -->
                        <div class="dtr-counter"> <i class="icon-cloud-arrow-down-fill color-blue"></i>
                            <div> <span class="dtr-counter-number counting-number color-blue" data-from="1"
                                    data-to="236" data-speed="1600">236</span> <span
                                    class="dtr-counter-suffix color-light-purple">+</span>
                                <p class="dtr-count-text">Jumlah Perusahaan</p>
                            </div>
                        </div>
                        <!-- counter ends -->

                    </div>
                    <!-- column 2 ends -->

                    <!-- column 3 starts -->
                    <div class="col-12 col-md-4 dtr-py-50">

                        <!-- counter starts -->
                        <div class="dtr-counter"> <i class="icon-user-circle-gear-fill color-blue"></i>
                            <div><span class="dtr-counter-number counting-number color-blue" data-from="1" data-to="82"
                                    data-speed="1600">82</span> <span
                                    class="dtr-counter-suffix color-light-purple">%</span>
                                <p class="dtr-count-text">Pekerja Aktif</p>
                            </div>
                        </div>
                        <!-- counter ends -->

                    </div>
                    <!-- column 3 ends -->

                </div>
                <!--== row ends ==-->

                <!--== video starts ==-->
                <div class="dtr-video-box dtr-rounded overflow-hidden dtr-mt-100">

                    <!-- overlay -->
                    <div class="dtr-overlay"></div>

                    <!-- image -->
                    <img src="assets/images/video-bg.jpg" alt="image">

                    <!-- pulsating button starts -->
                    <div class="dtr-video-pulse-wrapper dtr-overlay-content">
                        <div class="dtr-video-pulse pulse-blue">
                            <div class="pulse pulse-1"></div>
                            <div class="pulse pulse-2"></div>
                            <div class="pulse pulse-3"></div>
                            <!-- video link -->
                            <a class="dtr-video-popup dtr-video-button vbox-item" data-autoplay="true"
                                data-vbtype="video" href="https://www.youtube.com/watch?v=kuceVNBTJio"></a>
                        </div>
                    </div>
                    <!-- pulsating button ends -->

                </div>
                <!--== video ends ==-->

            </div>
        </section>
        <!-- section ends
================================================== -->

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