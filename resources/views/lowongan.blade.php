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
            <h5 class="card-title">Total Lowongan <span class="text-muted fw-normal ms-2">(834)</span></h5>
        </div>
    </div>

    <div class="col-md-6">
        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
            <div>
                <a href="tambah-lowongan" class="btn btn-secondary"><i class="bx bx-plus me-1"></i> Add New</a>
            </div>
        </div>

    </div>
</div>

<div class="row">
    <!-- end row -->
    @for ($i = 1; $i <= 10; $i++) <div class="col-xl-3 col-sm-6">
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
                    <img src="https://www.99.co/blog/indonesia/wp-content/uploads/2021/03/contoh-poster-iklan-loker.png"
                        class="img-fluid" alt="">
                </div>

                <div class="mt-3 pt-1">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form,
                        by injected humour, or randomised words which don't look even slightly believable. If you are
                        going
                        to use a passage of
                        Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                        All
                        the Lorem Ipsum
                        generators on the Internet tend to repeat predefined chunks as necessary, making this the first
                        true
                        generator on the
                        Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model
                        sentence
                        structures, to
                        generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free
                        from
                        repetition,
                        injected humour, or non-characteristic words etc.</p>
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

            <button type="button" class="btn btn-danger text-truncate"><i class="uil uil-user me-1"></i>
                Hapus</button>

            <!-- end card -->
        </div>
</div>
@endfor

</div>

@endsection
@section('script')
<script src="{{ URL::asset('/dasson/js/app.min.js') }}"></script>
@endsection