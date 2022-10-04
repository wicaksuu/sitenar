@extends('layouts.dasson.master')
@section('title') Daftar Pelamar @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Lowongan @endslot
@slot('title') Daftar Pelamar @endslot
@endcomponent
<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <h5 class="card-title">Total Pelamar <span class="text-muted fw-normal ms-2">(834)</span></h5>
        </div>
    </div>
</div>

<div class="row">
    <!-- end row -->
    @for ($i = 1; $i <= 8; $i++) <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center pb-3">
                    <div>
                        <img src="{{ URL::asset('dasson/images/users/avatar-3.jpg') }}" alt=""
                            class="avatar-lg rounded-circle img-thumbnail">
                    </div>
                    <div class="flex-1 ms-3">
                        <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">Paul Sanchez</a></h5>
                        <p class="text-muted mb-0">Full Stack Developer</p>
                    </div>
                </div>
                <div class="text-center">
                    <img src="https://marketplace.canva.com/EAFCdp4BFm8/1/0/1131w/canva-ungu-lulusan-baru-resume-38j_mEMyMD8.jpg"
                        class="img-fluid" alt="">
                </div>

                <div class="mt-3 pt-1">
                    <p>Saya ingin melamar di perusahan anda sebagai fullstack dev.</p>
                </div>
                <div class="mt-3 pt-1">
                    <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i>
                        021 0125 5689</p>
                    <p class="text-muted mb-0 mt-2"><i
                            class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i>
                        DianaOwens@spy.com</p>
                    <p class="text-muted mb-0 mt-2"><i
                            class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                        52 Ilchester MYBSTER 9WX</p>
                </div>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-success"><i class="uil uil-user me-1"></i>
                    Terima</button>
                <button type="button" class="btn btn-danger"><i class="uil uil-envelope-alt me-1"></i>
                    Tolak</button>
            </div>

            <!-- end card -->
        </div>
</div>
@endfor

</div>

@endsection
@section('script')
<script src="{{ URL::asset('/dasson/js/app.min.js') }}"></script>
@endsection