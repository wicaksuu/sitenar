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
                        <span class="badge rounded-pill bg-soft-success text-success float-end">9+</span>
                        <span data-key="t-dashboard">Dashboards</span>
                    </a>
                </li>

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
                        <i data-feather="file-text"></i>
                        <span data-key="t-pages">Lowongan Pekerjaan</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ url('daftar-lowongan') }}" key="t-starter-page">Daftar Lowongan</a></li>
                        <li><a href="{{ url('daftar-pelamar') }}" key="t-starter-page">Daftar Pelamar</a></li>
                    </ul>
                </li>

                @endif

                @if (Auth::User()->role == 'user')
                <li>
                    <a href="{{ url('/daftar-perusahaan-list') }}">
                        <i data-feather="slack"></i>
                        <span data-key="t-dashboard">Laporan User</span>
                    </a>
                </li>
                @endif


            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->