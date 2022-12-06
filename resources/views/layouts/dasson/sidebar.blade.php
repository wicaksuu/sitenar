<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{ url('/') }}/{{ Auth::User()->role }}">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Dashboards</span>
                    </a>
                </li>
                @if (Auth::User()->role!='user')

                <li>
                    <a href="{{ url('user-data') }}">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Daftar Pengguna</span>
                    </a>
                </li>
                @endif
                @if (Auth::User()->role == 'disnaker')
                <li>
                    <a href="{{ url('/daftar-perusahaan-list') }}">
                        <i data-feather="slack"></i>
                        <span data-key="t-dashboard">Perusahaan</span>
                    </a>
                </li>
                @endif

                @if (Auth::User()->role == 'perusahaan')
                <li class="menu-title" data-key="t-apps">Perusahaan</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="trello"></i>
                        <span data-key="t-ecommerce">Laporan</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ url('laporan-kodefikasi') }}" key="t-products">Laporan Perusahaan</a></li>
                        <li><a href="{{ url('laporan-pengesahan') }}" data-key="t-customers">Daftar Laporan</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="monitor"></i>
                        <span data-key="t-ecommerce">Lowongan Pekerjaan</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ url('daftar-lowongan') }}" key="t-starter-page">Daftar Lowongan</a></li>
                        <li><a href="{{ url('daftar-pelamar') }}" key="t-starter-page">Daftar Pelamar Diterima</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="file-text"></i>
                        <span data-key="t-pages">Blog</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ url('/') }}/{{ Auth::User()->role }}/{{'berita-pelatihan' }}/Pelatihan"
                                key="t-starter-page">Daftar Pelatihan</a></li>
                        <li><a href="{{ url('/') }}/{{ Auth::User()->role }}/{{'daftar-peserta' }}/pelatihan"
                                key="t-starter-page">Daftar Peserta
                                Pelatihan</a></li>

                        <li><a href="{{ url('/') }}/{{ Auth::User()->role }}/{{'berita-pelatihan' }}/Berita"
                                key="t-starter-page">Daftar Berita</a></li>
                    </ul>
                </li>

                @endif

                @if (Auth::User()->role == 'user')
                <li>
                    <a href="{{ url('daftar-lowongan') }}">
                        <i data-feather="list"></i>
                        <span data-key="t-authentication">Daftar Lowongan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('user/berita-pelatihan/Pelatihan') }}">
                        <i data-feather="package"></i>
                        <span data-key="t-horizontal">Daftar Pelatihan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('user/berita-pelatihan/Berita') }}">
                        <i data-feather="align-center"></i>
                        <span data-key="t-components">Berita</span>
                    </a>
                </li>
                @endif


            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->