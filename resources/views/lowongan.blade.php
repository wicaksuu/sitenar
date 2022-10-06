@extends('layouts.dasson.master')
@section('title') Daftar Lowongan @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Lowongan @endslot
@slot('title') Daftar Lowongan @endslot
@endcomponent
<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <h5 class="card-title">Total Lowongan <span class="text-muted fw-normal ms-2">({{ count($data->data)
                    }})</span>
            </h5>
        </div>
    </div>
    @if (Auth::user()->role == 'perusahaan' || Auth::user()->role == 'disnaker')
    <div class="col-md-6">
        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
            <div>
                <a href="tambah-lowongan" class="btn btn-secondary"><i class="bx bx-plus me-1"></i> Add New</a>
            </div>
        </div>

    </div>
    @endif

    @include('notif')
</div>

<div class="row">
    <!-- end row -->
    @foreach ($data->data as $lowongan)

    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center pb-3">
                    <div>
                        <img src="@if ($lowongan->image_perusahaan != ''){{ url($lowongan->image_perusahaan) }}@else{{ URL::asset('assets/images/icons/icon.png') }}@endif"
                            alt="" class="avatar-lg rounded-circle img-thumbnail">
                    </div>
                    <div class="flex-1 ms-3">
                        <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">{{ $lowongan->nama_perusahaan }}</a>
                        </h5>
                        <p class="text-muted mb-0">{{ $lowongan->judul_lowongan }}</p>
                    </div>
                </div>
                <div class="text-center">
                    <img src="{{ $lowongan->image }}" class="img-fluid" alt="">
                </div>

                <div class="mt-3 pt-1">
                    <p>{{ $lowongan->deskripsi }}</p>
                </div>
                <div class="mt-3 pt-1">
                    <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i>
                        {{ $lowongan->nomor_wa_pendaftaran }}</p>
                    <p class="text-muted mb-0 mt-2"><i
                            class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i>
                        {{ $lowongan->email }}</p>
                    <p class="text-muted mb-0 mt-2"><i
                            class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>{{
                        $lowongan->lokasi_kerja }}</p>
                    <a href="{{$lowongan->link_pendaftaran }}" target="_blank">
                        <p class="text-muted mb-0 mt-2">
                            <i class="mdi mdi-web font-size-15 align-middle pe-2 text-primary"></i>
                            {{$lowongan->link_pendaftaran }}
                        </p>
                    </a>
                </div>
            </div>
            <div class="btn-group" role="group">

                @if (Auth::user()->role == 'perusahaan' || Auth::user()->role == 'disnaker')

                <a href="{{ url('daftar-pelamar/'.$lowongan->lowongan_id) }}"
                    class="btn btn-outline-light text-truncate btn-success"><i class="uil uil-envelope-alt me-1"></i>
                    Pelamar {{ count($lowongan->daftar_pencaker) }}</a>

                <a href="{{ url('perusahaan-hapus-lowongan/'.$lowongan->lowongan_id) }}"
                    class="btn btn-outline-light text-truncate btn-danger"
                    onclick="return confirm('Are you sure you want to delete this item?');">
                    <i class="uil uil-envelope-alt me-1"></i>
                    Hapus</a>
                @else
                @if (isset($lowongan->daftar_pencaker[0]->data_pencaker_status))
                @if ($lowongan->daftar_pencaker[0]->data_pencaker_status == 'Diterima')
                <button type="button" class="btn btn-success waves-effect waves-light">
                    {{ $lowongan->daftar_pencaker[0]->data_pencaker_status }}
                </button>
                @elseif ($lowongan->daftar_pencaker[0]->data_pencaker_status == 'Ditolak')
                <button type="button" class="btn btn-danger waves-effect waves-light">
                    {{ $lowongan->daftar_pencaker[0]->data_pencaker_status }}
                </button>
                @else
                <button type="button" class="btn btn-warning waves-effect waves-light">
                    {{ $lowongan->daftar_pencaker[0]->data_pencaker_status }}
                </button>
                @endif
                @else
                <a href="{{ $lowongan->link_pendaftaran }}" class="btn btn-outline-light text-truncate btn-info"><i
                        class="uil uil-user me-1"></i>
                    Link Pendaftaran</a>
                <a href="{{ url('user-lamar/'.$lowongan->lowongan_id.'/'.$lowongan->nama_perusahaan) }}"
                    class="btn btn-outline-light text-truncate btn-success"
                    onclick="return confirm('Anda Yakin Akan Melamar di {{ $lowongan->nama_perusahaan }} ?');">
                    <i class="uil uil-envelope-alt me-1"></i>
                    Lamar</a>

                @endif
                @endif

            </div>

            <!-- end card -->
        </div>
    </div>
    @endforeach

</div>

@endsection
@section('script')
<script src="{{ URL::asset('/dasson/js/app.min.js') }}"></script>
@endsection