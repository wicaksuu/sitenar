<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ url('/disnaker') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('assets/images/icons/sitenar120.png') }}" alt="" height="30">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('assets/images/icons/sitenar120.png') }}" alt="" height="24"> <span
                            class="logo-txt">Sitenar</span>
                    </span>
                </a>

                <a href="{{ url('/disnaker') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('assets/images/icons/sitenar120.png') }}" alt="" height="30">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('assets/images/icons/sitenar120.png') }}" alt="" height="24"> <span
                            class="logo-txt">Sitenar</span>
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <button class="btn btn-primary" type="button"><i class="bx bx-search-alt align-middle"></i></button>
                </div>
            </form>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item" id="page-header-search-dropdown" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i data-feather="search" class="icon-lg"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..."
                                    aria-label="Search Result">

                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>



            <div class="dropdown d-none d-sm-inline-block">
                <button type="button" class="btn header-item" id="mode-setting-btn">
                    <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                    <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                </button>
            </div>


            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon position-relative"
                    id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i data-feather="bell" class="icon-lg"></i>
                    {{-- <span class="badge bg-danger rounded-pill">2</span> --}}
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> Notifications </h6>
                            </div>
                            <div class="col-auto">
                                {{-- <a href="#!" class="small text-reset text-decoration-underline"> Unread (1)</a>
                                --}}
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        {{-- <a href="#!" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <img src="dasson/images/users/avatar-3.jpg" class="rounded-circle avatar-sm"
                                        alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">James Lemire</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1">Telah melamar pekerjaan di perusahaan ...</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hours ago</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#!" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <img src="dasson/images/users/avatar-6.jpg" class="rounded-circle avatar-sm"
                                        alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">SPT Periska Multi Usaha</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1">Telah melakukan pelaporan perusahaan.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 min ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a> --}}
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item bg-soft-light border-start border-end"
                    id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user"
                        src="@if (Auth::user()->profile_photo_path != ''){{ url(Auth::user()->profile_photo_path) }}@else{{ URL::asset('assets/images/icons/icon.png') }}@endif"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium">{{ Auth::user()->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ URL('/') }}/{{ Auth::user()->role }}-profile"><i
                            class="mdi mdi-face-profile font-size-16 align-middle me-1"></i>
                        Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item " href="javascript:void();"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            class="bx bx-power-off font-size-16 align-middle me-1"></i> <span
                            key="t-logout">Logout</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>