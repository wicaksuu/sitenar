@extends('layouts.dasson.master')
@section('title') Daftar {{ $query }} @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') {{ $query }} @endslot
@slot('title') Daftar {{ $query }} @endslot
@endcomponent
<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <h5 class="card-title">Total {{ $query }} <span class="text-muted fw-normal ms-2">
                    ({{ count($data)}})</span>
            </h5>
        </div>
    </div>
    @if (Auth::user()->role == 'perusahaan' || Auth::user()->role == 'disnaker')
    <div class="col-md-6">
        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
            <div>
                <a href="{{ url(Auth::user()->role.'/tambah-berita-pelatihan') }}" class="btn btn-secondary">
                    <i class="bx bx-plus me-1"></i>
                    Add New</a>
            </div>
        </div>

    </div>
    @endif
    @include('notif')
</div>

<div class="row">
    @foreach ($data as $berita)

    <div class="card">
        <div class="card-body">
            <div class="blog-post">
                <div class="d-flex align-items-center">
                    <div class="avatar-lg me-3">
                        <img src="@if ($berita->image_postinger != ''){{ url($berita->image_postinger) }}@else{{ URL::asset('assets/images/icons/icon.png') }}@endif"
                            alt="" class="img-fluid rounded-circle d-block">
                    </div>
                    <div class="flex-1">
                        <h5 class="font-size-15 text-truncate">
                            {{ $berita->nama_postinger }}
                            @if (Auth::user()->role == 'user')
                            @if ($berita->type == 'Pelatihan')
                            <a href="{{ url(Auth::user()->role.'/daftar-pelatihan') }}/{{ $berita->id }}/{{ $berita->judul }}"
                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light">Daftar Pelatihan</a>
                            @endif

                            @else
                            <a href="{{ url(Auth::user()->role.'/hapus-berita') }}/{{ $berita->id }}"
                                class="btn btn-sm btn-danger btn-rounded waves-effect waves-light">Hapus</a>
                            @endif
                        </h5>
                        <p class="font-size-13 text-muted mb-0">{{ $berita->create_at }}</p>

                    </div>
                </div>
                <div class="pt-3">
                    <ul class="list-inline">
                        <li class="list-inline-item me-3">
                            <a href="javascript: void(0);" class="text-muted">
                                <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i>
                                <span class="badge bg-primary">{{ $berita->type }}</span>

                            </a>
                        </li>
                        <li class="list-inline-item me-3">
                            <a href="javascript: void(0);" class="text-muted">
                                <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i>
                                {{ $berita->create_at }}
                            </a>
                        </li>
                        @if ($berita->type=='Pelatihan')

                        <li class="list-inline-item me-3">
                            <a href="javascript: void(0);" class="text-muted">
                                <i class="bx bx-comment-dots align-middle text-muted me-1"></i> 08 Respons
                            </a>
                        </li>
                        @endif
                    </ul>

                </div>
                <center>
                    <div class="position-relative mt-3">
                        <img src="{{ $berita->image }}" alt="" class="img-fluid">
                    </div>
                </center>
                <h5 class="font-size-15 text-truncate pt-3">
                    {{ $berita->judul }}
                </h5>
                <p class="text-muted">{!! $berita->deskripsi !!}</p>

            </div>
        </div>
    </div>

    @endforeach

</div>


@endsection
@section('script')
<script src="{{ URL::asset('/dasson/js/app.min.js') }}"></script>
@endsection