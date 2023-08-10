<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('template/') }}" data-template="vertical-menu-template-free">

<head>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
        <title>Document</title>
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('images/invoice_951764.png') }}" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet" />
        <!-- Icons. Uncomment required icon fonts -->
        <link rel="stylesheet" href="{{ asset('template/vendor/fonts/boxicons.css') }}" />
        <!-- Core CSS -->
        <link rel="stylesheet" href="{{ asset('template/vendor/css/core.css') }}"
            class="template-customizer-core-css" />
        <link rel="stylesheet" href="{{ asset('template/vendor/css/theme-default.css') }}"
            class="template-customizer-theme-css" />
        <link rel="stylesheet" href="{{ asset('template/css/demo.css') }}" />
        <!-- Vendors CSS -->
        <link rel="stylesheet" href="{{ asset('template/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
        <link rel="stylesheet" href="{{ asset('template/vendor/libs/apex-charts/apex-charts.css') }}" />
        <!-- Page -->
        <link rel="stylesheet" href="{{ asset('template/vendor/css/pages/page-misc.css') }}" />

        <!-- Page auth -->
        <link rel="stylesheet" href="{{ asset('template/vendor/css/pages/page-auth.css') }}" />
        {{-- message toastr --}}
        <link rel="stylesheet" href="{{ asset('template/css/toastr.min.css') }}">
        <script src="{{ asset('template/js/toastr_jquery.min.js') }}"></script>
        <script src="{{ asset('template/js/toastr.min.js') }}"></script>
    </head>

<body>

    @yield('content')


    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('template/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('template/js/config.js') }}"></script>

    <script src="{{ asset('template/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('template/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('template/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('template/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('template/vendor/js/menu.js') }}"></script>
    <!-- Vendors JS -->
    <script src="{{ asset('template/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('template/js/main.js') }}"></script>
    <!-- Page JS -->
    <script src="{{ asset('template/js/dashboards-analytics.js') }}"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>


</body>

</html>
