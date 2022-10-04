@extends('layouts.dasson.master')
@section('title') @lang('Dashboards') @endsection
@section('css')

<link href="{{ URL::asset('/dasson/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">

@endsection
@section('content')

@component('components.breadcrumb')
@slot('li_1') Dashboard @endslot
@slot('title') Welcome ! @endslot
@endcomponent

<div class="row">
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Pekerja</span>
                        <h4 class="mb-3">
                            <span class="counter-value" data-target="100">0</span>
                        </h4>
                    </div>

                    <div class="flex-shrink-0 text-end dash-widget">
                        <div id="mini-chart1" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Pekerja Laki-Laki</span>
                        <h4 class="mb-3">
                            <span class="counter-value" data-target="70">0</span>
                        </h4>
                    </div>
                    <div class="flex-shrink-0 text-end dash-widget">
                        <div id="mini-chart2" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col-->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Pekerja Perempuan</span>
                        <h4 class="mb-3">
                            <span class="counter-value" data-target="30">0</span>
                        </h4>
                    </div>
                    <div class="flex-shrink-0 text-end dash-widget">
                        <div id="mini-chart3" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Lowongan</span>
                        <h4 class="mb-3">
                            <span class="counter-value" data-target="5">0</span>
                        </h4>
                    </div>
                    <div class="flex-shrink-0 text-end dash-widget">
                        <div id="mini-chart4" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row-->


<!-- end row-->

<div class="row">
    <div class="col-xl-3">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1"> List Pelamar</h4>
            </div><!-- end card header -->

            <div class="card-body px-0">
                <div class="px-3" data-simplebar style="max-height: 386px;">
                    <div class="d-flex align-items-center pb-4">
                        <div class="avatar-md me-4">
                            <img src="{{ URL::asset('./dasson/images/users/avatar-2.jpg') }}"
                                class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Randy Matthews</a></h5>
                            <span class="text-muted">Randy@gmail.com</span>
                        </div>
                        <div class="flex-shrink-0 text-end">
                            <div class="dropdown align-self-start">
                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Terima</a>
                                    <a class="dropdown-item" href="#">Tolak</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center pb-4">
                        <div class="avatar-md me-4">
                            <img src="{{ URL::asset('./dasson/images/users/avatar-4.jpg') }}"
                                class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Vernon Wood</a></h5>
                            <span class="text-muted">Vernon@gmail.com</span>
                        </div>
                        <div class="flex-shrink-0 text-end">
                            <div class="dropdown align-self-start">
                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Terima</a>
                                    <a class="dropdown-item" href="#">Tolak</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center pb-4">
                        <div class="avatar-md me-4">
                            <img src="{{ URL::asset('./dasson/images/users/avatar-5.jpg') }}"
                                class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Howard Rhoades</a></h5>
                            <span class="text-muted">Howard@gmail.com</span>
                        </div>
                        <div class="flex-shrink-0 text-end">
                            <div class="dropdown align-self-start">
                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Terima</a>
                                    <a class="dropdown-item" href="#">Tolak</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center pb-4">
                        <div class="avatar-md me-4">
                            <img src="{{ URL::asset('./dasson/images/users/avatar-6.jpg') }}"
                                class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Arthur Zurcher</a></h5>
                            <span class="text-muted">Arthur@gmail.com</span>
                        </div>
                        <div class="flex-shrink-0 text-end">
                            <div class="dropdown align-self-start">
                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Terima</a>
                                    <a class="dropdown-item" href="#">Tolak</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center pb-4">
                        <div class="avatar-md me-4">
                            <img src="{{ URL::asset('./dasson/images/users/avatar-8.jpg') }}"
                                class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Angela Palmer</a></h5>
                            <span class="text-muted">Angela@gmail.com</span>
                        </div>
                        <div class="flex-shrink-0 text-end">
                            <div class="dropdown align-self-start">
                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Terima</a>
                                    <a class="dropdown-item" href="#">Tolak</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center pb-3">
                        <div class="avatar-md me-4">
                            <img src="{{ URL::asset('./dasson/images/users/avatar-9.jpg') }}"
                                class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Dorothy Wimson</a></h5>
                            <span class="text-muted">Dorothy@gmail.com</span>
                        </div>
                        <div class="flex-shrink-0 text-end">
                            <div class="dropdown align-self-start">
                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Terima</a>
                                    <a class="dropdown-item" href="#">Tolak</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-5">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Daftar Lowongan</h4>

            </div><!-- end card header -->

            <div class="card-body px-0 pt-2 ">
                <div class="table-responsive border-0 px-3" data-simplebar style="max-height: 395px;">
                    <table class="table align-middle table-nowrap ">
                        <tbody>

                            @for ($i = 0; $i < 10; $i++) <tr>
                                <td style="width: 50px;">
                                    <div class="avatar-md me-4">
                                        <img src="{{ URL::asset('assets/images/icons/sitenar120.png') }}"
                                            class="img-fluid" alt="">
                                    </div>
                                </td>

                                <td>
                                    <div>
                                        <h5 class="font-size-15"><a href="" class="text-dark">Full Stack Dev.</a>
                                        </h5>
                                        <span class="text-muted">{{ date('d/m/Y') }}</span>
                                    </div>
                                </td>

                                <td>
                                    <p class="mb-1"><a href="" class="text-dark">Pelamar</a></p>
                                    <span class="text-muted">{{ rand(0, 200) }}</span>
                                </td>
                                <td>
                                    <p class="mb-1"><a href="" class="text-dark">Diterima</a></p>
                                    <span class="text-muted">{{ rand(0, 50) }}</span>
                                </td>
                                </tr>
                                @endfor

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Daftar Laporan</h4>

            </div><!-- end card header -->

            <div class="card-body px-0 pt-2 ">
                <div class="table-responsive border-0 px-3" data-simplebar style="max-height: 395px;">
                    <table class="table align-middle table-nowrap ">
                        <tbody>

                            @foreach ( $laporan as $laporans)

                            <tr>
                                <td>
                                    <div>
                                        <h5 class="font-size-15"><a href="" class="text-dark">{{
                                                str_replace('"','',$laporans->kode_pendaftaran)
                                                }}</a>
                                        </h5>
                                        <span class="text-muted"> Kode Laporan</span>
                                    </div>
                                </td>

                                <td>
                                    <p class="mb-1"><a class="text-dark">{{
                                            str_replace('"','',$laporans->tanggal_lapor) }}</a></p>
                                    <span class="text-muted">Tanggal Pelaporan</span>
                                </td>

                                <td>
                                    <p class="mb-1">
                                        @if ($laporans->status==0)
                                        <a class="badge badge-soft-primary">Menunggu Verifikasi</a>
                                        @elseif ($laporans->status==1)
                                        <a class="badge badge-soft-success">Verifed</a>
                                        @else
                                        <a class="badge badge-soft-danger">Ditolak</a>
                                        @endif
                                    </p>

                                    <span class="text-muted mt-1">Status</span>

                                </td>
                            </tr>

                            @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div><!-- end row -->
@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/dasson/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('/dasson/libs/admin-resources/admin-resources.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/dasson/js/pages/dashboard.init.js') }}"></script>
<script src="{{ URL::asset('/dasson/js/app.min.js') }}"></script>
@endsection