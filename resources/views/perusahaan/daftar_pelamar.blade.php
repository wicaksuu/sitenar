@extends('layouts.dasson.master')
@section('title') Daftar Pelamar @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Lowongan @endslot
@slot('title') Daftar Pelamar {{ $data->query }} @endslot
@endcomponent
<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <h5 class="card-title">Total Pelamar {{ $data->query }} <span class="text-muted fw-normal ms-2">({{
                    $data->total }})</span>
            </h5>
        </div>
    </div>
</div>

<div class="row">
    @include('notif')
    <!-- end row -->
    @foreach ($data->data as $value)

    @foreach ($value->daftar_pencaker as $pencaker)

    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center pb-3">
                    <div>
                        <img src="{{ $pencaker->pencaker_image }}" alt=""
                            class="avatar-lg rounded-circle img-thumbnail">
                    </div>
                    <div class="flex-1 ms-3">
                        <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">{{ $pencaker->pencaker_name }}</a>
                        </h5>
                        <p class="text-muted mb-0">{{ $value->judul_lowongan }}</p>
                    </div>
                </div>
                {{-- <div class="text-center">
                    <img src="{{ $pencaker->pencaker_image }}" class="img-fluid" alt="">
                </div> --}}

                <div class="mt-3 pt-1">
                    <p class="text-muted mb-0">
                        <i class="mdi mdi-school font-size-15 align-middle pe-2 text-primary"></i>
                        {{ $pencaker->pencaker_pendidikan_terakhir }}
                    </p>
                    <p class="text-muted mb-0 mt-2">
                        <i class="mdi mdi-chair-school font-size-15 align-middle pe-2 text-primary"></i>
                        Jurusan {{ $pencaker->pencaker_jurusan }}
                    </p>
                    <p class="text-muted mb-0 mt-2">
                        <i class="mdi mdi-calendar font-size-15 align-middle pe-2 text-primary"></i>
                        Tahun Lulus {{ $pencaker->pencaker_tahun_kelulusan }}
                    </p>
                    <p class="text-muted mb-0 mt-2">
                        <i class="mdi mdi-school-outline font-size-15 align-middle pe-2 text-primary"></i>
                        Nama Sekolah {{ $pencaker->pencaker_nama_sekolah }}
                    </p>
                    <p class="text-muted mb-0 mt-2"><i
                            class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i>
                        {{ $pencaker->pencaker_wa }}</p>
                    <p class="text-muted mb-0 mt-2"><i
                            class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i>
                        {{ $pencaker->pencaker_email }}</p>
                    <p class="text-muted mb-0 mt-2"><i
                            class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                        {{ $pencaker->pencaker_alamat }}</p>
                </div>
            </div>
            @if ($data->query !='diterima')

            <div class="btn-group" role="group">
                <a href="{{ url('penerimaan-lowongan/terima/'.$pencaker->data_pencaker_id) }}" class="btn btn-success"
                    onclick="return confirm('Anda Yakin Akan Menerima {{ $pencaker->pencaker_name }} ?');">
                    <i class="uil uil-user me-1"></i>
                    Terima
                </a>
                <a href="{{ url('penerimaan-lowongan/tolak/'.$pencaker->data_pencaker_id) }}" class="btn btn-danger"
                    onclick="return confirm('Anda Yakin Akan Menolak {{ $pencaker->pencaker_name }} ?');">
                    <i class="uil uil-envelope-alt me-1"></i>
                    Tolak
                </a>
            </div>
            @endif

            <!-- end card -->
        </div>
    </div>
    @endforeach
    @endforeach

</div>

@endsection
@section('script')
<script src="{{ URL::asset('/dasson/js/app.min.js') }}"></script>
@endsection