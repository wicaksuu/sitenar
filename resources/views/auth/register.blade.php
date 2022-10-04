@extends('layouts.dasson.master-without-nav')
@section('title')
@lang('Registrasi')
@endsection
@section('content')

<center>
    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="col-xxl-3 col-lg-4 col-md-5">
                <div class="auth-full-page-content d-flex p-sm-5 p-4">
                    <div class="w-100">
                        <div class="d-flex flex-column h-100">
                            <div class="mb-4 mb-md-5 text-center">
                                <a href="{{ url('/') }}" class="d-block auth-logo">
                                    <img src="{{ URL::asset('assets/images/icons/sitenar76.png') }}" alt="" height="60">
                                    <span class="logo-txt">Sitenar</span>
                                </a>
                            </div>
                            <div class="auth-content my-auto">
                                <div class="text-center"><img
                                        src="{{ URL::asset('https://3.bp.blogspot.com/-84AZcdvvo6k/XxcAS-ve2mI/AAAAAAAAatg/MsweQPwt57oqf95KhA5Qg-Y2GUnqeqp4gCLcBGAsYHQ/s1600/Lambang-Kabupaten-Madiun_237-design.png') }}"
                                        alt="" height="120">
                                    <h5 class="mt-2 mb-0">Pendaftaran Akun</h5>
                                    <p class="text-muted mt-2">Silahkan melakukan registrasi.</p>
                                </div>
                                <form class="needs-validation mt-4 pt-2" novalidate method="POST"
                                    action="{{ route('register') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-floating form-floating-custom mb-4">
                                        <select name="role" required class="form-control form-select" id="slcx">
                                            <option value="perusahaan">Pemilik Usaha</option>
                                            <option value="user">Perorangan</option>
                                        </select>
                                        <label for="slcx">Daftar Sebagai</label>
                                        <div class="form-floating-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>


                                    <div class="form-floating form-floating-custom mb-4">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" id="input-email"
                                            placeholder="Enter Email" required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <label for="input-email">Email</label>
                                        <div class="form-floating-icon">
                                            <i data-feather="mail"></i>
                                        </div>
                                    </div>

                                    <div class="form-floating form-floating-custom mb-4">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" value="{{ old('name') }}" id="input-username"
                                            placeholder="Masukkan Nama" required>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <label for="input-username">Nama</label>
                                        <div class="form-floating-icon">
                                            <i data-feather="users"></i>
                                        </div>
                                    </div>
                                    <div class="form-floating form-floating-custom mb-4">
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            id="input-password" placeholder="Enter Password" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <label for="input-password">Password</label>
                                        <div class="form-floating-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
                                    <div class="form-floating form-floating-custom mb-4">
                                        <input type="password"
                                            class="form-control @error('password_confirmation') is-invalid @enderror"
                                            name="password_confirmation" id="input-password"
                                            placeholder="Enter Password" required>

                                        <label for="input-password">Confirm Password</label>
                                        <div class="form-floating-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <p class="mb-0">Dengan melakukan pendaftaran anda setuju menerima <a
                                                class="text-primary">Syarat dan Ketentuan yang berlaku</a>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light"
                                            type="submit">Register</button>
                                    </div>
                                </form>

                                <div class="mt-4 pt-2 text-center">
                                    <div class="signin-other-title">
                                        <h5 class="font-size-14 mb-3 text-muted fw-medium">- Sign up using -</h5>
                                    </div>

                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript:void()"
                                                class="social-list-item bg-primary text-white border-primary">
                                                <i class="mdi mdi-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void()"
                                                class="social-list-item bg-info text-white border-info">
                                                <i class="mdi mdi-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void()"
                                                class="social-list-item bg-danger text-white border-danger">
                                                <i class="mdi mdi-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-5 text-center">
                                    <p class="text-muted mb-0">Already have an account ? <a href="{{ url('/login') }}"
                                            class="text-primary fw-semibold"> Login </a>
                                    </p>
                                </div>
                            </div>
                            <div class="mt-4 mt-md-5 text-center">
                                <p class="mb-0">© <script>
                                        document.write(new Date().getFullYear())
                                    </script> Design & Develop by <a href="https://disnaker.madiunkab.go.id"
                                        class="text-decoration-underline">Disnaker</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end auth full page content -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container fluid -->
    </div>
</center>
@endsection
@section('script')
{{-- <script src="{{ URL::asset('dasson/js/pages/pass-addon.init.js') }}"></script> --}}
<script src="{{ URL::asset('dasson/js/pages/feather-icon.init.js') }}"></script>
<script src="{{ URL::asset('/dasson/js/pages/validation.init.js') }}"></script>
@endsection