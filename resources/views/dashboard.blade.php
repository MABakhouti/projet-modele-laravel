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

        <nav class="navbar navbar-main navbar-expand-lg px-0 ms-2 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                                href="{{ url('admin/dashboard') }}">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Dashboard</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 " id="navbar">
                    <div class="ms-auto d-flex align-items-center">
                        <a href="{{ url('admin/post/add') }}" class="btn bg-gradient-primary me-4 ">Add New Post</a>
                        <a href="{{ url('admin/category/add') }}" class="btn bg-gradient-primary">Add New Category</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Posts</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            {{ $num_of_posts }}
                                            <?php
                                            $total_posts_week_ago = $totals_weeks_ago[0]->total_posts_week_ago;
                                            $up_by = ($total_posts_week_ago/100)*$num_of_posts
                                        ?>
                                            <span class="text-success text-sm font-weight-bolder">+ {{$up_by}}%</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Comments</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            {{ $num_of_comments }}
                                            <?php
                                            $total_comments_week_ago = $totals_weeks_ago[0]->total_comments_week_ago;
                                            $up_by = ($total_comments_week_ago/100)*$num_of_comments
                                        ?>
                                            <span class="text-success text-sm font-weight-bolder">+ {{$up_by}}%</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Replies</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            {{ $num_of_replies }}
                                            <?php
                                            $total_replies_week_ago = $totals_weeks_ago[0]->total_replies_week_ago;
                                            $up_by = ($total_replies_week_ago/100)*$num_of_replies
                                        ?>
                                            <span class="text-success text-sm font-weight-bolder">+ {{$up_by}}%</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Categories</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            {{ $num_of_categories }}
                                            <?php
                                            $total_categories_week_ago = $totals_weeks_ago[0]->total_categories_week_ago;
                                            $up_by = ($total_categories_week_ago/100)*$num_of_categories
                                        ?>
                                            <span class="text-success text-sm font-weight-bolder">+ {{$up_by}}%</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <x-admin.footer /> --}}
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
