@extends('layouts.dasson.master')
@section('title') Tambah Lowongan @endsection
@section('css')
<link href="{{ URL::asset('dasson/libs/dropzone/dropzone.min.css') }}" rel="stylesheet">
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Lowongan @endslot
@slot('title') Tambah Lowongan @endslot
@endcomponent

<form action="/" class="dropzone">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Upload Gambar</h4>
                </div>
                <div class="card-body">

                    <div>
                        <div class="fallback">
                            <input name="image" type="image">
                        </div>
                        <div class="dz-message needsclick">
                            <div class="mb-3">
                                <i class="display-4 text-muted bx bx-cloud-upload"></i>
                            </div>

                            <h5>Drop files here or click to upload.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Informasi Dasar</h5>
                    <form id="pristine-valid-example" novalidate method="post">
                        <input type="hidden" />
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Judul Lowongan</label>
                                    <input name="judul_lowongan" type="text" required placeholder="Loker Fullstack Dev"
                                        data-pristine-required-message="Mohon Masukkan Judul Lowongan"
                                        class="form-control" />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Email Pendaftaran</label>
                                    <input name="email" type="email" required
                                        placeholder="loker@sitenar.madiunkab.go.id"
                                        data-pristine-required-message="Mohon Masukkan Lokasi Kerja"
                                        class="form-control" />
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Nomor Whatsapp Pendaftaran</label>
                                    <input name="nomor_wa_pendaftaran" type="text" required placeholder="0822 **** ****"
                                        data-pristine-required-message="Mohon Masukkan Nomor Whatsapp Pendaftaran"
                                        class="form-control" />
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Lokasi Kerja</label>
                                    <input name="lokasi_kerja" type="text" required placeholder="Jl.*** No.**"
                                        data-pristine-required-message="Mohon Masukkan Lokasi Kerja"
                                        class="form-control" />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Link Pendaftaran</label>
                                    <input name="link_pendaftaran" type="text" required
                                        data-pristine-required-message="Mohon Masukkan Link Pendaftaran"
                                        placeholder="https://sitenar.madiunkab.gi.id/loker" class="form-control" />
                                </div>
                            </div>


                        </div>
                        <!-- end row -->
                    </form>
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
                        <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1"
                            rows="15"></textarea>
                    </div>
                </div>
            </div>
            <div class="m-3 form-group text-end">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </button>
            </div>
        </div>
    </div>
    <!-- end row -->

</form>
@endsection
@section('script')
<script src="{{ URL::asset('dasson/libs/dropzone/dropzone.min.js') }}"></script>
<script src="{{ URL::asset('dasson/libs/pristinejs/pristinejs.min.js') }}"></script>
<script src="{{ URL::asset('dasson/js/pages/form-validation.init.js') }}"></script>
<script src="{{ URL::asset('/dasson/js/app.min.js') }}"></script>
@endsection