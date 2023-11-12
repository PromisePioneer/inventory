<!DOCTYPE html>
<html lang="en">
<head>
    <title>CV. BUDI GASES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />

    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('assets/logo.png') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    @vite(['resources/js/app.js'])

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

</head>

<body id="kt_body" class="header-tablet-and-mobile-fixed aside-enabled">

<div class="d-flex flex-column flex-root">
    <div class="page d-flex flex-row flex-column-fluid">
        <div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
            <div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
                <div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
                    <div class="symbol symbol-50px">
                        <img class="rounded-circle header-profile-user"
                             src="https://ui-avatars.com/api/?name={{ substr(Auth::user()->name, 0, 1) }}&color=FFFFFF&background=FA7070"
                             alt="Profile Photo">
                    </div>
                    <div class="aside-user-info flex-row-fluid flex-wrap ms-5">
                        <div class="d-flex">
                            <div class="flex-grow-1 me-2">
                                <a href="#" class="text-white text-hover-primary fs-6 fw-bold">{{ Auth::user()->name }}</a>
                                <span class="text-gray-600 fw-bold d-block fs-8 mb-1">{{ Auth::user()->roles[0]->name  }}</span>
                                <div class="d-flex align-items-center text-success fs-9">
                                    <span class="bullet bullet-dot bg-success me-1"></span>online</div>
                            </div>
                            <div class="me-n2">
                                <a href="#" class="btn btn-icon btn-sm btn-active-color-primary mt-n2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-overflow="true">
                                    <span class="svg-icon svg-icon-muted svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black" />
													<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black" />
												</svg>
											</span>
                                </a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <div class="symbol symbol-50px me-5">
                                                <img class="rounded-circle header-profile-user"
                                                     src="https://ui-avatars.com/api/?name={{ substr(Auth::user()->name, 0, 1) }}&color=FFFFFF&background=FA7070"
                                                     alt="Profile Photo">
                                            </div>
                                            <div class="d-flex flex-column">
                                                <div class="fw-bolder d-flex align-items-center fs-5">{{ Auth::user()->name }}
                                                    <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">{{ Auth::user()->roles[0]->name }}</span></div>
                                                <a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="separator my-2"></div>
                                    <div class="menu-item px-5">
                                        <a href="#" class="menu-link px-5">My Profile</a>
                                    </div>
                                    <div class="menu-item px-5">
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"
                                           class="menu-link px-5">Sign Out</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Aside Toolbarl-->
            <!--begin::Aside menu-->
            <div class="aside-menu flex-column-fluid">
                <!--begin::Aside Menu-->
                <div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
                    <!--begin::Menu-->
                    <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
                        <div class="menu-item">
                            <div class="menu-content pb-2">
                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ Request::segment(1) === 'home' ? 'active' : '' }}" href="{{ url('home') }}">
										<span class="menu-icon">
                                            <i class="bi bi-house fs-2"></i>
										</span>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <div class="menu-content pt-8 pb-2">
                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Master</span>
                            </div>
                        </div>
                        @role('owner')
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::segment(1) == 'user' ? 'active hover show' : '' }}">
									<span class="menu-link">
										<span class="menu-icon">
											<i class="bi bi-people-fill fs-2"></i>
										</span>
										<span class="menu-title">User</span>
										<span class="menu-arrow"></span>
									</span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link {{ Request::segment(2) == 'permission' ? 'active' : '' }}" href="{{ url('user/permission') }}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Permission</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ Request::segment(2) == 'role' ? 'active' : '' }}"  href="{{ url('user/role') }}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Role</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ Request::segment(2) == 'user' ? 'active' : '' }}" href="{{ url('user/user') }}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">User</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endrole
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::segment(1) == 'master' ? 'active hover show' : '' }}">
									<span class="menu-link">
										<span class="menu-icon">
											<i class="bi bi-clipboard-data fs-2"></i>
										</span>
										<span class="menu-title">Master Data</span>
										<span class="menu-arrow"></span>
									</span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link {{ Request::segment(2) == 'barang' ? 'active' : '' }}" href="{{ url('master/barang') }}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Barang</span>
                                    </a>
                                </div>
                                @role('admin')
                                <div class="menu-item">
                                    <a class="menu-link {{ Request::segment(2) == 'distributor' ? 'active' : '' }}" href="{{ url('master/distributor') }}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Distributor</span>
                                    </a>
                                </div>
                                @endrole
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-content pt-8 pb-2">
                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Transaksi</span>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::segment(1) == 'transaksi' ? 'active hover show' : '' }}">
									<span class="menu-link">
										<span class="menu-icon">
											<i class="bi bi-bag-check-fill fs-2"></i>
										</span>
										<span class="menu-title">Transaksi</span>
										<span class="menu-arrow"></span>
									</span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link {{ Request::segment(2) == 'barang-masuk' ? 'active ' : '' }}" href="{{ url('transaksi/barang-masuk') }}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Barang Masuk</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ Request::segment(2) == 'barang-keluar' ? 'active' : '' }}" href="{{ url('transaksi/barang-keluar') }}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Barang Keluar</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <div id="kt_header" style="" class="header align-items-stretch">
                <div class="header-brand">
                    <a href="../../demo8/dist/index.html">
                        <img alt="Logo" src="{{ asset('assets/logo.png')  }}" class="h-25px h-lg-55px" />
                    </a>
                    <h1 class="text-white" style="font-size: 12px">CV. Budi Gases </h1>
                    <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-minimize" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
                        <span class="svg-icon svg-icon-1 me-n1 minimize-default">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.3" x="8.5" y="11" width="12" height="2" rx="1" fill="black" />
										<path d="M10.3687 11.6927L12.1244 10.2297C12.5946 9.83785 12.6268 9.12683 12.194 8.69401C11.8043 8.3043 11.1784 8.28591 10.7664 8.65206L7.84084 11.2526C7.39332 11.6504 7.39332 12.3496 7.84084 12.7474L10.7664 15.3479C11.1784 15.7141 11.8043 15.6957 12.194 15.306C12.6268 14.8732 12.5946 14.1621 12.1244 13.7703L10.3687 12.3073C10.1768 12.1474 10.1768 11.8526 10.3687 11.6927Z" fill="black" />
										<path opacity="0.5" d="M16 5V6C16 6.55228 15.5523 7 15 7C14.4477 7 14 6.55228 14 6C14 5.44772 13.5523 5 13 5H6C5.44771 5 5 5.44772 5 6V18C5 18.5523 5.44771 19 6 19H13C13.5523 19 14 18.5523 14 18C14 17.4477 14.4477 17 15 17C15.5523 17 16 17.4477 16 18V19C16 20.1046 15.1046 21 14 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3H14C15.1046 3 16 3.89543 16 5Z" fill="black" />
									</svg>
								</span>
                        <span class="svg-icon svg-icon-1 minimize-active">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(-1 0 0 1 15.5 11)" fill="black" />
										<path d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z" fill="black" />
										<path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="#C4C4C4" />
									</svg>
								</span>
                    </div>
                    <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
                        <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
                            <span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
                        </div>
                    </div>
                </div>
                <div class="toolbar">
                    <div class="container-fluid py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">
                        <div class="page-title d-flex flex-column me-5">
                            <h1 class="d-flex flex-column text-dark fw-bolder fs-3 mb-0">Dashboard</h1>
                            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 pt-1">
                                <li class="breadcrumb-item text-muted">
                                    <a href="../../demo8/dist/index.html" class="text-muted text-hover-primary">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                </li>
                                <li class="breadcrumb-item text-dark">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <div class="post d-flex flex-column-fluid" id="kt_post">
                    <div id="kt_content_container" class="container-xxl">
                        <div class="row g-5 g-xl-8">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted fw-bold me-1">2021©</span>
                        <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Menu-->
                    <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                        <li class="menu-item">
                            <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                        </li>
                        <li class="menu-item">
                            <a href="https://keenthemes.com/support" target="_blank" class="menu-link px-2">Support</a>
                        </li>
                        <li class="menu-item">
                            <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                        </li>
                    </ul>
                    <!--end::Menu-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
    </div>
    <!--end::Page-->
</div>

<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">

    <span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
</div>


<script src="{{ asset('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js')}}"></script>

@stack('js')
</body>

</html>
