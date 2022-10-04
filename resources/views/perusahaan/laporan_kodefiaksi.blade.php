@extends('layouts.dasson.master')
@section('title') Laporan Perusahaan @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Forms @endslot
@slot('title') Form Laporan Perusahaan @endslot
@endcomponent
<form action="perusahaan-pelaporan" method="post">
    @csrf
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Data Perusahaan</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Kode Pendaftaran</label>
                        <input name="kode_pendaftaran" type="text"
                            data-pristine-min-message="Mohon Masukkan Kode Pendaftaran" required class="form-control"
                            value="{{ Auth::user()->kode_pos }}.{{ Carbon\Carbon::now()->format('Ymd') }}.{{ rand(0, 9999999) }}"
                            readonly />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Nama Perusahaan</label>
                        <input name="name" type="text" readonly value="{{ Auth::user()->name }}"
                            data-pristine-min-message="Mohon Masukkan Alamat Perusahaan" required
                            class="form-control" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>No Tlp</label>
                        <input name="no_tlp" type="text" readonly value="{{ Auth::user()->no_tlp }}"
                            data-pristine-min-message="Mohon Masukkan Alamat Perusahaan" readonly required
                            class="form-control" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>No Whatsapp</label>
                        <input name="wa" type="text" readonly value="{{ Auth::user()->wa }}"
                            data-pristine-min-message="Mohon Masukkan Alamat Perusahaan" readonly required
                            class="form-control" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Jenis Usaha</label>
                        <input name="jenis_usaha" type="text" readonly value="{{ Auth::user()->jenis_usaha }}"
                            data-pristine-min-message="Mohon Masukkan Alamat Perusahaan" readonly required
                            class="form-control" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Alamat Perusahaan</label>
                        <input name="alamat" type="text" readonly value="{{ Auth::user()->alamat }}"
                            data-pristine-min-message="Mohon Masukkan Alamat Perusahaan" readonly required
                            class="form-control" />
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Provinsi</label>
                        <input name="provinsi" type="text" readonly value="{{ $data->province->name }}" required
                            class="form-control" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Kabupaten</label>
                        <input name="kabupaten" type="text" readonly value="{{ $data->regencie->name }}" required
                            class="form-control" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Kecamatan</label>
                        <input name="kecamatan" type="text" readonly value="{{ $data->district->name }}" required
                            class="form-control" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Desa</label>
                        <input name="desa" type="text" readonly value="{{ $data->village->name }}" required
                            class="form-control" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Kode Pos</label>
                        <input name="kode_pos" type="text" readonly value="{{ Auth::user()->kode_pos }}" required
                            class="form-control" />
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
                        <label>Nama Pemilik Perusahaan</label>
                        <input name="nama_pemilik_usaha" type="text" readonly
                            value="{{ Auth::user()->nama_pemilik_usaha }}"
                            data-pristine-min-message="Mohon Masukkan Alamat Perusahaan" required
                            class="form-control" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Alamat Pemilik Perusahaan</label>
                        <input name="alamat_pemilik_usaha" type="text" readonly
                            value="{{ Auth::user()->alamat_pemilik_usaha }}"
                            data-pristine-min-message="Mohon Masukkan Alamat Perusahaan" required
                            class="form-control" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Provinsi</label>
                        <input name="provinsi_pemilik_usaha" type="text" readonly
                            value="{{ $data->province_pemilik_usaha->name }}" required class="form-control" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Kabupaten</label>
                        <input name="kabupaten_pemilik_usaha" type="text" readonly
                            value="{{ $data->regencie_pemilik_usaha->name }}" required class="form-control" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Kecamatan</label>

                        <input name="kecamatan_pemilik_usaha" type="text" readonly
                            value="{{ $data->district_pemilik_usaha->name }}" required class="form-control" />

                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Desa</label>
                        <input name="desa_pemilik_usaha" type="text" readonly
                            value="{{ $data->village_pemilik_usaha->name }}" required class="form-control" />
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Nomor Akte Pendirian</label>
                        <input name="nomor_akte_pendirian" type="text"
                            data-pristine-min-message="Mohon Masukkan Nomor Akte Pendirian" required
                            class="form-control" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Tanggal Pendirian Perusahaan</label>
                        <input name="pendirian_perusahaan" id="startDate" class="form-control" type="date" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Perpindahan Perusahaan</label>
                        <input name="perpindahan_perusahaan" id="startDate" class="form-control" type="date" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Status Perusahaan</label>
                        <select name="status_perusahaan" required class="form-control form-select">
                            <option value="">Pilih</option>
                            <option value="Pusat">Pusat</option>
                            <option value="Cabang">Cabang</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Jumlah Cabang di Indonesia</label>
                        <input name="jumlah_cabang_di_indonesia" type="number" value="0" required
                            class="form-control" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Jumlah Cabang di luar Indonesia</label>
                        <input name="jumlah_cabang_di_luar_indonesia" type="number" value="0" required
                            class="form-control" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Status Kepemilikan</label>
                        <select name="status_kepemilikan" required class="form-control form-select">
                            <option value="">Pilih</option>
                            <option value="Swasta">Swasta</option>
                            <option value="Persero">Persero</option>
                            <option value="Perum">Perum</option>
                            <option value="Perusahaan Daerah">Perusahaan Daerah</option>
                            <option value="Yayasan">Yayasan</option>
                            <option value="Koperasi">Koperasi</option>
                            <option value="Perseorangan">Perseorangan</option>
                            <option value="Patungan">Patungan</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Status Permodalan</label>
                        <select name="status_permodalan" required class="form-control form-select">
                            <option value="">Pilih</option>
                            <option value="PMDN">PMDN</option>
                            <option value="Swasta Nasional">Swasta Nasional</option>
                            <option value="PMA">PMA</option>
                            <option value="Join Venture">Join Venture</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Asal Negara</label>
                        <input name="asal_negara" type="text"
                            data-pristine-min-message="Mohon Masukkan Asal Negara Perusahaan" required
                            class="form-control" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Keadaan Ketenagakerjaan</h5>
        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Waktu Kerja</label>
                        <select name="waktu_kerja" required class="form-control form-select">
                            <option value="">Pilih</option>
                            <option value="7 jam/hari dan 40 jam/minggu">7 jam/hari dan 40 jam/minggu</option>
                            <option value="8 jam/hari dan 40 jam/minggu">8 jam/hari dan 40 jam/minggu</option>
                            <option value="12 jam/hari dan 40 jam/minggu">12 jam/hari dan 40 jam/minggu</option>
                            <option value="12 jam/hari selama 10 hari terus menerus">12 jam/hari selama 10 hari terus
                                menerus</option>
                            <option value="12 jam/hari selama 14 hari terus menerus">12 jam/hari selama 14 hari terus
                                menerus</option>
                            <option
                                value="Lebih Lama dari 7 atau 8 jam/hari dan 40 jam/minggu kurang dari 12 jam/hari selama 10 hari terus menerus">
                                Lebih Lama dari 7 atau 8 jam/hari dan 40 jam/minggu kurang dari 12 jam/hari selama 10
                                hari
                                terus menerus</option>
                            <option value="Kurang atau sama dengan 24 jam/minggu">Kurang atau sama dengan 24 jam/minggu
                            </option>
                            <option value="Kurang atau sama dengan 20 jam/minggu">Kurang atau sama dengan 20 jam/minggu
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Sektor Pertambangan</label>
                        <select name="sektor_pertambangan" class="form-control form-select">
                            <option value="">Pilih</option>
                            <option
                                value="Minimal 10 minngu berturut-turut dengan 2 minggu berturut-turut istirahat, dan setiap 2 minggu dalam periode kerja diberikan 1 hari istirahat">
                                Minimal 10 minngu berturut-turut dengan 2 minggu berturut-turut istirahat, dan setiap 2
                                minggu dalam periode kerja diberikan 1 hari istirahat</option>
                        </select>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Sektor ESDM</label>
                        <select name="sektor_esdm" class="form-control form-select">
                            <option value="">Pilih</option>
                            <option value="7 jam 1 hari dan 40 jam 1 minggu untuk waktu kerja 6 hari dalam 1 minggu">7
                                jam 1
                                hari dan 40 jam 1 minggu untuk waktu kerja 6 hari dalam 1 minggu</option>
                            <option value="Pilih">Pilih</option>
                            <option value="Pilih">Pilih</option>
                            <option value="Pilih">Pilih</option>
                            <option value="Pilih">Pilih</option>
                            <option value="Pilih">Pilih</option>
                            <option value="Pilih">Pilih</option>
                            <option value="Pilih">Pilih</option>
                            <option value="Pilih">Pilih</option>
                            <option value="Pilih">Pilih</option>
                            <option value="Pilih">Pilih</option>
                            <option value="Pilih">Pilih</option>
                            <option value="Pilih">Pilih</option>
                            <option value="Pilih">Pilih</option>
                        </select>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Sektor Perikanan</label>
                        <select name="sektor_perikanan" class="form-control form-select">
                            <option value="">Pilih</option>
                            <option
                                value="Periode kerja 3 minggu berturut-turut, dengan ketentuan setelah pekerja bekerja selama 2 minggu berturut-turut diberikan 1 hari istirahat serta 4 hari istirahat setelah pekerja menyelesaikan periode kerja">
                                Periode kerja 3 minggu berturut-turut, dengan ketentuan setelah pekerja bekerja selama 2
                                minggu berturut-turut diberikan 1 hari istirahat serta 4 hari istirahat setelah pekerja
                                menyelesaikan periode kerja</option>
                            <option
                                value="Periode kerja 4 minggu berturut-turut, dengan ketentuan setelah pekerja bekerja selama 2 minggu berturut-turut diberikan 1 hari istirahat serta 5 hari istirahat setelah pekerja menyelesaikan periode kerja">
                                Periode kerja 3 minggu berturut-turut, dengan ketentuan setelah pekerja bekerja selama 2
                                minggu berturut-turut diberikan 1 hari istirahat serta 4 hari istirahat setelah pekerja
                                menyelesaikan periode kerja</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Limbah Produksi</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label"> Instalasi Pengolahan Limbah</label>
                        <select name="instalasi_pengolahan_limbah" class="form-control form-select">
                            <option value="">Pilih</option>
                            <option value="Ada">Ada</option>
                            <option value="Tidak Ada">Tidak Ada</option>
                        </select>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Pihak Ketiga</label>
                        <select name="pihak_ketiga" class="form-control form-select">
                            <option value="">Pilih</option>
                            <option value="Ada">Ada</option>
                            <option value="Tidak Ada">Tidak Ada</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Pengupahan</h5>
        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Tingkat Upah Terendah</label>
                        <input name="tingkat_upah_terendah" type="text"
                            data-pristine-min-message="Mohon Masukkan Tingkat Upah Terendah" required
                            class="form-control" />
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Tingkat Upah Tertinggi</label>
                        <input name="tingkat_upah_tertinggi" type="text"
                            data-pristine-min-message="Mohon Masukkan Tingkat Upah Tertinggi" required
                            class="form-control" />
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Fasilitas Keselamatan dan Kesehatan</h5>
        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="q" type="checkbox"
                                name="fasilitas_keselamatan_dan_kesehatan[]" value="Peralatan Perlindungan" />
                            <label class="form-check-label" for="q">Peralatan Perlindungan</label>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="w" type="checkbox"
                                name="fasilitas_keselamatan_dan_kesehatan[]" value="Penyelenggaraan Makanan" />
                            <label class="form-check-label" for="w">Penyelenggaraan Makanan</label>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="qq" type="checkbox"
                                name="fasilitas_keselamatan_dan_kesehatan[]" value="Pelayanan Kesehatan" />
                            <label class="form-check-label" for="qq">Pelayanan Kesehatan</label>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="qqq" type="checkbox"
                                name="fasilitas_keselamatan_dan_kesehatan[]" value="Peralatan Pelindung" />
                            <label class="form-check-label" for="qqq">Peralatan Pelindung</label>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="qw" type="checkbox"
                                name="fasilitas_keselamatan_dan_kesehatan[]" value="Ruang PK3" />
                            <label class="form-check-label" for="qw">Ruang PK3</label>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="dsaj" type="checkbox"
                                name="fasilitas_keselamatan_dan_kesehatan[]" value="Kotak P3K" />
                            <label class="form-check-label" for="dsaj">Kotak P3K</label>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="adsjh" type="checkbox"
                                name="fasilitas_keselamatan_dan_kesehatan[]" value="Alat Pelindung Diri" />
                            <label class="form-check-label" for="adsjh">Alat Pelindung Diri</label>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="sadkj" type="checkbox"
                                name="fasilitas_keselamatan_dan_kesehatan[]" value="Penanganan Limbah" />
                            <label class="form-check-label" for="sadkj">Penanganan Limbah</label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Fasilitas Keselamatan dan Kesehatan</h5>
        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="qdas" type="checkbox" name="fasilitas_kesejahteraan[]"
                                value="Keluarga Berencana" />
                            <label class="form-check-label" for="qdas">Keluarga Berencana</label>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="dsakj" type="checkbox" name="fasilitas_kesejahteraan[]"
                                value="Tempat Penitipan Anak" />
                            <label class="form-check-label" for="dsakj">Tempat Penitipan Anak</label>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="aosiri" type="checkbox" name="fasilitas_kesejahteraan[]"
                                value="Perumahan Pekerja" />
                            <label class="form-check-label" for="aosiri">Perumahan Pekerja</label>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="wqieu" type="checkbox" name="fasilitas_kesejahteraan[]"
                                value="Fasilitas Ibadah" />
                            <label class="form-check-label" for="wqieu">Fasilitas Ibadah</label>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="owierpqiw" type="checkbox"
                                name="fasilitas_kesejahteraan[]" value="Kantin/Catering" />
                            <label class="form-check-label" for="owierpqiw">Kantin/Catering</label>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="iwqeoi" type="checkbox" name="fasilitas_kesejahteraan[]"
                                value="Fasilitas Rekreasi" />
                            <label class="form-check-label" for="iwqeoi">Fasilitas Rekreasi</label>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="sdmnal" type="checkbox" name="fasilitas_kesejahteraan[]"
                                value="Koperasi" />
                            <label class="form-check-label" for="sdmnal">Koperasi</label>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="saurai" type="checkbox" name="fasilitas_kesejahteraan[]"
                                value="Fasilitas Laktasi" />
                            <label class="form-check-label" for="saurai">Fasilitas Laktasi</label>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="asf" type="checkbox" name="fasilitas_kesejahteraan[]"
                                value="Ruang Merokok" />
                            <label class="form-check-label" for="asf">Ruang Merokok</label>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="qewe" type="checkbox" name="fasilitas_kesejahteraan[]"
                                value="Armada Antar Jemput" />
                            <label class="form-check-label" for="qewe">Armada Antar Jemput</label>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="qweoi" type="checkbox" name="fasilitas_kesejahteraan[]"
                                value="Fasilitas Kesenian" />
                            <label class="form-check-label" for="qweoi">Fasilitas Kesenian</label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Ketenaga Kerjaan</h5>
        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Nomor BPJS Ketenaga Kerjaan Perusahaan</label>
                        <input name="nomor_bpjs" type="text" required value="{{ Auth::user()->nomor_bpjs }}" readonly
                            data-pristine-min-message="Mohon Masukkan Nomor BPJS Ketenaga Kerjaan Perusahaan" required
                            class="form-control" />
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Program Jaminan Kesehatan</label>
                        <input name="program_jaminan_kesehatan" type="number" required
                            placeholder="Jumlah Pekerja Terdaftar Program Jaminan Kesehatan"
                            data-pristine-min-message="Mohon Masukkan Program Jaminan Kesehatan" required
                            class="form-control" />
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Program JKK</label>
                        <input name="program_jkk" type="number" required
                            placeholder="Jumlah Pekerja Terdaftar Program JKK"
                            data-pristine-min-message="Mohon Masukkan Program JKK" class="form-control" />
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Program JHT</label>
                        <input name="program_jht" type="number" required
                            placeholder="Jumlah Pekerja Terdaftar Program JHT"
                            data-pristine-min-message="Mohon Masukkan Program JHT" class="form-control" />
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Program JKM</label>
                        <input name="program_jkm" type="number" required
                            placeholder="Jumlah Pekerja Terdaftar Program JKM"
                            data-pristine-min-message="Mohon Masukkan Program JKM" class="form-control" />
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Program JP</label>
                        <input name="program_jp" type="number" required
                            placeholder="Jumlah Pekerja Terdaftar Program JP"
                            data-pristine-min-message="Mohon Masukkan Program JP" class="form-control" />
                    </div>
                </div>

            </div>
        </div>

    </div>


    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Perangkat Hubungan Industrial</h5>
        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Perangkat Hubungan Kerja</label>
                        <select name="perangkat_hubungan_kerja" class="form-control form-select">
                            <option value="">Pilih</option>
                            <option value="Perjanjian Perusahaan">Perjanjian Perusahaan</option>
                            <option value="Perjanjian Kerja Bersama">Perjanjian Kerja Bersama</option>
                        </select>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Perangkat Organisasi Ketenagakerjaan</label>
                        <select name="perangkat_organisasi_keterangan" class="form-control form-select">
                            <option value="">Pilih</option>
                            <option value="Biporfit">Biporfit</option>
                            <option value="SPSB">SPSB</option>
                            <option value="Apindo">Apindo</option>
                            <option value="Organisasi Lain">Organisasi Lain</option>
                        </select>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Sudah Mempunyai Perencanaan Tenaga Kerja</label>
                        <select name="sudah_mempunyai_perencanaan_tenaga_kerja" class="form-control form-select">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Rencana Pekerja yang dibutuhkan Dalam 12 Bulan Akan Datang</h5>
        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Jumlah Pekerja</label>
                        <input name="rencana_jumlah_pekerja" type="number" placeholder="Jumlah pekerja"
                            data-pristine-min-message="Mohon Masukkan Jumlah Pekerja" class="form-control" />
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Jumlah Pekerja Laki-Laki</label>
                        <input name="rencana_jumlah_pekerja_laki_laki" type="number"
                            placeholder="Jumlah pekerja laki-laki"
                            data-pristine-min-message="Mohon Masukkan Jumlah Pekerja Laki-Laki" class="form-control" />
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Jumlah Pekerja Perempuan</label>
                        <input name="rencana_jumlah_pekerja_laki_laki" type="number"
                            placeholder="Jumlah pekerja perempuan"
                            data-pristine-min-message="Mohon Masukkan Jumlah Pekerja Perempuan" class="form-control" />
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Pekerja 12 Bulan Terakhir</h5>
        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Jumlah Pekerja</label>
                        <input name="jumlah_pekerja_terakhir" type="number" placeholder="Jumlah pekerja"
                            data-pristine-min-message="Mohon Masukkan Jumlah Pekerja" required class="form-control" />
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Jumlah Pekerja Laki-Laki</label>
                        <input name="jumlah_pekerja_laki_laki_terakhir" type="number"
                            placeholder="Jumlah pekerja laki-laki"
                            data-pristine-min-message="Mohon Masukkan Jumlah Pekerja Laki-Laki" required
                            class="form-control" />
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Jumlah Pekerja Perempuan</label>
                        <input name="jumlah_pekerja_laki_laki_terakhir" type="number"
                            placeholder="Jumlah pekerja perempuan"
                            data-pristine-min-message="Mohon Masukkan Jumlah Pekerja Perempuan" required
                            class="form-control" />
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Asal Tenaga Kerja</h5>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">

                                    <thead class="table-light">
                                        <tr>
                                            <th>No.</th>
                                            <th>Asal Tenaga Kerja</th>
                                            <th>Laki Laki</th>
                                            <th>Perempuan</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div id="ckeditor-classic"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>



    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Penerimaan dan Pemberhentian Pekerja Dalam 12 Bulan Terakhir</h5>
        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Jumlah Penerimaan Pekerja Baru</label>
                        <input name="jumlah_penerimaan_pekerja_dalam_12_bulan_terakhir" type="number"
                            placeholder="Jumlah pekerja"
                            data-pristine-min-message="Mohon Masukkan Jumlah Penerimaan Pekerja Baru" required
                            class="form-control" />
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label>Jumlah Pekerja yang Berhenti</label>
                        <input name="jumlan_pekerja_yang_berhenti_dalam_12_bulan_terakhir" type="number"
                            placeholder="Jumlah pekerja"
                            data-pristine-min-message="Mohon Masukkan Jumlah Pekerja Perempuan yang Berhenti" required
                            class="form-control" />
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Program Pelatihan Bagi Pekerja</label>
                        <select name="program_pelatihan_bagi_pekerja" class="form-control form-select">
                            <option value="">Pilih</option>
                            <option value="Ada">Ada</option>
                            <option value="Tidak Ada">Tidak Ada</option>
                        </select>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Program Pemagangan</label>
                        <select name="program_pemagangan" class="form-control form-select">
                            <option value="">Pilih</option>
                            <option value="Ada">Ada</option>
                            <option value="Tidak Ada">Tidak Ada</option>
                        </select>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Tanggal Lapor dan Pelaporan Kembali</h5>
        </div>
        <div class="card-body">
            <div class="row">

                <div class="row mb-2">
                    <div class="col">
                        <div class="col-xl-4 col-md-6">
                            <div class="form-group mb-3">
                                <label>Tanggal Lapor</label>
                                <input name="tanggal_lapor" type="text" required class="form-control"
                                    value="{{ Carbon\Carbon::now()->format('d-m-Y') }}" readonly />
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="form-group mb-3">
                                <label>Tanggal Lapor Kembali</label>
                                <input name="tanggal_lapor_kembali" type="text" required class="form-control"
                                    value="{{ Carbon\Carbon::now()->addYears(1)->format('d-m-Y') }}" readonly />
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Pakta Integritas</h5>
        </div>
        <div class="card-body">
            <div class="row">

                <div class="row mb-2">
                    <div class="col">
                        <div class="form-check font-size-15">
                            <input class="form-check-input " type="checkbox" id="police-check" required>
                            <label class="form-check-label font-size-13" for="police-check">
                                Dengan mengirim form maka informasi yang kami sampaikan adalah benar, transparan dan
                                profesional untuk memberikan hasil kerja yang terbaik sesuai dengan peraturan perundang
                                undangan. Apabila informasi yang kmai sampaikan ada hal-hal yang melanggar yang
                                dinyatakan
                                dalam pakta integritas ini kami bersedia menerima sanksi administrasi dan digugat secara
                                perdata dan atau dilaporkan secara pidana.
                            </label>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="m-3 form-group text-end">
            <button type="submit" class="btn btn-primary">Simpan
                Data</button>
            </button>
        </div>
    </div>
</form>
<!-- end row -->
@endsection
@section('script')

<script src="{{ URL::asset('dasson/libs/@ckeditor/@ckeditor.min.js') }}"></script>
<script src="{{ URL::asset('dasson/js/pages/form-editor.init.js') }}"></script>

<script src="{{ URL::asset('dasson/libs/pristinejs/pristinejs.min.js') }}"></script>
<script src="{{ URL::asset('dasson/js/pages/form-validation.init.js') }}"></script>

<script src="{{ URL::asset('/dasson/js/app.min.js') }}"></script>
@endsection