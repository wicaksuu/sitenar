@extends('layouts.dasson.master')
@section('title') User Profile @endsection
@section('css')
<link href="{{ URL::asset('dasson/libs/select2/select2.min.css') }}" rel="stylesheet">
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
    <form action="update-profile-user" novalidate method="post">
        @if (\Session::has('info'))
        <br>
        <div class="alert alert-success alert-border-left alert-dismissible fade show" role="alert">
            <i class="mdi mdi-check-all me-3 align-middle"></i><strong>{!! \Session::get('info') !!}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="card-header">
            <h5 class="card-title mb-0">User Profile</h5>
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


<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Formulir AK1 Dalam Negeri</h5>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label>Jabatan yang diinginkan</label>
                    <input name="jabatan_dalam_negeri" type="text" value="{{ Auth::user()->jabatan_dalam_negeri }}"
                        data-pristine-min-message="Mohon Masukkan Jabatan yang diinginakan" required
                        class="form-control" />
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label>Wilayah Kerja</label>
                    <input name="wilayah_kerja_dalam_negeri" type="text" value="Dalam Negeri" readonly
                        class="form-control" />
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label class="form-label">Provinsi</label>
                    <select name="province_id_dalam_negeri" required class="form-control form-select" id="provinsis"
                        onchange="showKabupatens(this.value)">
                        @if (Auth::user()->province_id_dalam_negeri == '')
                        <option value="">Pilih</option>
                        @else
                        <option value="{{ $data->province_dalam_negeri->id }}">{{ $data->province_dalam_negeri->name
                            }}</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label class="form-label">Kabupaten</label>
                    <select name="regencie_id_dalam_negeri" required class="form-control form-select" id="kabupatens"
                        onchange="showKecamatans(this.value)">
                        @if (Auth::user()->regencie_id_dalam_negeri == '')
                        <option value="">Pilih</option>
                        @else
                        <option value="{{ $data->regencie_dalam_negeri->id }}">{{ $data->regencie_dalam_negeri->name
                            }}</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label class="form-label">Kecamatan</label>
                    <select name="district_id_dalam_negeri" required class="form-control form-select" id="kecamatans"
                        onchange="showDesas(this.value)">
                        @if (Auth::user()->district_id_dalam_negeri == '')
                        <option value="">Pilih</option>
                        @else
                        <option value="{{ $data->district_dalam_negeri->id }}">{{ $data->district_dalam_negeri->name
                            }}</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label class="form-label">Desa</label>
                    <select name="village_id_dalam_negeri" required class="form-control form-select" id="desas">
                        @if (Auth::user()->village_id_dalam_negeri == '')
                        <option value="">Pilih</option>
                        @else
                        <option value="{{ $data->village_dalam_negeri->id }}">{{ $data->village_dalam_negeri->name }}
                        </option>
                        @endif
                    </select>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Formulir AK1 Luar Negeri</h5>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label>Jabatan yang diinginkan</label>
                    <input name="jabatan_luar_negeri" type="text" value="{{ Auth::user()->jabatan_luar_negeri }}"
                        data-pristine-min-message="Mohon Masukkan Jabatan yang diinginakan" required
                        class="form-control" />
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label>Wilayah Kerja</label>
                    <input name="wilayah_kerja_luar_negeri" type="text" value="Luar Negeri" readonly
                        class="form-control" />
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="form-group mb-3">
                    <label>Negara Tujuan</label>
                    <select class="form-control select2" title="Country">
                        @if (Auth::user()->negara_tujuan_luar_negeri =='')
                        <option>Pilih Negara</option>
                        @else
                        <option value="{{ Auth::user()->negara_tujuan_luar_negeri }}">{{
                            Auth::user()->negara_tujuan_luar_negeri }}</option>
                        @endif

                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antarctica</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvet Island</option>
                        <option value="BR">Brazil</option>
                        <option value="BN">Brunei Darussalam</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CX">Christmas Island</option>
                        <option value="CC">Cocos (Keeling) Islands</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CG">Congo</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CI">Cote d'Ivoire</option>
                        <option value="HR">Croatia (Hrvatska)</option>
                        <option value="CU">Cuba</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FK">Falkland Islands (Malvinas)</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IQ">Iraq</option>
                        <option value="IE">Ireland</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="KR">Korea, Republic of</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libyan Arab Jamahiriya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macau</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="MD">Moldova, Republic of</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="AN">Netherlands Antilles</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="MP">Northern Mariana Islands</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PW">Palau</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="RE">Reunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russian Federation</option>
                        <option value="RW">Rwanda</option>
                        <option value="KN">Saint Kitts and Nevis</option>
                        <option value="LC">Saint LUCIA</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">Sao Tome and Principe</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SK">Slovakia (Slovak Republic)</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SH">St. Helena</option>
                        <option value="PM">St. Pierre and Miquelon</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syrian Arab Republic</option>
                        <option value="TW">Taiwan, Province of China</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania, United Republic of</option>
                        <option value="TH">Thailand</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Viet Nam</option>
                        <option value="VG">Virgin Islands (British)</option>
                        <option value="VI">Virgin Islands (U.S.)</option>
                        <option value="WF">Wallis and Futuna Islands</option>
                        <option value="EH">Western Sahara</option>
                        <option value="YE">Yemen</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
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