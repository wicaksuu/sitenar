@extends('layouts.dasson.master')
@section('title') List Laporan @endsection
@section('css')
<link href="{{ URL::asset('/dasson/libs/datatables.net-bs4/datatables.net-bs4.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('dasson/libs/datatables.net-responsive-bs4/datatables.net-responsive-bs4.min.css') }}"
    rel="stylesheet" type="text/css" />

@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Laporan @endslot
@slot('title') List Laporan @endslot
@endcomponent
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-0">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title">Total Laporan <span class="text-muted fw-normal ms-2">({{
                                    count($data) }})</span>
                            </h5>
                        </div>
                    </div>


                </div>
                <!-- end row -->

                <div class="table-responsive mb-4">
                    <table class="table align-middle datatable dt-responsive table-check nowrap"
                        style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Pendaftaran</th>
                                <th scope="col">Tanggal Laporan</th>
                                <th scope="col">Tanggal Laporan Kembali</th>
                                <th scope="col">Status</th>
                                <th style="width: 80px; min-width: 80px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0 ?>
                            @foreach ($data as $value)
                            <?php $i++ ?>
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ str_replace('"','',$value->kode_pendaftaran) }}</td>
                                <td>{{ str_replace('"','',$value->tanggal_lapor) }}</td>
                                <td>{{ str_replace('"','',$value->tanggal_lapor_kembali) }}</td>
                                <td>
                                    @if ($value->status==0)
                                    <a class="badge badge-soft-primary">Menunggu Verifikasi</a>
                                    @elseif ($value->status==1)
                                    <a class="badge badge-soft-success">Verifed</a>
                                    @else
                                    <a class="badge badge-soft-danger">Ditolak</a>
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button
                                            class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item"
                                                    href="{{ url('laporan-open') }}/{{ $value->id }}">Open/Edit</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Download</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- end table -->
                </div>
                <!-- end table responsive -->
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ URL::asset('dasson/libs/datatables.net/datatables.net.min.js') }}"></script>
<script src="{{ URL::asset('dasson/libs/datatables.net-bs4/datatables.net-bs4.min.js') }}"></script>
<script src="{{ URL::asset('dasson/libs/datatables.net-responsive/datatables.net-responsive.min.js') }}"></script> --}}
<script src="{{ URL::asset('/dasson/js/app.min.js') }}"></script>
<script src="{{ URL::asset('dasson/js/pages/datatable-pages.init.js') }}"></script>
@endsection