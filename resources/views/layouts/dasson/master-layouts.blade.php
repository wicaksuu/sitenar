<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | Sitenar</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="author" content="wicaksu">
    <meta name="description" content="HTML Landing Page Teamplate">
    <meta name="keywords" content="ketenaga kerjaan, kerjaan, disnaker, dinas, goverment">

    <!-- FAVICON FILES -->
    <link href="{{ URL::asset('assets/images/icons/sitenar144.png') }}" rel="apple-touch-icon" sizes="144x144">
    <link href="{{ URL::asset('assets/images/icons/sitenar120.png') }}" rel="apple-touch-icon" sizes="120x120">
    <link href="{{ URL::asset('assets/images/icons/sitenar76.png') }}" rel="apple-touch-icon" sizes="76x76">
    <link href="{{ URL::asset('assets/images/icons/icon.png') }}" rel="shortcut icon">
    @include('layouts.dasson.head-css')
</head>

@section('body')
@include('layouts.dasson.body')
@show

<!-- Begin page -->
<div id="layout-wrapper">

    <body data-layout="horizontal">

        @include('layouts.dasson.horizontal')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->


        <div class="main-content">
            <div class="page-content">
                <!-- Start content -->
                <div class="container-fluid">
                    @yield('content')
                </div> <!-- content -->
            </div>
            @include('layouts.dasson.footer')
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Right Sidebar -->
@include('layouts.dasson.right-sidebar')
<!-- END Right Sidebar -->

@include('layouts.dasson.vendor-scripts')

</body>


</html>