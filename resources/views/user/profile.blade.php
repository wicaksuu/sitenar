@extends('layouts.dasson.master')
@section('title') User Profile @endsection
@section('css')
<link href="{{ URL::asset('dasson/libs/select2/select2.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('dasson/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('dasson/libs/dropzone/dropzone.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('dasson/libs/choices.js/choices.js.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('dasson/libs/@simonwep/@simonwep.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('dasson/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
@endsection
@section('content')
@component('components.breadcrumb')
<div class="row">
    <div class="col-xl-12">
        <div class="profile-user"></div>
    </div>
</div><a data-bs-toggle="modal" data-bs-target=".update-profile">
    <div class="row">
        <div class="profile-content">
            <div class="row align-items-end">
                <div class="col-sm">
                    <div class="d-flex align-items-end mt-3 mt-sm-0">

                        <div class="flex-shrink-0">
                            <div class="avatar-xxl me-2">
                                <img src="@if (Auth::user()->profile_photo_path != ''){{ Auth::user()->profile_photo_path }}@else{{ URL::asset('assets/images/icons/icon.png') }}@endif"
                                    alt="profile-image" class="img-fluid rounded-circle d-block img-thumbnail">

                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <div>
                                <h5 class="font-size-16 mb-1">{{ Auth::user()->name }}</h5>
                                <p class="text-muted font-size-13 mb-2 pb-2">

                                    @if (Auth::user()->email_verifed_at !='')
                                    <a href="javascript: void(0);"
                                        class="badge bg-soft-success text-success font-size-11 pl-2">Email Verifed</a>
                                    @else
                                    <a href="javascript: void(0);"
                                        class="badge bg-soft-danger text-danger font-size-11 pl-2">Email Not Verifed</a>
                                    @endif

                                    @if (Auth::user()->status_akun !='')
                                    <a href="javascript: void(0);"
                                        class="badge bg-soft-success text-success font-size-11 pl-2">Account
                                        Verifed</a>@else
                                    <a href="javascript: void(0);"
                                        class="badge bg-soft-danger text-danger font-size-11 pl-2">Account Not
                                        Verifed</a>
                                    @endif

                                    @if (Auth::user()->status_ak1 !='')
                                    <a href="javascript: void(0);"
                                        class="badge bg-soft-success text-success font-size-11 pl-2">AK1
                                        Verifed</a>@else
                                    <a href="javascript: void(0);"
                                        class="badge bg-soft-danger text-danger font-size-11 pl-2">AK1 Not Verifed</a>
                                    @endif

                                    @if (Auth::user()->status_cpmi !='')
                                    <a href="javascript: void(0);"
                                        class="badge bg-soft-success text-success font-size-11 pl-2">CPMI
                                        Verifed</a>@else
                                    <a href="javascript: void(0);"
                                        class="badge bg-soft-danger text-danger font-size-11 pl-2">CPMI Not Verifed</a>
                                    @endif

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</a>

@include('notif')
@include('user.show_profile')

<!-- end card body -->

<!-- end tab content -->

<!--  Update Profile example -->
<div class="modal fade update-profile" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Edit Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('user-update-profile') }}" class="form-horizontal" method="POST"
                    enctype="multipart/form-data" id="update-profile">
                    @csrf
                    <div class="mb-3">
                        <label for="avatar">Profile Picture</label>
                        <div class="input-group">
                            <input type="file" class="form-control @error('avatar') is-invalid @enderror" id="avatar"
                                name="avatar" autofocus>
                            <label class="input-group-text" for="avatar">Upload</label>
                        </div>
                        <div class="text-danger" role="alert" id="avatarError" data-ajax-feedback="avatar"></div>
                    </div>

                    <div class="mt-3 d-grid">
                        <button class="btn btn-primary waves-effect waves-light UpdateProfile"
                            data-id="{{ Auth::user()->id }}" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection
@section('script')
<script src="{{ URL::asset('dasson/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ URL::asset('dasson/js/pages/sweetalert.init.js') }}"></script>
<script src="{{ URL::asset('dasson/js/pages/profile.init.js') }}"></script>

<script src="{{ URL::asset('dasson/libs/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('dasson/js/pages/ecommerce-select2.init.js') }}"></script>

<script src="{{ URL::asset('dasson/libs/dropzone/dropzone.min.js') }}"></script>

<script src="{{ URL::asset('dasson/libs/choices.js/choices.js.min.js') }}"></script>
<script src="{{ URL::asset('dasson/libs/@simonwep/@simonwep.min.js') }}"></script>
<script src="{{ URL::asset('dasson/libs/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ URL::asset('dasson/js/pages/form-advanced.init.js') }}"></script>

<script src="{{ URL::asset('/dasson/js/app.min.js') }}"></script>
{{-- mengambil alamat usaha --}}

<script type="text/javascript">
    $(document).ready(function () {
        var app = {
            show: function () {
                $.ajax({
                    url: "{{ url('provinsi') }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: "GET",
                    success: function (response) {
                        $.each(response, function (key, value) {
                            $("#provinsi").append('<option value=' + value.id +
                                '>' +
                                value.name + '</option>');
                            $("#provinsis").append('<option value=' + value.id +
                                '>' +
                                value.name + '</option>');
                        });
                    }
                })
            }
        }
        var negara = {
            show: function () {
                $.ajax({
                    url: "{{ url('negara') }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: "GET",
                    success: function (response) {
                        $.each(response, function (key, value) {
                            $("#negara").append('<option value=' + value.nama +
                                '>' +
                                value.nama + '</option>');
                        });
                    }
                })
            }
        }
        app.show();
        negara.show();
    });

    function showKabupaten(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        }
        $.ajax({
            url: "{{ url('kabupaten') }}/" + str,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "GET",
            success: function (response) {
                $("#kabupaten").empty().append('<option value="">Pilih</option>');
                $.each(response, function (key, value) {
                    $("#kabupaten")
                        .append('<option value=' + value.id +
                            '>' +
                            value.name + '</option>');
                });
            }
        })
    };

    function showKecamatan(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        }
        $.ajax({
            url: "{{ url('kecamatan') }}/" + str,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "GET",
            success: function (response) {
                $("#kecamatan").empty().append('<option value="">Pilih</option>');
                $.each(response, function (key, value) {
                    $("#kecamatan")
                        .append('<option value=' + value.id +
                            '>' +
                            value.name + '</option>');
                });
            }
        })
    };

    function showDesa(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        }
        $.ajax({
            url: "{{ url('desa') }}/" + str,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "GET",
            success: function (response) {
                $("#desa").empty().append('<option value="">Pilih</option>');
                $.each(response, function (key, value) {
                    $("#desa")
                        .append('<option value=' + value.id +
                            '>' +
                            value.name + '</option>');
                });
            }
        })
    };

    function showKabupatens(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        }
        $.ajax({
            url: "{{ url('kabupaten') }}/" + str,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "GET",
            success: function (response) {
                $("#kabupatens").empty().append('<option value="">Pilih</option>');
                $.each(response, function (key, value) {
                    $("#kabupatens")
                        .append('<option value=' + value.id +
                            '>' +
                            value.name + '</option>');
                });
            }
        })
    };

    function showKecamatans(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        }
        $.ajax({
            url: "{{ url('kecamatan') }}/" + str,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "GET",
            success: function (response) {
                $("#kecamatans").empty().append('<option value="">Pilih</option>');
                $.each(response, function (key, value) {
                    $("#kecamatans")
                        .append('<option value=' + value.id +
                            '>' +
                            value.name + '</option>');
                });
            }
        })
    };

    function showDesas(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        }
        $.ajax({
            url: "{{ url('desa') }}/" + str,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "GET",
            success: function (response) {
                $("#desas").empty().append('<option value="">Pilih</option>');
                $.each(response, function (key, value) {
                    $("#desas")
                        .append('<option value=' + value.id +
                            '>' +
                            value.name + '</option>');
                });
            }
        })
    };
</script>
@endsection