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
                                    <p class="text-muted mt-2">Silahkan Masukkan Email Anda Untuk Melanjutkan.</p>
                                </div>
                                <form method="POST" action="{{ route('password.email') }}">
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
                                        <label for="input-username">Email</label>
                                        <div class="form-floating-icon">
                                            <i data-feather="users"></i>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light"
                                            type="submit">Kirim Verifikasi Email</button>
                                    </div>
                                </form>

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