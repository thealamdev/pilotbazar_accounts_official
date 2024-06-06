<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} | {{ $title ?? 'Home' }}</title>
    <meta name="description" content="Pilot Bazar Accounts Application" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Daterangepicker CSS -->
    <link href="{{ asset('assets/css/daterangepicker.css') }}" rel="stylesheet" type="text/css" />

    <!-- Data Table CSS -->
    <link href="{{ asset('assets/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Boostrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Font awesome CSS -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Dripicons CSS -->
    <link href="{{ asset('assets/css/dripicons.css') }}" rel="stylesheet" type="text/css" />

    <!-- Animate CSS !-->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css" />

    <!-- Line Awesome CSS !-->
    <link href="{{ asset('assets/css/line-awesome.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Prism CSS !-->
    <link href="{{ asset('assets/css/prism.css') }}" rel="stylesheet" type="text/css" />

    <!-- Simple sidebar CSS !-->
    <link href="{{ asset('assets/css/simplebar.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Owl carousel CSS !-->
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Owl theme default CSS !-->
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Font awesome cdn !-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    @stack('css')
    @livewireStyles
</head>

<body>

    <div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple">
        @include('livewire.hooks.navbar')
        @include('livewire.hooks.sidebar')

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <div class="container-xxl">
                {{ $slot }}
            </div>
            @include('livewire.hooks.footer')
        </div>
        <!-- /Main Content -->
    </div>

    @livewireScripts
    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- FeatherIcons JS -->
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('assets/js/dropdown-bootstrap-extended.js') }}"></script>

    <!-- Simplebar JS -->
    <script src="{{ asset('assets/js/simplebar.min.js') }}"></script>

    <!-- Data Table JS -->
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.select.min.js') }}"></script>

    <!-- Daterangepicker JS -->
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/js/daterangepicker-data.js') }}"></script>

    <!-- Amcharts Maps JS -->
    <script src="{{ asset('assets/js/core.js') }}"></script>
    <script src="{{ asset('assets/js/maps.js') }}"></script>
    <script src="{{ asset('assets/js/worldHigh.js') }}"></script>
    <script src="{{ asset('assets/js/worldLow.js') }}"></script>

    <script src="{{ asset('assets/js/animated.js') }}"></script>

    <!-- Apex JS -->
    <script src="{{ asset('assets/js/apexcharts.min.js') }}"></script>

    <!-- Init JS -->
    <script src="{{ asset('assets/js/init.js') }}"></script>
    <script src="{{ asset('assets/js/chips-init.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard-data.js') }}"></script>
    @stack('js')

</body>

</html>
