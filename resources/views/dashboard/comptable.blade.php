@extends('layouts.template')
@section('content')
    @if (Session::has('success'))
        <script>
            toastr.options = {
                "progressBar": true,
            };
            toastr.success("{{ session::get('success') }}");
        </script>
    @endif

    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Students</h6>
                                    <h3>50055</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{ asset('images/icon/dash-icon-01.svg') }}" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Awards</h6>
                                    <h3>50+</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{ asset('images/icon/dash-icon-02.svg') }}" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Department</h6>
                                    <h3>30+</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{ asset('images/icon/dash-icon-03.svg') }}" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Revenue</h6>
                                    <h3>$505</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{ asset('images/icon/dash-icon-04.svg') }}" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="row">
                <div class="col-lg-8 mb-4 order-0">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                                    <p class="mb-4">
                                        You have done <span class="fw-bold">72%</span> more sales today. Check your new
                                        badge in
                                        your profile.
                                    </p>

                                    <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                                </div>
                            </div>
                            <div class="col-sm-5 text-center text-sm-left">
                                <div class="card-body pb-0 px-0 px-md-4">
                                    <img src="{{ asset('images/invoice_951764.png') }}" height="160" alt="View Badge User"
                                        data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                        data-app-light-img="illustrations/man-with-laptop-light.png">
                                        
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 order-1">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                        <div
                                            class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                            <div class="card-title">
                                                <h5 class="text-nowrap mb-2">Profile Report</h5>
                                                <br>
                                                <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                                            </div>
                                            <div class="mt-sm-auto">
                                                <small class="text-success text-nowrap fw-semibold"><i
                                                        class="bx bx-chevron-up"></i>
                                                    68.2%</small>
                                                <br>    
                                                <h3 class="mb-0">$84,686k</h3>
                                            </div>
                                        </div>
                                        <br>
                                        <div id="profileReportChart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Total Revenue -->
                <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
                    <div class="card">
                        <div class="row row-bordered g-0">
                            <div class="col-md-8">
                                <h5 class="card-header m-0 me-2 pb-3">Total de Rémuneration</h5>
                                <div id="totalRevenueChart" class="px-2"></div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <div class="text-center">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button"
                                                id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                2023
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">

                                                <a class="dropdown-item" href="javascript:void(0);">2022</a>
                                                <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                                <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                                <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="growthChart"></div>
                                <div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>

                                <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <span class="badge bg-label-primary p-2"><i
                                                    class="bx bx-dollar text-primary"></i></span>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <small>2022</small>
                                            <h6 class="mb-0">$32.5k</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <span class="badge bg-label-info p-2"><i
                                                    class="bx bx-wallet text-info"></i></span>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <small>2021</small>
                                            <h6 class="mb-0">$41.2k</h6>
                                        </div>
                                    </div>
                                </div>
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
                                <h5 class="m-0 me-2">Statistique d'étudiant</h5>
                                
                            </div>
                            
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex flex-column align-items-center gap-1">
                                    <h2 class="mb-2">500 </h2>
                                    <span>étudiants</span>
                                </div>
                                <div id="orderStatisticsChart"></div>
                            </div>
                            <ul class="p-0 m-0">
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-primary"><i
                                                class="bx bx-mobile-alt"></i></span>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Electronic</h6>
                                            <small class="text-muted">Mobile, Earbuds, TV</small>
                                        </div>
                                        <div class="user-progress">
                                            <small class="fw-semibold">82.5k</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-success"><i
                                                class="bx bx-closet"></i></span>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Fashion</h6>
                                            <small class="text-muted">T-shirt, Jeans, Shoes</small>
                                        </div>
                                        <div class="user-progress">
                                            <small class="fw-semibold">23.8k</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-info"><i
                                                class="bx bx-home-alt"></i></span>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Decor</h6>
                                            <small class="text-muted">Fine Art, Dining</small>
                                        </div>
                                        <div class="user-progress">
                                            <small class="fw-semibold">849k</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-secondary"><i
                                                class="bx bx-football"></i></span>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Sports</h6>
                                            <small class="text-muted">Football, Cricket Kit</small>
                                        </div>
                                        <div class="user-progress">
                                            <small class="fw-semibold">99</small>
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
                            <div class="card-title mb-0">
                                <h5 class="m-0 me-2">Statistique des professeurs</h5>
                                <br>
                                <div class="d-flex flex-column align-items-center gap-1">
                                    <h2 class="mb-2">150 </h2>
                                    <span>professeurs</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0">
                            <div class="tab-content p-0">
                                <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                                    
                                    <div id="incomeChart"></div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Expense Overview -->

                <!-- Transactions -->
                <div class="col-md-6 col-lg-4 order-2 mb-4">
                    <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0 me-2">Transactions</h5>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="p-0 m-0">
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="../assets/img/icons/unicons/paypal.png" alt="User"
                                            class="rounded" />
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <small class="text-muted d-block mb-1">Paypal</small>
                                            <h6 class="mb-0">Send money</h6>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h6 class="mb-0">+82.6</h6>
                                            <span class="text-muted">USD</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="../assets/img/icons/unicons/wallet.png" alt="User"
                                            class="rounded" />
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <small class="text-muted d-block mb-1">Wallet</small>
                                            <h6 class="mb-0">Mac'D</h6>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h6 class="mb-0">+270.69</h6>
                                            <span class="text-muted">USD</span>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
