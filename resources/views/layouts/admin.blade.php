<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon/favicon.ico">
    <!-- Libs CSS -->

    <!-- Theme CSS -->
    <link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">

    <title>PT AKBAR ANGKASA TARUNA - Internal System</title>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />

    <style>
        .navbar-vertical .navbar-brand img {
            height: 13rem;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script src="/tinymce/tinymce.min.js"></script>
    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '#mytextarea',
            plugins: 'table advtable',
            menubar: 'file edit insert view format table tools help'
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.date').datepicker({
                format: "yyyy/mm/dd",
            });
        });
    </script>



    <!-- Styles -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />


    <script src="/js/select2.js"></script>

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" /> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
    <link rel="stylesheet" href="/css/select2-bootstrap.css" />


</head>

<body class="bg-light">
    <div id="db-wrapper">
        <!-- navbar vertical -->
        <!-- Sidebar -->
        <nav class="navbar-vertical navbar d-print-none">
            <div class="nav-scroller">
                <!-- Brand logo -->
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Welcome.." />
                </a>
                <!-- Navbar nav -->
                <ul class="navbar-nav flex-column" id="sideNavbar">
                    <li class="nav-item">
                        <div class="navbar-heading">Dashboard</div>
                    </li>
                    @can('isCrew')
                        <li class="nav-item">
                            <div class="navbar-heading">Data</div>
                        </li>
                        @if (Auth::User()->profile)
                            <li class="nav-item">
                                <a class="nav-link has-arrow "
                                    href=" {{ route('profile.show', Auth::User()->profile->crew->subid) }}">
                                    <i data-feather="clipboard" class="nav-icon icon-xs me-2">
                                    </i> Profile
                                </a>
                            </li>
                        @endif
                    @endcan
                    @can('isAdmin')
                        <!-- Nav item -->
                        <li class="nav-item">
                            <div class="navbar-heading">Data</div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link has-arrow " href="{{ route('company.index') }}">
                                <i data-feather="clipboard" class="nav-icon icon-xs me-2">
                                </i> Companies
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link has-arrow " href="/klien">
                                <i data-feather="clipboard" class="nav-icon icon-xs me-2">
                                </i> Clients
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow " href="{{ route('ship.index') }}">
                                <i data-feather="clipboard" class="nav-icon icon-xs me-2">
                                </i> Vessel Names
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link has-arrow " href="{{ route('port.index') }}">
                                <i data-feather="clipboard" class="nav-icon icon-xs me-2">
                                </i> Ports
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link has-arrow " href="{{ route('job.index') }}">
                                <i data-feather="clipboard" class="nav-icon icon-xs me-2">
                                </i> Jobs
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link has-arrow " href="{{ route('national.index') }}">
                                <i data-feather="clipboard" class="nav-icon icon-xs me-2">
                                </i> Nationalities
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link has-arrow " href="{{ route('currency.index') }}">
                                <i data-feather="clipboard" class="nav-icon icon-xs me-2">
                                </i> Currencies
                            </a>
                        </li>


                        <!-- Nav item -->
                        <li class="nav-item">
                            <div class="navbar-heading">Management</div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow " href="{{ route('crew.index') }}">
                                <i data-feather="clipboard" class="nav-icon icon-xs me-2">
                                </i> Crew Database
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow " href="{{ route('print.index') }}">
                                <i data-feather="clipboard" class="nav-icon icon-xs me-2">
                                </i> Crew Print
                            </a>
                        </li>
                    @endcan
                    {{-- <li class="nav-item">
                        <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages">
                            <i data-feather="layers" class="nav-icon icon-xs me-2">
                            </i> Requests
                        </a>
                        <div id="navPages" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link has-arrow   " href="{{ route('order.create') }}">
                                        Create Request
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('order.index') }}">
                                        Request List
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navPapers" aria-expanded="false" aria-controls="navPapers">
                            <i data-feather="layers" class="nav-icon icon-xs me-2">
                            </i> Papers
                        </a>
                        <div id="navPapers" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link has-arrow" href="/papers">
                                        Crew Profiles
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="/papers">
                                        Crew Contracts
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="/papers">
                                        Crew List
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li> --}}
                    <!-- Nav item -->
                    {{-- @can('admin')
                        <li class="nav-item">
                            <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                                data-bs-target="#applicationletter" aria-expanded="false"
                                aria-controls="applicationletter">
                                <i data-feather="lock" class="nav-icon icon-xs me-2">
                                </i> Letters
                            </a>
                            <div id="applicationletter" class="collapse" data-bs-parent="#applicationletter">
                                <ul class="nav flex-column">
                                    <li class="nav-item ">
                                        <a class="nav-link  "href="/">Sign-On Letter</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link  " href="/">Airport Officer Letter</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link  " href="/">Airline Officer Letter</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link  " href="/">Local Imigration</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link  " href="/">International Imigration</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link  " href="/">Guarantee Letter</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="navbar-heading">Finance</div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navFinance" aria-expanded="false" aria-controls="navPages">
                                <i data-feather="layers" class="nav-icon icon-xs me-2">
                                </i> Invoicing
                            </a>
                            <div id="navFinance" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow   " href="">
                                            Recruitment Fee
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="">
                                            Management Fee
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navsalary" aria-expanded="false" aria-controls="navPages">
                                <i data-feather="layers" class="nav-icon icon-xs me-2">
                                </i> Salary
                            </a>
                            <div id="navsalary" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow   " href="">
                                            Crews Salary
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="">
                                            Family Remittance
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <div class="navbar-heading">Settings</div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow " href="./docs/index.html">
                                <i data-feather="clipboard" class="nav-icon icon-xs me-2">
                                </i> Tutorial
                            </a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow " href="./docs/index.html">
                                <i data-feather="clipboard" class="nav-icon icon-xs me-2">
                                </i> Time & Language
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow " href="./docs/index.html">
                                <i data-feather="clipboard" class="nav-icon icon-xs me-2">
                                </i> About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow " href="./docs/index.html">
                                <i data-feather="clipboard" class="nav-icon icon-xs me-2">
                                </i> Theme
                            </a>
                        </li>
                    @endcan --}}
                </ul>
            </div>
        </nav>
        <div id="page-content">
            <div class="header @@classList">
                <!-- navbar -->
                <nav class="navbar-classic navbar navbar-expand-lg d-print-none">
                    <a id="nav-toggle" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-menu nav-icon me-2 icon-xs">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg></a>
                    <div class="ms-lg-3 d-none d-md-none d-lg-block">
                        <!-- Form -->
                        <form class="d-flex align-items-center">
                            <input type="search" class="form-control" placeholder="Search">
                        </form>
                    </div>
                    <!--Navbar nav -->
                    <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
                        <li class="dropdown stopevent">
                            <a class="btn btn-light btn-icon rounded-circle indicator
              indicator-primary text-muted"
                                href="#" role="button" id="dropdownNotification" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-bell icon-xs">
                                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                </svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"
                                aria-labelledby="dropdownNotification">
                                <div>
                                    <div
                                        class="border-bottom px-3 pt-2 pb-3 d-flex
                  justify-content-between align-items-center">
                                        <p class="mb-0 text-dark fw-medium fs-4">Notifications</p>
                                        <a href="#" class="text-muted">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-settings me-1 icon-xxs">
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                    <path
                                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                    <!-- List group -->
                                    <div class="slimScrollDiv"
                                        style="position: relative; overflow: hidden; width: auto; height: 300px;">
                                        <ul class="list-group list-group-flush notification-list-scroll"
                                            style="overflow: hidden; width: auto; height: 300px;">
                                            <!-- List group item -->
                                            <li class="list-group-item bg-light">
                                                <a href="#" class="text-muted">
                                                    <h5 class=" mb-1">Rishi Chopra</h5>
                                                    <p class="mb-0">
                                                        Mauris blandit erat id nunc blandit, ac eleifend dolor pretium.
                                                    </p>
                                                </a>
                                            </li>
                                            <!-- List group item -->
                                            <li class="list-group-item">
                                                <a href="#" class="text-muted">
                                                    <h5 class=" mb-1">Neha Kannned</h5>
                                                    <p class="mb-0">
                                                        Proin at elit vel est condimentum elementum id in ante. Maecenas
                                                        et sapien metus.
                                                    </p>
                                                </a>
                                            </li>
                                            <!-- List group item -->
                                            <li class="list-group-item">
                                                <a href="#" class="text-muted">
                                                    <h5 class=" mb-1">Nirmala Chauhan</h5>
                                                    <p class="mb-0">
                                                        Morbi maximus urna lobortis elit sollicitudin sollicitudieget
                                                        elit vel pretium.
                                                    </p>
                                                </a>
                                            </li>
                                            <!-- List group item -->
                                            <li class="list-group-item">
                                                <a href="#" class="text-muted">
                                                    <h5 class=" mb-1">Sina Ray</h5>
                                                    <p class="mb-0">
                                                        Sed aliquam augue sit amet mauris volutpat hendrerit sed nunc eu
                                                        diam.
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="slimScrollBar"
                                            style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 227.848px;">
                                        </div>
                                        <div class="slimScrollRail"
                                            style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
                                        </div>
                                    </div>
                                    <div class="border-top px-3 py-2 text-center">
                                        <a href="#" class="text-inherit fw-semi-bold">
                                            View all Notifications
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @auth
                            <!-- List -->
                            <li class="dropdown ms-2">
                                <a class="rounded-circle" href="#" role="button" id="dropdownUser"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="avatar avatar-md avatar-indicators avatar-online">
                                        <img alt="avatar" src="/assets/images/avatar/avatar-1.jpg"
                                            class="rounded-circle">
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                                    <div class="px-4 pb-0 pt-2">
                                        <div class="lh-1 ">
                                            <h5 class="mb-1">{{ Auth::user()->email }}</h5>
                                            <a href="#" class="text-inherit fs-6">View my profile</a>
                                        </div>
                                        <div class=" dropdown-divider mt-3 mb-2"></div>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-user me-2 icon-xxs dropdown-item-icon">
                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg>Edit
                                                Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-activity me-2 icon-xxs dropdown-item-icon">
                                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                </svg>Activity Log
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item text-primary" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-star me-2 icon-xxs text-primary dropdown-item-icon">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg>Go Pro
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-settings me-2 icon-xxs dropdown-item-icon">
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                    <path
                                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                    </path>
                                                </svg>Account Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-power me-2 icon-xxs dropdown-item-icon">
                                                    <path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
                                                    <line x1="12" y1="2" x2="12" y2="12">
                                                    </line>
                                                </svg>Log Out
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endauth
                    </ul>
                </nav>
            </div>
            {{-- @include('sweetalert::alert') --}}
            @yield('content')
        </div>
    </div>
    <!-- Libs JS -->
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".select2").select2({
                tags: true,
                theme: "bootstrap"
            });
        });
    </script>
    <!-- Theme JS -->
    <script src="/assets/js/main.js"></script>
    <script>
        $(document).ready(function() {
            datat = $('.datatable').DataTable({

                "dom": 'lrtip',
                "pageLength": 50


            });
            //selected row
            $('.datatable tbody').on('click', 'tr', function() {
                $(this).toggleClass('selected');
            });
            //tombol action selected
            $('#button').click(function() {
                // alert(table.rows('.selected').data().length + ' row(s) selected');
                datanya = datat.rows('.selected').data()

            });

            //form cari data
            $('#caridata').keyup(function() {
                datat.search($(this).val()).draw();
            })
        });
    </script>

</body>

</html>
