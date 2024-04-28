<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Vite-generated CSS -->

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
    <link rel="stylesheet" href="{{ asset('https://tadawy-production.up.railway.app/dist/css/app.css') }}">

    <!-- Vite-generated JavaScript -->
    <script type="module" src="{{ asset('https://tadawy-production.up.railway.app/dist/js/app.js') }}"></script>
</head>
<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div>
            <a href="/">
                 <img src="{{ asset('https://tadawy-production.up.railway.app/assets/img/icons/unicons/logo.png') }}" class="w-40 h-40 fill-current text-gray-500" />
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
    <script src="{{ asset('https://tadawy-production.up.railway.app/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('https://tadawy-production.up.railway.app/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('https://tadawy-production.up.railway.app/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('https://tadawy-production.up.railway.app/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('https://tadawy-production.up.railway.app/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('https://tadawy-production.up.railway.app/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('https://tadawy-production.up.railway.app/assets/js/pages-account-settings-account.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>


</body>
</html>
