@extends('layouts.dasson.master-without-nav')
@section('title')
Login
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
                                <a href="{{ url('/') }}" class="d-block auth-logo"><img
                                        src="{{ URL::asset('assets/images/icons/sitenar76.png') }}" alt="" height="60">
                                    <span class="logo-txt">Sitenar</span>
                                </a>
                            </div>
                            <div class="auth-content my-auto">
                                <div class="text-center">
                                    <img src="{{ URL::asset('https://3.bp.blogspot.com/-84AZcdvvo6k/XxcAS-ve2mI/AAAAAAAAatg/MsweQPwt57oqf95KhA5Qg-Y2GUnqeqp4gCLcBGAsYHQ/s1600/Lambang-Kabupaten-Madiun_237-design.png') }}"
                                        alt="" height="120">
                                    <h5 class="mt-2 mb-0">Selamat Datang</h5>
                                    <p class="text-muted mt-2">Silahkan Masuk Untuk Melanjutkan.</p>
                                </div>
                                <form class="mt-4 pt-2" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="form-floating form-floating-custom mb-4">
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}" id="input-username" placeholder="Enter User Name"
                                            name="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <label for="input-username">Username</label>
                                        <div class="form-floating-icon">
                                            <i data-feather="users"></i>
                                        </div>
                                    </div>

                                    <div class="form-floating form-floating-custom mb-4 auth-pass-inputgroup">
                                        <input type="password"
                                            class="form-control pe-5 @error('password') is-invalid @enderror"
                                            name="password" id="password-input" placeholder="Enter Password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0"
                                            id="password-addon">
                                            <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                        </button>
                                        <label for="input-password">Password</label>
                                        <div class="form-floating-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col">
                                            <div class="form-check font-size-15">
                                                <input class="form-check-input " type="checkbox" id="remember-check">
                                                <label class="form-check-label font-size-13" for="remember-check">
                                                    Ingat saya
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check font-size-15">
                                                <a href="{{ url('forgot-password') }}">Lupa password</a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log
                                            In</button>
                                    </div>
                                </form>

                                <div class="mt-4 pt-2 text-center">
                                    <div class="signin-other-title">
                                        <h5 class="font-size-14 mb-3 text-muted fw-medium">- Sign in with -</h5>
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
                                    <p class="text-muted mb-0">Tidak memiliki akun ? <a href="{{ url('register') }}"
                                            class=" text-primary fw-semibold"> Daftar Sekarang </a> </p>
                                </div>
                            </div>
                            <div class="mt-4 mt-md-5 text-center">
                                <p class="mb-0">© <script>
                                        document.write(new Date().getFullYear())
                                    </script> Design & Develop by <a href="https://disnaker.madiunkab.go.id"
                                        class="text-decoration-underline">Disnaker</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
@endsection
@section('script')
<script src="{{ URL::asset('dasson/js/pages/pass-addon.init.js') }}"></script>
<script src="{{ URL::asset('dasson/js/pages/feather-icon.init.js') }}"></script>
@endsection