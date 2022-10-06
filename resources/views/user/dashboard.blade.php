@extends('layouts.dasson.master')
@section('title') @lang('Dashboards') @endsection
@section('css')

<link href="{{ URL::asset('/dasson/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">

@endsection
@section('content')

@component('components.breadcrumb')
@slot('li_1') Dashboard @endslot
@slot('title'){{ Auth::user()->name }} @endslot
@endcomponent


<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1"> List Lamaran</h4>
            </div>


            <div class="card-body px-0">
                <div class="px-3" data-simplebar style="max-height: 386px;">
                    @foreach ($data->data as $daftar_lamaran)
                    @if (isset($daftar_lamaran->daftar_pencaker[0]->data_pencaker_status))
                    <div class="d-flex align-items-center pb-4">
                        <div class="avatar-md me-4">
                            <img src="@if ($daftar_lamaran->image_perusahaan != ''){{ url($daftar_lamaran->image_perusahaan) }}@else{{ URL::asset('assets/images/icons/icon.png') }}@endif"
                                class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="font-size-15 mb-1">
                                <a href="" class="text-dark">
                                    {{ $daftar_lamaran->judul_lowongan }}
                                </a>
                            </h5>
                            <span class="text-muted">{{ $daftar_lamaran->nama_perusahaan }}</span>
                        </div>
                        <div class="flex-shrink-0 text-end">
                            @if ($daftar_lamaran->daftar_pencaker[0]->data_pencaker_status == 'Diterima')
                            <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light">
                                {{ $daftar_lamaran->daftar_pencaker[0]->data_pencaker_status }}
                            </button>
                            @elseif ($daftar_lamaran->daftar_pencaker[0]->data_pencaker_status == 'Ditolak')
                            <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light">
                                {{ $daftar_lamaran->daftar_pencaker[0]->data_pencaker_status }}
                            </button>
                            @else
                            <button type="button" class="btn btn-sm btn-warning btn-rounded waves-effect waves-light">
                                {{ $daftar_lamaran->daftar_pencaker[0]->data_pencaker_status }}
                            </button>
                            @endif
                        </div>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-8">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Daftar Lowongan</h4>

            </div>

            <div class="card-body px-0 pt-2 ">
                <div class="table-responsive border-0 px-3" data-simplebar style="max-height: 395px;">
                    <table class="table align-middle table-nowrap ">
                        <tbody>

                            @foreach ($data->data as $lowongan)
                            @if (!isset($lowongan->daftar_pencaker[0]->data_pencaker_status))
                            <tr>
                                <td>
                                    <img src="@if ($lowongan->image_perusahaan != ''){{ url($lowongan->image_perusahaan) }}@else{{ URL::asset('assets/images/icons/icon.png') }}@endif"
                                        class="avatar-lg rounded-circle img-thumbnail">
                                </td>

                                <td>
                                    <div>
                                        <a href="" class="text-dark">
                                            <h5 class="font-size-15">{{ $lowongan->judul_lowongan }}</h5>
                                            <span class="text-muted">{{ $lowongan->nama_perusahaan }}</span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-1" class="text-dark">Link Pendaftaran</p>
                                    <span class="text-muted">
                                        <a href="{{$lowongan->link_pendaftaran }}" target="_blank">
                                            {{$lowongan->link_pendaftaran }}
                                        </a>
                                    </span>
                                </td>
                                <td>
                                    <p class="mb-1" class="text-dark">Email</p>
                                    <span class="text-muted">{{ $lowongan->email }}</span>
                                </td>
                                <td>
                                    <p class="mb-1" class="text-dark">Lokasi</p>
                                    <span class="text-muted">{{ $lowongan->lokasi_kerja }}</span>
                                </td>
                                <td>
                                    <a href="{{ url('user-lamar/'.$lowongan->lowongan_id.'/'.$lowongan->nama_perusahaan) }}"
                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                        onclick="return confirm('Anda Yakin Akan Melamar di {{ $lowongan->nama_perusahaan }} sebagai {{ $lowongan->judul_lowongan }} ?');">
                                        Lamar</a>
                                </td>
                            </tr>
                            @endif
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

</div>

<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1"> List Pelatihan</h4>
            </div>


            <div class="card-body px-0">
                <div class="px-3" data-simplebar style="max-height: 386px;">
                    @foreach ($peserta as $daftar_pealtihan)
                    @if (isset($daftar_pealtihan->status))

                    <div class="d-flex align-items-center pb-4">
                        <div class="avatar-md me-4">
                            <img src="@if ($daftar_pealtihan->image_perusahaan != ''){{ url($daftar_pealtihan->image_perusahaan) }}@else{{ URL::asset('assets/images/icons/icon.png') }}@endif"
                                class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="font-size-15 mb-1">
                                <a href="" class="text-dark">
                                    {{ $daftar_pealtihan->pelatihan }}
                                </a>
                            </h5>
                            <span class="text-muted">{{ $daftar_pealtihan->perusahaan }}</span>
                        </div>
                        <div class="flex-shrink-0 text-end">
                            @if ($daftar_pealtihan->status == 'Diterima')
                            <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light">
                                {{ $daftar_pealtihan->status }}
                            </button>
                            @elseif ($daftar_pealtihan->status == 'Ditolak')
                            <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light">
                                {{ $daftar_pealtihan->status }}
                            </button>
                            @else
                            <button type="button" class="btn btn-sm btn-warning btn-rounded waves-effect waves-light">
                                {{ $daftar_pealtihan->status }}
                            </button>
                            @endif
                        </div>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-8">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Daftar Pelatihan</h4>

            </div>

            <div class="card-body px-0 pt-2 ">
                <div class="table-responsive border-0 px-3" data-simplebar style="max-height: 395px;">
                    <table class="table align-middle table-nowrap ">
                        <tbody>

                            @foreach ($daftar_pelatihan as $list_pelatihan)
                            @if (!isset($list_pelatihan->status))
                            @if (isset($list_pelatihan->image_perusahaan))
                            <tr>
                                <td>
                                    <img src="@if ($list_pelatihan->image_perusahaan != ''){{ url($list_pelatihan->image_perusahaan) }}@else{{ URL::asset('assets/images/icons/icon.png') }}@endif"
                                        class="avatar-lg rounded-circle img-thumbnail">
                                </td>

                                <td>
                                    <div>
                                        <a href="" class="text-dark">
                                            <h5 class="font-size-15">{{ $list_pelatihan->nama_pelatihan }}</h5>
                                            <span class="text-muted">{{ $list_pelatihan->perusahaan }}</span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-1" class="text-dark">Link Pendaftaran</p>
                                    <span class="text-muted">
                                        <a href="{{$list_pelatihan->link_pendaftaran }}" target="_blank">
                                            {{$list_pelatihan->link_pendaftaran }}
                                        </a>
                                    </span>
                                </td>
                                <td>
                                    <p class="mb-1" class="text-dark">Email</p>
                                    <span class="text-muted">{{ $list_pelatihan->email }}</span>
                                </td>
                                <td>
                                    <p class="mb-1" class="text-dark">Lokasi</p>
                                    <span class="text-muted">{{ $list_pelatihan->lokasi_pelatihan }}</span>
                                </td>
                                <td>
                                    <a href="{{ url(Auth::user()->role.'/daftar-pelatihan') }}/{{ $list_pelatihan->list_pelatihan_id }}/{{ $list_pelatihan->nama_pelatihan }}"
                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                        onclick="return confirm('Anda Yakin Akan Mengikuti Pelatihan di {{ $list_pelatihan->perusahaan }}  {{ $list_pelatihan->nama_pelatihan }} ?');">
                                        Ikuti</a>
                                </td>
                            </tr>
                            @endif
                            @endif
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

</div>
<!-- end row -->
@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/dasson/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('/dasson/libs/admin-resources/admin-resources.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/dasson/js/pages/dashboard.init.js') }}"></script>
<script src="{{ URL::asset('/dasson/js/app.min.js') }}"></script>
@endsection