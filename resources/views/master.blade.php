<?php 
use App\Models\Doctor;
use App\Models\Patient;
?>
<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('https://tadawy-production.up.railway.app/assets/') }}" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>TADAWY</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('https://tadawy-production.up.railway.app/assets/img/icons/unicons/logo.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('https://tadawy-production.up.railway.app/assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('https://tadawy-production.up.railway.app/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('https://tadawy-production.up.railway.app/assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('https://tadawy-production.up.railway.app/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('https://tadawy-production.up.railway.app/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('https://tadawy-production.up.railway.app/assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('https://tadawy-production.up.railway.app/assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('https://tadawy-production.up.railway.app/assets/js/config.js') }}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="{{ route('dashboard') }}" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <link rel="icon" type="image/x-icon"
                                href="{{ asset('https://tadawy-production.up.railway.app/assets/img/icons/unicons/logo.png') }}" />
                            <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                                    <g id="Icon" transform="translate(27.000000, 15.000000)">
                                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                                            <mask id="mask-2" fill="white">
                                                <use xlink:href="#path-1"></use>
                                            </mask>
                                            <use fill="#696cff" xlink:href="#path-1"></use>
                                            <g id="Path-3" mask="url(#mask-2)">
                                                <use fill="#696cff" xlink:href="#path-3"></use>
                                                <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                            </g>
                                            <g id="Path-4" mask="url(#mask-2)">
                                                <use fill="#696cff" xlink:href="#path-4"></use>
                                                <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                            </g>
                                        </g>
                                        <g id="Triangle"
                                            transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                                            <use fill="#696cff" xlink:href="#path-5"></use>
                                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                        </g>
                                    </g>
                                </g>
                            </g>
                            </svg>
                        </span>
                        <span>
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('https://tadawy-production.up.railway.app/assets/img/icons/unicons/logo.png') }}" alt="LOGO"
                                    class="rounded" />
                            </div>
                        </span>
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">TADAWY</span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item active">
                        <a href="{{ route('dashboard') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="{{ route('addDoctor') }}" class="menu-link">
                            <div data-i18n="Account">Add Doctor</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('addpatient') }}" class="menu-link">
                            <div data-i18n="Account">Add Patient</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('All_Patient') }}" class="menu-link">
                            <div data-i18n="Account">Patients Details</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('All_Doctor') }}" class="menu-link">
                            <div data-i18n="Account">Doctors Details</div>
                        </a>
                    </li>
                    <!-- <i class="menu-icon tf-icons bx bx-file"></i> -->
                    <div data-i18n="Documentation"></div>
                    </a>
                    </li>
                </ul>
            </aside>

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">


                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item lh-1 me-3">
                                <a class="text-primary">Admin : {{ Auth::user()->name }}</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-lg-8 mb-4 order-0">

                            </div>
                            <div class="col-lg-12 col-md-4 order-1">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="{{ asset('https://tadawy-production.up.railway.app/assets/img/icons/unicons/calendar.png') }}"
                                                            alt="chart success" class="rounded" />
                                                    </div>
                                                </div>
                                                <span class="fw-semibold d-block mb-1">Appointment</span>
                                                <h3 class="card-title mb-2">75</h3>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-6 mb-4">
                                        <div class="row">
                                            <div class="col-12 mb-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div
                                                            class="card-title d-flex align-items-start justify-content-between">
                                                            <div class="avatar flex-shrink-0">
                                                                <img src="{{ asset('https://tadawy-production.up.railway.app/assets/سسثفسimg/icons/unicons/doctor.png') }}"
                                                                    alt="Credit Card" class="rounded" />
                                                            </div>
                                                            <div class="dropdown">
                                                                <button class="btn p-0" type="button" id="cardOpt1"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                                                    <a class="dropdown-item" href="{{ route('All_Doctor') }}">All Doctors</a>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span class="fw-semibold d-block mb-1">Total Doctor</span>
                                                        <h3 class="card-title mb-2">{{ $allDoctors }}</h3>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-6 mb-4">
                                        <div class="row">
                                            <div class="col-12 mb-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div
                                                            class="card-title d-flex align-items-start justify-content-between">
                                                            <div class="avatar flex-shrink-0">

                                                                {{-- public/images/patient.png --}}
                                                                <img src="{{ asset('https://tadawy-production.up.railway.app/images/patient.png') }}"
                                                                    alt="Credit Card" class="rounded" />
                                                            </div>
                                                            <div class="dropdown">
                                                                <button class="btn p-0" type="button" id="cardOpt1"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                                                    <a class="dropdown-item" href="{{ route('All_Patient') }}">All Patients</a>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span class="fw-semibold d-block mb-1">Total Patient</span>
                                                        <h3 class="card-title mb-2">{{ $allPatients }}</h3>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Total doctors -->
                            <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
                                <div class="card">
                                    <div class="row row-bordered g-0">
                                        <div class="col-md-12">
                                            <h5 class="card-header m-0 me-2 pb-3">Hospital Activities</h5>
                                            <div id="totalRevenueChart" class="px-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <!-- Order Statistics -->
                            <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                                <div class="card h-100">
                                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                                        <div class="card-title mb-0">
                                            <h5 class="m-0 me-2"> Statistics</h5>
                                            <small class="text-muted">42.82k Total Statistics</small>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="orederStatistics"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="orederStatistics">
                                                <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <div class="d-flex flex-column align-items-center gap-1">
                                                <h2 class="mb-2">8,258</h2>
                                                <span>Total Orders</span>
                                            </div>
                                            <div id="orderStatisticsChart"></div>
                                        </div>
                                        <ul class="p-0 m-0">
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <img src="{{ asset('https://tadawy-production.up.railway.app/assets/img/icons/unicons/user-interface - Copy.png') }}"
                                                        alt="User" class="rounded" />
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0"></h6>
                                                        <small class="text-muted">Mobile App</small>
                                                    </div>
                                                    <div class="user-progress">
                                                        <small class="fw-semibold">82.5k</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <img src="{{ asset('https://tadawy-production.up.railway.app/assets/img/icons/unicons/artificial-intelligence (1).png') }}"
                                                        alt="User" class="rounded" />
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">AI assistant</h6>
                                                        <small class="text-muted">Dignostic</small>
                                                    </div>
                                                    <div class="user-progress">
                                                        <small class="fw-semibold">20k</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <img src="{{ asset('https://tadawy-production.up.railway.app/assets/img/icons/unicons/incubator - Copy.png') }}"
                                                        alt="User" class="rounded" />
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Baby Incubator</h6>
                                                        <small class="text-muted">temp,Heart</small>
                                                    </div>
                                                    <div class="user-progress">
                                                        <small class="fw-semibold">32</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <img src="{{ asset('https://tadawy-production.up.railway.app/assets/img/icons/unicons/health.png') }}"
                                                        alt="User" class="rounded" />
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Smart watch</h6>
                                                        <small class="text-muted">5000steps, </small>
                                                    </div>
                                                    <div class="user-progress">
                                                        <small class="fw-semibold">10.5k</small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/ Order Statistics -->

                            <!-- Expense Overview -->
                            <div class="col-md-6 col-lg-4 order-1 mb-4">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <ul class="nav nav-pills" role="tablist">
                                            <li class="nav-item">
                                                <div class="nav-link active" role="tab"
                                                    data-bs-toggle="tab" data-bs-target="#navs-tabs-line-card-income"
                                                    aria-controls="navs-tabs-line-card-income" aria-selected="true">
                                                    Income
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <div class="card-body px-0">
                                        <div class="tab-content p-0">
                                            <div class="tab-pane fade show active" id="navs-tabs-line-card-income"
                                                role="tabpanel">
                                                <div class="d-flex p-4 pt-3">
                                                    <div class="avatar flex-shrink-0 me-3">
                                                        <img src="{{ asset('https://tadawy-production.up.railway.app/assets/img/icons/unicons/wallet.png') }}"
                                                            alt="User" />
                                                    </div>
                                                    <div>
                                                        <small class="text-muted d-block">Total Balance</small>
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="mb-0 me-1">$459.10</h6>
                                                            <small class="text-success fw-semibold">
                                                                <i class="bx bx-chevron-up"></i>
                                                                42.9%
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="incomeChart"></div>
                                                <div class="d-flex justify-content-center pt-4 gap-2">
                                                    <div class="flex-shrink-0">
                                                        <div id="expensesOfWeek"></div>
                                                    </div>
                                                    <div>
                                                        <p class="mb-n1 mt-1">Expenses This Week</p>
                                                        <small class="text-muted">$39 less than last week</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Expense Overview -->

                            <!-- Clinics -->
                            <div class="col-md-6 col-lg-4 order-2 mb-4">
                                <div class="card h-100">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h5 class="card-title m-0 me-2">Clinics</h5>

                                    </div>
                                    <div class="card-body">
                                        <ul class="p-0 m-0">
                                            @foreach ($allClinics as $clinic)
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <img src="{{ $clinic->photo }}"
                                                        alt="User" class="rounded" />
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <small class="mb-0">{{ $clinic->name }}</small>
                                                    </div>
                                                    <div class="user-progress d-flex align-items-center gap-1">
                                                        <span class="badge bg-label-primary">
                                                            <small class="mb-0">{{ Doctor::where("clinic_id",$clinic->id)->count() }} Doctor's</small>
                                                        </span>
                                                        <span class="badge bg-label-primary ">
                                                            <small class="mb-0">{{ Patient::where("clinic_id",$clinic->id)->count() }} Patient's</small>
                                                        </span>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="pagination mt-3" style="display: flex; justify-content: center;">
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination">
                                                <li class="page-item {{ $allClinics->previousPageUrl() ? '' : 'disabled' }}">
                                                    <a class="page-link" href="{{ $allClinics->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
                                                </li>
                                                @foreach ($allClinics->getUrlRange(1, $allClinics->lastPage()) as $page => $url)
                                                    <li class="page-item {{ $page == $allClinics->currentPage() ? 'active' : '' }}"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                                @endforeach
                                                <li class="page-item {{ $allClinics->nextPageUrl() ? '' : 'disabled' }}">
                                                    <a class="page-link" href="{{ $allClinics->nextPageUrl() }}">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!--/ Transactions -->
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , made with ❤️ by
                                <a href="" target="_blank" class="footer-link fw-bolder">MIESAQ Team</a>
                            </div>

                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('https://tadawy-production.up.railway.app/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('https://tadawy-production.up.railway.app/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('https://tadawy-production.up.railway.app/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('https://tadawy-production.up.railway.app/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('https://tadawy-production.up.railway.app/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('https://tadawy-production.up.railway.app/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('https://tadawy-production.up.railway.app/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('https://tadawy-production.up.railway.app/assets/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
