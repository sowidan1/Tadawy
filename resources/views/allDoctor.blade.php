<?php
use App\Models\Patient;
?>
<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('assets/') }}" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>TADAWY</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/icons/unicons/logo.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
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
                                href="{{ asset('assets/img/icons/unicons/logo.png') }}" />
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
                                <img src="{{ asset('assets/img/icons/unicons/logo.png') }}" alt="LOGO"
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

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Striped Rows -->
                                <div class="card">
                                    <h5 class="card-header">All Patient</h5>
                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Doctor Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Number Of Patient</th>
                                                    <th>Specialty</th>
                                                    <th>Clinic Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                @foreach ($doctors as $doctor)
                                                    <tr>
                                                        <td>{{ $doctor->id }}</td>
                                                        <td><i class="fab fa-angular fa-lg text-danger "></i>
                                                            <strong>{{ $doctor->name }}</strong>
                                                        </td>
                                                        <td>{{ $doctor->email }}</td>
                                                        <td>{{ $doctor->phone }}</td>
                                                        <td>
                                                            <form action="" <input type="hidden"
                                                                name="count_patient">
                                                                <button class="btn rounded-pill btn-primary">Have
                                                                    {{ Patient::where('doctor_id', $doctor->id)->count() }}
                                                                    Patient's</button>
                                                            </form>
                                                        </td>
                                                        <td>{{ $doctor->specialty }}</td>
                                                        <td>{{ App\Models\Clinic::findOrFail($doctor->clinic_id)->name }}
                                                        </td>
                                                        <td>
                                                            <form action="{{ route('doctors.delete') }}"
                                                                method="post">
                                                                @csrf
                                                                <input type="hidden" name="doctor_id"
                                                                    value="{{ $doctor->id }}">
                                                                <button type="submit"
                                                                    class="btn rounded-pill btn-danger">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>

                                        </table>

                                    </div>
                                </div>
                                <div class="pagination mt-3" style="display: flex; justify-content: center;">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination">
                                            <li class="page-item {{ $doctors->previousPageUrl() ? '' : 'disabled' }}">
                                                <a class="page-link" href="{{ $doctors->previousPageUrl() }}"
                                                    tabindex="-1" aria-disabled="true">Previous</a>
                                            </li>
                                            @foreach ($doctors->getUrlRange(1, $doctors->lastPage()) as $page => $url)
                                                <li
                                                    class="page-item {{ $page == $doctors->currentPage() ? 'active' : '' }}">
                                                    <a class="page-link"
                                                        href="{{ $url }}">{{ $page }}</a></li>
                                            @endforeach
                                            <li class="page-item {{ $doctors->nextPageUrl() ? '' : 'disabled' }}">
                                                <a class="page-link" href="{{ $doctors->nextPageUrl() }}">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!--/ Striped Rows -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Content -->

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
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
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/pages-account-settings-account.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>




</body>

</html>
