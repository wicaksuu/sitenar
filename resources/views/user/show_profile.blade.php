<div class="row">
    <div class="col-lg-12">
        <div class="card bg-transparent shadow-none">
            <div class="card-body">
                <ul class="nav nav-tabs-custom card-header-tabs border-top mt-2" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link px-3 active" data-bs-toggle="tab" href="#overview" role="tab">Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" data-bs-toggle="tab" href="#post" role="tab">Edit Informasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-8 col-lg-8">
        <div class="tab-content">
            <div class="tab-pane active" id="overview" role="tabpanel">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">CV {{ Auth::user()->name }}</h5>
                    </div>

                    <div class="card-body">
                        <div>
                            <div class="pb-3">
                                <div class="text-muted">
                                    {!! Auth::user()->biografi !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end tab pane -->

            <div class="tab-pane" id="post" role="tabpanel">
                @include('user.edit_profile')
            </div>
            <!-- end tab pane -->
        </div>
        <!-- end tab content -->
    </div>
    <!-- end col -->

    <div class="col-xl-4 col-lg-4">

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title mb-0">Skills</h5>
                    </div>
                    <div class="col d-flex align-items-start justify-content-end gap-2 mb-2">
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".modal-update-cpmi"
                            class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex flex-wrap gap-2 font-size-16">
                    <a href="#" class="badge badge-soft-primary">Photoshop</a>
                    <a href="#" class="badge badge-soft-primary">illustrator</a>
                    <a href="#" class="badge badge-soft-primary">HTML</a>
                    <a href="#" class="badge badge-soft-primary">CSS</a>
                    <a href="#" class="badge badge-soft-primary">Javascript</a>
                    <a href="#" class="badge badge-soft-primary">Php</a>
                    <a href="#" class="badge badge-soft-primary">Python</a>
                </div>
            </div>
            <!-- end card body -->
        </div>

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title mb-0">Bahasa</h5>
                    </div>
                    <div class="col d-flex align-items-start justify-content-end gap-2 mb-2">
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".update-bahasa"
                            class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                    </div>
                </div>
            </div>
            <div class="modal fade update-bahasa" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Bahasa yang dikuasai</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="update-profile-user" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="mb-3">
                                            <label for="choices-multiple-remove-button" class="form-label font-size-13 text-muted">With
                                                remove button</label>
                                            <select class="form-control" name="choices-multiple-remove-button" id="choices-multiple-remove-button"
                                                placeholder="This is a placeholder" multiple>
                                                <option value="Choice 1" selected>Choice 1</option>
                                                <option value="Choice 2">Choice 2</option>
                                                <option value="Choice 3">Choice 3</option>
                                                <option value="Choice 4">Choice 4</option>
                                            </select>
                                        </div>
                                    <div class="d-grid">
                                        <button class="btn btn-primary " type="submit">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex flex-wrap gap-2 font-size-16">
                    <a href="#" class="badge badge-soft-success">Indonesia</a>
                    <a href="#" class="badge badge-soft-success">Inggris</a>
                    <a href="#" class="badge badge-soft-success">Jerman</a>
                </div>
            </div>
            <!-- end card body -->
        </div>

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title mb-0">Kartu Tanda Pencari Kerja</h5>
                    </div>
                    <div class="col d-flex align-items-start justify-content-end gap-2 mb-2">
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".modal-update-ak1"
                            class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                        <div class="modal fade modal-update-ak1" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Form Kartu Pencari Kerja Dalam Negeri</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="update-profile-user" method="post">
                                            @csrf
                                            <div class="card-body">
                                                <div class="form-group mb-3">
                                                    <label>Jabatan yang diinginkan</label>
                                                    <input name="jabatan_dalam_negeri" type="text"
                                                        value="{{ Auth::user()->jabatan_dalam_negeri }}"
                                                        data-pristine-min-message="Mohon Masukkan Jabatan yang diinginakan"
                                                        required class="form-control" />
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>Wilayah Kerja</label>
                                                    <input name="wilayah_kerja_dalam_negeri" type="text"
                                                        value="Dalam Negeri" readonly class="form-control" />
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Provinsi</label>
                                                    <select name="province_id_dalam_negeri" required
                                                        class="form-control form-select" id="provinsis"
                                                        onchange="showKabupatens(this.value)">
                                                        @if (Auth::user()->province_id_dalam_negeri == '')
                                                        <option value="">Pilih</option>
                                                        @else
                                                        <option value="{{ $data->province_dalam_negeri->id }}">{{
                                                            $data->province_dalam_negeri->name
                                                            }}</option>
                                                        @endif
                                                    </select>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Kabupaten</label>
                                                    <select name="regencie_id_dalam_negeri" required
                                                        class="form-control form-select" id="kabupatens"
                                                        onchange="showKecamatans(this.value)">
                                                        @if (Auth::user()->regencie_id_dalam_negeri == '')
                                                        <option value="">Pilih</option>
                                                        @else
                                                        <option value="{{ $data->regencie_dalam_negeri->id }}">{{
                                                            $data->regencie_dalam_negeri->name
                                                            }}</option>
                                                        @endif
                                                    </select>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Kecamatan</label>
                                                    <select name="district_id_dalam_negeri" required
                                                        class="form-control form-select" id="kecamatans"
                                                        onchange="showDesas(this.value)">
                                                        @if (Auth::user()->district_id_dalam_negeri == '')
                                                        <option value="">Pilih</option>
                                                        @else
                                                        <option value="{{ $data->district_dalam_negeri->id }}">{{
                                                            $data->district_dalam_negeri->name
                                                            }}</option>
                                                        @endif
                                                    </select>
                                                </div>
                                                <div class="form-group mb-5">
                                                    <label class="form-label">Desa</label>
                                                    <select name="village_id_dalam_negeri" required
                                                        class="form-control form-select" id="desas">
                                                        @if (Auth::user()->village_id_dalam_negeri == '')
                                                        <option value="">Pilih</option>
                                                        @else
                                                        <option value="{{ $data->village_dalam_negeri->id }}">{{
                                                            $data->village_dalam_negeri->name
                                                            }}
                                                        </option>
                                                        @endif
                                                    </select>
                                                </div>
                                                <div class="d-grid">
                                                    <button class="btn btn-primary " type="submit">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if (Auth::user()->status_ak1 == 'Verifed')
                <div class="card bg-warning text-black visa-card mb-0">
                    <div class="card-body">
                        <div>
                            <div class="float-end">
                                <h5 class="text-black float-end mb-0"><i>AK1</i></h5>
                            </div>
                            <div>
                                <img style="width: 150px" src="{{ url('assets/images/SITenar.png') }}" alt="">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-3">
                                <p>
                                    <i class="fas fa-star-of-life m-1"></i>
                                    <i class="fas fa-star-of-life m-1"></i>
                                    <i class="fas fa-star-of-life m-1"></i>
                                </p>
                            </div>
                            <div class="col-3">
                                <p>
                                    <i class="fas fa-star-of-life m-1"></i>
                                    <i class="fas fa-star-of-life m-1"></i>
                                    <i class="fas fa-star-of-life m-1"></i>
                                </p>
                            </div>
                            <div class="col-3">
                                <p>
                                    <i class="fas fa-star-of-life m-1"></i>
                                    <i class="fas fa-star-of-life m-1"></i>
                                    <i class="fas fa-star-of-life m-1"></i>
                                </p>
                            </div>
                            <div class="col-3">
                                <p>
                                    <i class="fas fa-star-of-life m-1"></i>
                                    <i class="fas fa-star-of-life m-1"></i>
                                    <i class="fas fa-star-of-life m-1"></i>
                                </p>
                            </div>
                        </div>
                        <div class="mt-5">
                            <div class="float-end">
                                {!! DNS2D::getBarcodeHTML('https://wicaksu.com', 'QRCODE',3,3) !!}
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <p>Mohon Isi Form Kartu Pencari Kerja dan Tunggu Proses Verifikasi</p>
                @endif
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title mb-0">Kartu Tanda Pencari Kerja Luar Negeri</h5>
                    </div>
                    <div class="col d-flex align-items-start justify-content-end gap-2 mb-2">
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".modal-update-cpmi"
                            class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>

                        <div class="modal fade modal-update-cpmi" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Form Kartu Pencari Kerja Luar Negeri</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="update-profile-user" method="post">
                                            @csrf
                                            <div class="card-body">
                                                <div class="form-group mb-3">
                                                    <label>Jabatan yang diinginkan</label>
                                                    <input name="jabatan_luar_negeri" type="text"
                                                        value="{{ Auth::user()->jabatan_luar_negeri }}"
                                                        data-pristine-min-message="Mohon Masukkan Jabatan yang diinginakan"
                                                        required class="form-control" />
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Negara Tujuan</label><br>

                                                    <select name="negara_tujuan_luar_negeri" required
                                                        class="form-control form-select" id="negara">
                                                        @if (Auth::user()->negara_tujuan_luar_negeri == '')
                                                        <option value="">Pilih Negara</option>
                                                        @else
                                                        <option value="{{ Auth::user()->negara_tujuan_luar_negeri }}">
                                                            {{Auth::user()->negara_tujuan_luar_negeri}}
                                                        </option>
                                                        @endif
                                                    </select>

                                                </div>
                                                <div class="form-group mb-5">
                                                    <label>Wilayah Kerja</label>
                                                    <input name="wilayah_kerja_luar_negeri" type="text"
                                                        value="Luar Negeri" readonly class="form-control" />
                                                </div>
                                                <div class="d-grid">
                                                    <button class="btn btn-primary " type="submit">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if (Auth::user()->status_ak1 == 'Verifed')
                <div class="card bg-warning text-black visa-card mb-0">
                    <div class="card-body">
                        <div>
                            <div class="float-end">
                                <h5 class="text-black float-end mb-0"><i>AK1</i></h5>
                            </div>
                            <div>
                                <img style="width: 150px" src="{{ url('assets/images/SITenar.png') }}" alt="">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-3">
                                <p>
                                    <i class="fas fa-star-of-life m-1"></i>
                                    <i class="fas fa-star-of-life m-1"></i>
                                    <i class="fas fa-star-of-life m-1"></i>
                                </p>
                            </div>
                            <div class="col-3">
                                <p>
                                    <i class="fas fa-star-of-life m-1"></i>
                                    <i class="fas fa-star-of-life m-1"></i>
                                    <i class="fas fa-star-of-life m-1"></i>
                                </p>
                            </div>
                            <div class="col-3">
                                <p>
                                    <i class="fas fa-star-of-life m-1"></i>
                                    <i class="fas fa-star-of-life m-1"></i>
                                    <i class="fas fa-star-of-life m-1"></i>
                                </p>
                            </div>
                            <div class="col-3">
                                <p>
                                    <i class="fas fa-star-of-life m-1"></i>
                                    <i class="fas fa-star-of-life m-1"></i>
                                    <i class="fas fa-star-of-life m-1"></i>
                                </p>
                            </div>
                        </div>
                        <div class="mt-5">
                            <div class="float-end">
                                {!! DNS2D::getBarcodeHTML('https://wicaksu.com', 'QRCODE',3,3) !!}
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <p>Mohon Isi Form Kartu Pencari Kerja Luar Negeri dan Tunggu Proses Verifikasi</p>
                @endif
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Data KTP</h5>
            </div>

            <div class="card-body d-flex justify-content-center">
                @if (Auth::user()->foto_ktp=='')

                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                    data-bs-target=".modal-upload-ktp">Upload KTP</button>
                <div class="modal fade modal-upload-ktp" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Upload KTP</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <form action="#" class="dropzone">
                                        @csrf
                                        <div class="fallback">
                                            <input name="file" type="image">
                                        </div>
                                        <div class="dz-message needsclick">
                                            <div class="mb-3">
                                                <i class="display-4 text-muted bx bx-cloud-upload"></i>
                                            </div>
                                            <h5>Drop Foto KTP disini atau Klik Upload</h5>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>

        <!-- end card -->
    </div>
    <!-- end col -->
</div>