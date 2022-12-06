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
                            <span class="counter-value" data-target="{{ count($data->data) }}">0</span>
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
<div class="row">
    <div class="col-xl-8">
        <!-- card -->
        <div class="card">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center mb-4">
                    <h5 class="card-title me-2">Penyerapan Pencaker</h5>
                </div>

                <div class="row align-items-center">
                    <div class="col-xl-12">
                        <div>
                            <div id="market-overview" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row-->

    <div class="col-xl-4">
        <!-- card -->
        <div class="card">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center mb-4">
                    <h5 class="card-title me-2">Pesebaran Pekerja</h5>
                    <div class="ms-auto">
                        <div class="dropdown">
                            <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted font-size-12">Sort By:</span> <span class="fw-medium">World<i
                                        class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="#">Malaysia</a>
                                <a class="dropdown-item" href="#">Singapura</a>
                                <a class="dropdown-item" href="#">Hongkong</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="sales-by-locations" data-colors='["#33c38e"]' style="height: 253px"></div>

                <div class="px-2 py-2">
                    <p class="mb-1">Malaysia <span class="float-end">80%</span></p>
                    <div class="progress mt-2" style="height: 6px;">
                        <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 80%"
                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="80">
                        </div>
                    </div>

                    <p class="mt-3 mb-1">Singapura <span class="float-end">55%</span></p>
                    <div class="progress mt-2" style="height: 6px;">
                        <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 55%"
                            aria-valuenow="55" aria-valuemin="0" aria-valuemax="55">
                        </div>
                    </div>

                    <p class="mt-3 mb-1">Hongkong <span class="float-end">65%</span></p>
                    <div class="progress mt-2" style="height: 6px;">
                        <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 65%"
                            aria-valuenow="65" aria-valuemin="0" aria-valuemax="65">
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>

<!-- end row-->

<div class="row">
    <div class="col-xl-3">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1"> List Pelamar</h4>
            </div><!-- end card header -->

            <div class="card-body px-0">
                <div class="px-3" data-simplebar style="max-height: 386px;">
                    @foreach ($data->data as $daftar_lamaran)
                    @foreach ($daftar_lamaran->daftar_pencaker as $daftar_pencaker)
                    @if ($daftar_pencaker->data_pencaker_status=='Menunggu')

                    <div class="d-flex align-items-center pb-4">
                        <div class="avatar-md me-4">
                            <img src="{{$daftar_pencaker->pencaker_image }}" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="font-size-15 mb-1">
                                <a href="{{ url('daftar-pelamar/'.$daftar_lamaran->lowongan_id) }}" class="text-dark">
                                    {{$daftar_pencaker->pencaker_name }}
                                </a>
                            </h5>
                            <span class="text-muted">{{$daftar_pencaker->pencaker_pendidikan_terakhir }}</span>
                        </div>
                        <div class="flex-shrink-0 text-end">
                            <div class="btn-group" role="group">
                                <a href="{{ url('penerimaan-lowongan/terima/'.$daftar_pencaker->data_pencaker_id) }}"
                                    class="btn btn-soft-success waves-effect waves-light"
                                    onclick="return confirm('Anda Yakin Akan Menerima {{ $daftar_pencaker->pencaker_name }} ?');">
                                    <i class="bx bx-check-double font-size-16 align-middle"></i>
                                </a>
                                <a href="{{ url('penerimaan-lowongan/tolak/'.$daftar_pencaker->data_pencaker_id) }}"
                                    class="btn btn-soft-danger waves-effect waves-light"
                                    onclick="return confirm('Anda Yakin Akan Menolak {{ $daftar_pencaker->pencaker_name }} ?');">
                                    <i class="bx bx-block font-size-16 align-middle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
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

                            @foreach ($data->data as $daftar_lamaran)

                            <tr>
                                <td style="width: 50px;">
                                    <div class="avatar-md me-4">
                                        <img src="@if ($daftar_lamaran->image_perusahaan != ''){{ url($daftar_lamaran->image_perusahaan) }}@else{{ URL::asset('assets/images/icons/icon.png') }}@endif"
                                            class="img-fluid rounded-circle" alt="">
                                    </div>
                                </td>

                                <td>
                                    <div>
                                        <h5 class="font-size-15"><a href="{{ url('daftar-lowongan') }}"
                                                class="text-dark">{{
                                                $daftar_lamaran->judul_lowongan }}</a>
                                        </h5>
                                        <span class="text-muted">{{ $daftar_lamaran->create_at }}</span>
                                    </div>
                                </td>

                                <td>
                                    <p class="mb-1"><a href="" class="text-dark">Pelamar</a></p>
                                    <span class="text-muted">{{ $daftar_lamaran->total }}</span>
                                </td>
                                <td>
                                    <p class="mb-1"><a href="" class="text-dark">Diterima</a></p><span
                                        class="text-muted">{{ $daftar_lamaran->diterima }}</span>
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