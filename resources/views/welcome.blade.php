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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div id="dtr-wrapper" class="clearfix">
        <style>
            .float {
                position: fixed;
                width: 60px;
                height: 60px;
                bottom: 80px;
                right: 23px;
                background-color: #25d366;
                color: #FFF;
                border-radius: 50px;
                text-align: center;
                font-size: 30px;
                box-shadow: 2px 2px 3px #999;
                z-index: 100;
            }

            .my-float {
                margin-top: 16px;
            }
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://wa.me/6282257850348" class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>

        <!-- preloader starts -->
        {{-- <div class="dtr-preloader">
            <div class="dtr-preloader-inner">
                <div class="dtr-loader">Loading...</div>
            </div>
        </div> --}}
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
                            @if (!Auth::check())

                            <a class="dtr-btn dtr-btn-small dtr-mt-50" href="{{ url('register') }}" role="button">
                                <!-- icon -->
                                <i class="icon-rocket-launch-fill" aria-hidden="true"></i>
                                <p>
                                    <!-- subtext -->
                                    <span class="dtr-btn-subtext">Daftar</span>
                                    <!-- text -->
                                    <span class="dtr-btn-text">Sekarang</span>
                                </p>
                            </a>
                            @else
                            <a class="dtr-btn dtr-btn-small dtr-mt-50" href="{{ url(Auth::user()->role) }}"
                                role="button">
                                <!-- icon -->
                                <i class="icon-laptop-fill" aria-hidden="true"></i>
                                <p>
                                    <span class="dtr-btn-text">Dashboard</span>
                                </p>
                            </a>
                            @endif
                            <!-- button ends -->

                        </div>
                        <div class="col-12 col-md-6 small-device-space">
                            <img src="dasson/images/maintenance.png" alt="image">
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

                    @foreach ($pengumuman as $pengumumans)
                    @if (isset($pengumumans->tubmails))

                    <div class="dtr-testimonial bg-white">
                        <div class="dtr-post-item">
                            <div class="dtr-post-img">
                                {!! $pengumumans->tubmails !!}
                            </div>

                            <div class="dtr-post-content"> <span class="dtr-meta-category">
                                    <a href="{{ url('user/berita-pelatihan/') }}/{{ $pengumumans->type }}">{{
                                        $pengumumans->type }}</a>
                                </span>
                                <h5 class="dtr-post-title"><a
                                        href="{{ url('user/berita-pelatihan/') }}/{{ $pengumumans->type }}"
                                        rel="bookmark">{{
                                        $pengumumans->judul }}</a></h5>
                                <div class="dtr-meta color-dark-gray"> <span class="dtr-meta-author-avatar"><img
                                            src="{{ $pengumumans->image_perusahaan }}" alt="image"></span>
                                    {{ $pengumumans->perusahaan }}<span class="dtr-meta-date">{{
                                        $pengumumans->create_at }}</span>
                                </div>
                                <p class="dtr-post-excerpt">{!! $pengumumans->deskripsi !!}</p>
                                <a class="dtr-read-more"
                                    href="{{ url('user/berita-pelatihan/') }}/{{ $pengumumans->type }}"><span
                                        class="dtr-read-more-content">Lanjut...</span></a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach



                </div>
            </div>
        </section>

        <section id="lowongan" class="dtr-section dtr-section-with-bg dtr-py-100"
            style="background-image: url(assets/images/section-bg-img2.jpg);">

            <div class="dtr-overlay dtr-overlay-dark"></div>

            <div class="container-fluid dtr-overlay-content">

                <div class="dtr-section-intro dtr-dark-bg-intro text-center dtr-mb-50">
                    <h2 class="dtr-intro-heading">Lowongan Pekerjaan</h2>
                </div>

                <div class="dtr-slick-slider dtr-testimonial-slider dtr-slick-has-dots">

                    @foreach ($loker as $lokers)
                    <div class="dtr-testimonial bg-white">
                        <div class="dtr-client-info">
                            <p class="dtr-testimonial-user"><img src="{{ $lokers->image_perusahaan }}" alt="Sitenar">
                            </p>
                            <div>
                                <h5 class="dtr-client-name">{{ $lokers->judul_lowongan }}</h5>
                                <span class="dtr-client-job">{{ $lokers->nama_perusahaan }}</span>
                            </div>
                            <div class="col d-flex align-items-start justify-content-end gap-2 mb-2">
                                {{$lokers->lokasi_kerja }}
                            </div>
                        </div>
                        <p class="dtr-testimonial-content">{{ $lokers->deskripsi }}</p>
                        <a class="dtr-read-more" href="{{ url('daftar-lowongan') }}"><span
                                class="dtr-read-more-content">Lanjut...</span></a>
                    </div>
                    @endforeach


                </div>

            </div>

        </section>
        <section id="team" class="dtr-section dtr-pt-100 dtr-pb-70">
            <div class="container">


                <!-- heading starts -->
                <div class="dtr-section-intro text-center dtr-mb-50">
                    <h2 class="dtr-intro-heading">Profil Pejabat</h2>
                </div>
                <!-- heading ends -->

                {{-- test --}}

                <div class="dtr-slick-slider dtr-testimonial-slider dtr-slick-has-dots text-center">
                    <!-- column 1 starts -->
                    <div class="dtr-testimonial">
                        <div style="width: 300px">
                            <div class="dtr-post-item">
                                <!-- member starts -->
                                <div
                                    class="dtr-team dtr-team-social-onhover text-center dtr-team-offset-border dtr-box-rounded">
                                    <div class="dtr-team-content-wrapper dtr-shadow">
                                        <div class="dtr-team-img"> <img src="img/DSC02257.jpg" alt="image">
                                        </div>
                                        <div class="dtr-team-content bg-white">
                                            <h5 class="dtr-team-title">Heru Kuncoro, S.Sos, M.Msi</h5>
                                            <p class="dtr-team-subtitle">Kepala Dinas</p>
                                            <!-- team social starts -->
                                            <div class="dtr-team-social">
                                                <ul class="dtr-social dtr-social-list">
                                                    <li><a href="#" class="dtr-twitter" target="_blank"
                                                            title="twitter"></a>
                                                    </li>
                                                    <li><a href="#" class="dtr-facebook" target="_blank"
                                                            title="facebook"></a>
                                                    </li>
                                                    <li><a href="#" class="dtr-linkedin" target="_blank"
                                                            title="linkedin"></a>
                                                    </li>
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
                                        <div class="dtr-team-img"> <img src="img/DSC02262.jpg" alt="image">
                                        </div>
                                        <div class="dtr-team-content bg-white">
                                            <h5 class="dtr-team-title">Tri Budihartoyo, SE. M.Si</h5>
                                            <p class="dtr-team-subtitle">Sekertaris Dinas</p>
                                            <!-- team social starts -->
                                            <div class="dtr-team-social">
                                                <ul class="dtr-social dtr-social-list">
                                                    <li><a href="#" class="dtr-twitter" target="_blank"
                                                            title="twitter"></a>
                                                    </li>
                                                    <li><a href="#" class="dtr-facebook" target="_blank"
                                                            title="facebook"></a>
                                                    </li>
                                                    <li><a href="#" class="dtr-linkedin" target="_blank"
                                                            title="linkedin"></a>
                                                    </li>
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
                                        <div class="dtr-team-img"> <img src="img/DSC02265.jpg" alt="image">
                                        </div>
                                        <div class="dtr-team-content bg-white">
                                            <h5 class="dtr-team-title">Ratnasari Wandanwulan, S.H</h5>
                                            <p class="dtr-team-subtitle">Hubungan Industrial & jamsostek</p>
                                            <!-- team social starts -->
                                            <div class="dtr-team-social">
                                                <ul class="dtr-social dtr-social-list">
                                                    <li><a href="#" class="dtr-twitter" target="_blank"
                                                            title="twitter"></a>
                                                    </li>
                                                    <li><a href="#" class="dtr-facebook" target="_blank"
                                                            title="facebook"></a>
                                                    </li>
                                                    <li><a href="#" class="dtr-linkedin" target="_blank"
                                                            title="linkedin"></a>
                                                    </li>
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

                    <!-- column 1 starts -->
                    <div class="dtr-testimonial">
                        <div style="width: 300px">
                            <div class="dtr-post-item">
                                <!-- member starts -->
                                <div
                                    class="dtr-team dtr-team-social-onhover text-center dtr-team-offset-border dtr-box-rounded">
                                    <div class="dtr-team-content-wrapper dtr-shadow">
                                        <div class="dtr-team-img"> <img src="img/DSC02248.jpg" alt="image">
                                        </div>
                                        <div class="dtr-team-content bg-white">
                                            <h5 class="dtr-team-title">Rahayu Susanti, S.STP, M.Si</h5>
                                            <p class="dtr-team-subtitle">Perindustrian</p>
                                            <!-- team social starts -->
                                            <div class="dtr-team-social">
                                                <ul class="dtr-social dtr-social-list">
                                                    <li><a href="#" class="dtr-twitter" target="_blank"
                                                            title="twitter"></a>
                                                    </li>
                                                    <li><a href="#" class="dtr-facebook" target="_blank"
                                                            title="facebook"></a>
                                                    </li>
                                                    <li><a href="#" class="dtr-linkedin" target="_blank"
                                                            title="linkedin"></a>
                                                    </li>
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

                    <!-- column 1 starts -->
                    <div class="dtr-testimonial">
                        <div style="width: 300px">
                            <div class="dtr-post-item">
                                <!-- member starts -->
                                <div
                                    class="dtr-team dtr-team-social-onhover text-center dtr-team-offset-border dtr-box-rounded">
                                    <div class="dtr-team-content-wrapper dtr-shadow">
                                        <div class="dtr-team-img"> <img src="img/DSC02244.jpg" alt="image">
                                        </div>
                                        <div class="dtr-team-content bg-white">
                                            <h5 class="dtr-team-title">Hengky Sukarno, S.Sos</h5>
                                            <p class="dtr-team-subtitle">Penempatan dan Perluasan Kesempatan Kerja</p>
                                            <!-- team social starts -->
                                            <div class="dtr-team-social">
                                                <ul class="dtr-social dtr-social-list">
                                                    <li><a href="#" class="dtr-twitter" target="_blank"
                                                            title="twitter"></a>
                                                    </li>
                                                    <li><a href="#" class="dtr-facebook" target="_blank"
                                                            title="facebook"></a>
                                                    </li>
                                                    <li><a href="#" class="dtr-linkedin" target="_blank"
                                                            title="linkedin"></a>
                                                    </li>
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


                    <!-- column 1 starts -->
                    <div class="dtr-testimonial">
                        <div style="width: 300px">
                            <div class="dtr-post-item">
                                <!-- member starts -->
                                <div
                                    class="dtr-team dtr-team-social-onhover text-center dtr-team-offset-border dtr-box-rounded">
                                    <div class="dtr-team-content-wrapper dtr-shadow">
                                        <div class="dtr-team-img"> <img src="img/DSC02254.jpg" alt="image">
                                        </div>
                                        <div class="dtr-team-content bg-white">
                                            <h5 class="dtr-team-title">Tri Waluyo Jatmika, S.Sos, MM</h5>
                                            <p class="dtr-team-subtitle">Pelatihan dan Produktifitas</p>
                                            <!-- team social starts -->
                                            <div class="dtr-team-social">
                                                <ul class="dtr-social dtr-social-list">
                                                    <li><a href="#" class="dtr-twitter" target="_blank"
                                                            title="twitter"></a>
                                                    </li>
                                                    <li><a href="#" class="dtr-facebook" target="_blank"
                                                            title="facebook"></a>
                                                    </li>
                                                    <li><a href="#" class="dtr-linkedin" target="_blank"
                                                            title="linkedin"></a>
                                                    </li>
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
                <div class="dtr-section-intro text-left dtr-mb-50 text-center">
                    <h2 class="dtr-intro-heading">Statistik & Tutorial</h2>

                </div>
                <!-- heading ends -->

                <!--== row starts ==-->
                <div class="row">
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-3 dtr-py-50 text-center">
                        <!-- counter starts -->
                        <div class="dtr-counter "> <i class="icon-door-fill color-blue"></i>
                            <div> <span class="dtr-counter-number counting-number color-blue" data-from="0"
                                    data-to="{{ 722 }}" data-speed="1600">{{ 722 }}</span>
                                <span class="dtr-counter-suffix color-light-purple">+</span>
                                <p class="dtr-count-text">Jumlah Pengunjung</p>
                            </div>
                        </div>
                        <!-- counter ends -->

                    </div>
                    <!-- column 1 ends -->
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-3 dtr-py-50 dtr-border-left dtr-border-right text-center">
                        <!-- counter starts -->
                        <div class="dtr-counter "> <i class="icon-cursor-fill color-blue"></i>
                            <div> <span class="dtr-counter-number counting-number color-blue" data-from="0"
                                    data-to="{{ $count_lowongan }}" data-speed="1600">{{ $count_lowongan }}</span>
                                <span class="dtr-counter-suffix color-light-purple">+</span>
                                <p class="dtr-count-text">Jumlah Lowongan</p>
                            </div>
                        </div>
                        <!-- counter ends -->

                    </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-3 dtr-py-50 dtr-border-left dtr-border-right text-center">

                        <!-- counter starts -->
                        <div class="dtr-counter "> <i class="icon-cloud-arrow-down-fill color-blue"></i>
                            <div> <span class="dtr-counter-number counting-number color-blue" data-from="0"
                                    data-to="{{ $count_perusahaan }}" data-speed="1600">{{ $count_perusahaan }}</span>
                                <span class="dtr-counter-suffix color-light-purple">+</span>
                                <p class="dtr-count-text">Jumlah Perusahaan</p>
                            </div>
                        </div>
                        <!-- counter ends -->

                    </div>
                    <!-- column 2 ends -->

                    <!-- column 3 starts -->
                    <div class="col-12 col-md-3 dtr-py-50 text-center">

                        <!-- counter starts -->
                        <div class="dtr-counter "> <i class="icon-user-circle-gear-fill color-blue"></i>
                            <div><span class="dtr-counter-number counting-number color-blue" data-from="0"
                                    data-to="{{ $count_pekerja }}" data-speed="1600">{{ $count_pekerja }}</span> <span
                                    class="dtr-counter-suffix color-light-purple">+</span>
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
                    <img src="assets/images/sitenar-bg.png" alt="image">

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