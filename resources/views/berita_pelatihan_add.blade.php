@extends('layouts.dasson.master')
@section('title') Tambah Berita - Pelatihan @endsection
@section('css')
<link href="{{ URL::asset('dasson/libs/dropzone/dropzone.min.css') }}" rel="stylesheet">
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Berita - Pelatihan @endslot
@slot('title') Tambah Berita - Pelatihan @endslot
@endcomponent

<form action="{{ url(Auth::user()->role.'/tambah-berita-pelatihan-add') }}" method="post" class="dropzone dz-clickable">
    @include('notif')
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Upload Gambar Tubmails</h4>
                </div>
                <div class="card-body">
                    <div class="dz-message needsclick">
                        <div class="mb-3">
                            <i class="display-4 text-muted bx bx-cloud-upload"></i>
                        </div>

                        <h5>Drop files here or click to upload.</h5>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</form>
<form action="{{ url(Auth::user()->role.'/tambah-berita-pelatihan-add') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Informasi Dasar</h5>
                    <input type="hidden" />
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="form-group mb-3">
                                <label>Jenis Postingan</label>
                                <select required name="type" class="form-control form-select">
                                    <option value="Berita">Berita</option>
                                    <option value="Pelatihan">Pelatihan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="form-group mb-3">
                                <label>Judul Berita/Pelatihan</label>
                                <input name="judul" type="text" required placeholder="Loker Fullstack Dev"
                                    data-pristine-required-message="Mohon Masukkan Judul dari Berita/Pelatihan"
                                    class="form-control" />
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6">
                            <div class="form-group mb-3">
                                <label>Nomor Whatsapp Pendaftaran (Optional)</label>
                                <input name="nomor_wa_pendaftaran" type="text" value="{{ Auth::user()->wa }}"
                                    placeholder="0822 **** ****" class="form-control" />
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6">
                            <div class="form-group mb-3">
                                <label>Lokasi Pelatihan (Optional)</label>
                                <input name="lokasi_pelatihan" type="text" placeholder="Jl.*** No.**"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="form-group mb-3">
                                <label>Link Pendaftaran (Optional)</label>
                                <input name="link_pendaftaran" type="text"
                                    placeholder="https://sitenar.madiunkab.gi.id/loker" class="form-control" />
                            </div>
                        </div>


                    </div>
                    <!-- end row -->
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Deskripsi</h5>
                    <div class="form-group mb-3">
                        <textarea id="ckeditor-classic" name="deskripsi"></textarea>
                    </div>
                </div>
            </div>
            <div class="m-3 form-group text-end">
                <button type="submit" class="btn btn-primary">Posting</button>
            </div>
        </div>
    </div>
    <!-- end row -->
</form>

@endsection
@section('script')
<script src="{{ URL::asset('dasson/libs/@ckeditor/@ckeditor.min.js') }}"></script>
<script src="{{ URL::asset('dasson/js/pages/form-editor.init.js') }}"></script>
<script src="{{ URL::asset('dasson/libs/dropzone/dropzone.min.js') }}"></script>
<script src="{{ URL::asset('dasson/libs/pristinejs/pristinejs.min.js') }}"></script>
<script src="{{ URL::asset('dasson/js/pages/form-validation.init.js') }}"></script>
<script src="{{ URL::asset('/dasson/js/app.min.js') }}"></script>
@endsection