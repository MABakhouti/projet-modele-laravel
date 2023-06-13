<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assetsBackEnd/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assetsBackEnd/img/favicon.png">
    <title>
        Soft UI Dashboard by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assetsBackEnd/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assetsBackEnd/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assetsBackEnd/css/nucleo-svg.css" rel="stylesheet') }}" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assetsBackEnd/css/soft-ui-dashboard.css?v=1.0.7') }}" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="g-sidenav-show bg-gray-100">
    <!-- SideNav -->
    @include('layouts.sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('layouts.navigation')

        <div class="font-sans antialiased">
            <div class="">
                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
            @stack('modals')

            @include('layouts.footer')
        </div>

    </main>
    <!--   Core JS Files   -->
    <script src="../assetsBackEnd/js/core/popper.min.js"></script>
    <script src="../assetsBackEnd/js/core/bootstrap.min.js"></script>
    <script src="../assetsBackEnd/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assetsBackEnd/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../assetsBackEnd/js/plugins/chartjs.min.js"></script>

</body>

</html>
