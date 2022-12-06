<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Informasi Dasar</h5>
    </div>
    <div class="card-body">
        @csrf
        <div class="row">

            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label>Email</label>
                    <input name="email" type="text" required disabled value="{{ Auth::user()->email }}"
                        data-pristine-min-message="Mohon masukkan email" required class="form-control" />
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label>NIK </label>
                    <input type="text" name="ktp" required value="{{ Auth::user()->ktp }}"
                        data-pristine-required-message="Mohon masukkan NIK " class="form-control" />
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label>Nama </label>
                    <input type="text" name="name" required value="{{ Auth::user()->name }}"
                        data-pristine-required-message="Mohon masukkan nama " class="form-control" />
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label>Nomor Tlp (optional)</label>
                    <input name="no_tlp" type="text" value="{{ Auth::user()->no_tlp }}"
                        data-pristine-min-message="Mohon Masukkan Tpl Usaha" class="form-control" />
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label>Nomor Whatsapp</label>
                    <input name="wa" type="text" required value="{{ Auth::user()->wa }}"
                        data-pristine-min-message="Mohon Masukkan Whatsapp" required class="form-control" />
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label class="form-label">Agama</label>
                    <select name="agama" required class="form-control form-select">@if (Auth::user()->agama =='')
                        <option value="">Pilih</option>
                        @else
                        <option value="{{ Auth::user()->agama }}">{{ Auth::user()->agama }}</option>
                        @endif
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Lain-Lain">Lain-Lain</option>
                    </select>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Riwayat Pendidikan</h5>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label class="form-label">Pendidikan Terakhir</label>
                    <select name="pendidikan_terakhir" required class="form-control form-select">
                        @if (Auth::user()->pendidikan_terakhir =='')
                        <option value="">Pilih</option>
                        @else
                        <option value="{{ Auth::user()->pendidikan_terakhir }}">{{ Auth::user()->pendidikan_terakhir
                            }}</option>
                        @endif
                        <option value="Setara SD">Setara SD</option>
                        <option value="Setara SMP">Setara SMP</option>
                        <option value="Setara SMA">Setara SMA</option>
                        <option value="Setara D3">Setara D3</option>
                        <option value="Setara S1">Setara S1</option>
                        <option value="Setara S2">Setara S2</option>
                        <option value="Setara S3">Setara S3</option>
                    </select>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label>Jurusan</label>
                    <input name="jurusan" type="text" required value="{{ Auth::user()->jurusan }}"
                        data-pristine-min-message="Mohon Masukkan Jurusan" required class="form-control" />
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label>Tahun Kelulusan</label>
                    <input name="tahun_kelulusan" type="text" required value="{{ Auth::user()->tahun_kelulusan }}"
                        data-pristine-min-message="Mohon Masukkan Tahun Kelulusan" required class="form-control" />
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label>Nama Sekolah</label>
                    <input name="nama_sekolah" type="text" required value="{{ Auth::user()->nama_sekolah }}"
                        data-pristine-min-message="Mohon Masukkan Nama Sekolah" required class="form-control" />
                </div>
            </div>

        </div>
    </div>
</div>


<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Alamat</h5>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label>Alamat</label>
                    <input name="alamat" type="text" required value="{{ Auth::user()->alamat }}"
                        data-pristine-min-message="Mohon Masukkan NPWP" required class="form-control" />
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
