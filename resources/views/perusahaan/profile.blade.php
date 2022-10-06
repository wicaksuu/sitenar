@extends('layouts.dasson.master')
@section('title') Profil Perusahaan @endsection
@section('css')
<link href="{{ URL::asset('dasson/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
@component('components.breadcrumb')
<div class="row">
    <div class="col-xl-12">
        <div class="profile-user"></div>
    </div>
</div>
<div class="row">
    <div class="profile-content">
        <div class="row align-items-end">
            <div class="col-sm">
                <div class="d-flex align-items-end mt-3 mt-sm-0">
                    <div class="flex-shrink-0">
                        <div class="avatar-xxl me-3">
                            <img src="@if (Auth::user()->profile_photo_path != ''){{ Auth::user()->profile_photo_path }}@else{{ URL::asset('assets/images/icons/icon.png') }}@endif"
                                alt="profile-image" class="img-fluid rounded-circle d-block img-thumbnail">
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <div>
                            <h5 class="font-size-16 mb-1">{{ Auth::user()->name }}</h5>
                            <p class="text-muted font-size-13 mb-2 pb-2">{{ Auth::user()->jenis_usaha }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-auto">
                <div class="d-flex align-items-start justify-content-end gap-2 mb-2">
                    <div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target=".update-profile"><i class="me-1"></i> Edit Foto</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="card">
    @include('notif')

    <div class="card-header">
        <h5 class="card-title mb-0">Profile Perusahaan</h5>
    </div>



    <div class="card-body">
        <form action="update-profile-usaha" novalidate method="post">
            @csrf
            <div class="row">

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Email</label>
                        <input name="email" type="text" required disabled value="{{ Auth::user()->email }}"
                            data-pristine-min-message="Mohon masukkan email perusahaan" required class="form-control" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Nama Perusahaan</label>
                        <input type="text" name="name" required value="{{ Auth::user()->name }}"
                            data-pristine-required-message="Mohon masukkan nama perusahaan" class="form-control" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Nama Pemilik Usaha</label>
                        <input name="nama_pemilik_usaha" type="text" required
                            value="{{ Auth::user()->nama_pemilik_usaha }}"
                            data-pristine-min-message="Mohon Masukkan Nama Pemilik Usaha" required
                            class="form-control" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Nomor Tlp</label>
                        <input name="no_tlp" type="text" required value="{{ Auth::user()->no_tlp }}"
                            data-pristine-min-message="Mohon Masukkan Tpl Usaha" required class="form-control" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Nomor Whatsapp</label>
                        <input name="wa" type="text" required value="{{ Auth::user()->wa }}"
                            data-pristine-min-message="Mohon Masukkan Whatsapp Usaha" required class="form-control" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>NPWP</label>
                        <input name="npwp" type="text" required value="{{ Auth::user()->npwp }}"
                            data-pristine-min-message="Mohon Masukkan NPWP Usaha" required class="form-control" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Nomor BPJS Ketenaga Kerjaan Perusahaan</label>
                        <input name="nomor_bpjs" type="text" required value="{{ Auth::user()->nomor_bpjs }}"
                            data-pristine-min-message="Mohon Masukkan Nomor BPJS Ketenaga Kerjaan Perusahaan" required
                            class="form-control" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Omset Dalam 1 Tahun (Rupiah)</label>
                        <input name="omset" type="number" required value="{{ Auth::user()->omset }}"
                            data-pristine-min-message="Mohon Masukkan Omaset Dalam 1 Tahun" required
                            class="form-control" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Jumlah Tenaga Kerja</label>
                        <input name="jumlah_tenaga_kerja" type="number" required
                            value="{{ Auth::user()->jumlah_tenaga_kerja }}"
                            data-pristine-min-message="Mohon Masukkan Jumlah Tenaga Keja" required
                            class="form-control" />
                    </div>
                </div>

            </div>
    </div>


</div>
<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Alamat Perusahaan</h5>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label>Alamat Perusahaan</label>
                    <input name="alamat" type="text" required value="{{ Auth::user()->alamat }}"
                        data-pristine-min-message="Mohon Masukkan NPWP Perusahaan" required class="form-control" />
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label class="form-label">Provinsi</label>
                    <select name="province_id" required class="form-control form-select" id="provinsi"
                        onchange="showKabupaten(this.value)">
                        @if (Auth::user()->province_id == '')
                        <option value="">Pilih</option>
                        @else
                        <option value="{{ $data->province->id }}">{{ $data->province->name }}</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label class="form-label">Kabupaten</label>
                    <select name="regencie_id" required class="form-control form-select" id="kabupaten"
                        onchange="showKecamatan(this.value)">
                        @if (Auth::user()->regencie_id == '')
                        <option value="">Pilih</option>
                        @else
                        <option value="{{ $data->regencie->id }}">{{ $data->regencie->name }}</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label class="form-label">Kecamatan</label>
                    <select name="district_id" required class=" form-control form-select" id="kecamatan"
                        onchange="showDesa(this.value)">
                        @if (Auth::user()->district_id == '')
                        <option value="">Pilih</option>
                        @else
                        <option value="{{ $data->district->id }}">{{ $data->district->name }}</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label class="form-label">Desa</label>
                    <select name="village_id" required class="form-control form-select" id="desa">
                        @if (Auth::user()->village_id == '')
                        <option value="">Pilih</option>
                        @else
                        <option value="{{ $data->village->id }}">{{ $data->village->name }}</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label>Kode Pos</label>
                    <input name="kode_pos" type="text" required value="{{ Auth::user()->kode_pos }}"
                        data-pristine-min-message="Mohon Masukkan Kode Pos Usaha" required class="form-control" />
                </div>
            </div>

        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Alamat Pemilik Perusahaan</h5>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label>Alamat Pemilik Perusahaan</label>
                    <input name="alamat_pemilik_usaha" type="text" required
                        value="{{ Auth::user()->alamat_pemilik_usaha }}"
                        data-pristine-min-message="Mohon Masukkan Alamat Perusahaan" required class="form-control" />
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label class="form-label">Provinsi</label>
                    <select name="province_id_pemilik_usaha" required class="form-control form-select" id="provinsis"
                        onchange="showKabupatens(this.value)">
                        @if (Auth::user()->province_id_pemilik_usaha == '')
                        <option value="">Pilih</option>
                        @else
                        <option value="{{ $data->province_pemilik_usaha->id }}">{{ $data->province_pemilik_usaha->name
                            }}</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label class="form-label">Kabupaten</label>
                    <select name="regencie_id_pemilik_usaha" required class="form-control form-select" id="kabupatens"
                        onchange="showKecamatans(this.value)">
                        @if (Auth::user()->regencie_id_pemilik_usaha == '')
                        <option value="">Pilih</option>
                        @else
                        <option value="{{ $data->regencie_pemilik_usaha->id }}">{{ $data->regencie_pemilik_usaha->name
                            }}</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label class="form-label">Kecamatan</label>
                    <select name="district_id_pemilik_usaha" required class="form-control form-select" id="kecamatans"
                        onchange="showDesas(this.value)">
                        @if (Auth::user()->district_id_pemilik_usaha == '')
                        <option value="">Pilih</option>
                        @else
                        <option value="{{ $data->district_pemilik_usaha->id }}">{{ $data->district_pemilik_usaha->name
                            }}</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label class="form-label">Desa</label>
                    <select name="village_id_pemilik_usaha" required class="form-control form-select" id="desas">
                        @if (Auth::user()->village_id_pemilik_usaha == '')
                        <option value="">Pilih</option>
                        @else
                        <option value="{{ $data->village_pemilik_usaha->id }}">{{ $data->village_pemilik_usaha->name }}
                        </option>
                        @endif
                    </select>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="m-3 form-group text-end">
    <button type="submit" class="btn btn-primary">Update
        Data</button>
    </button>
</div>
</form>
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
                <form class="form-horizontal" method="POST" enctype="multipart/form-data" id="update-profile"
                    action="{{ url('perusahaan-update-profile') }}">
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
<script src="{{ URL::asset('/dasson/js/app.min.js') }}"></script>
<script src="{{ URL::asset('dasson/js/pages/profile.init.js') }}"></script>


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
        app.show();
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