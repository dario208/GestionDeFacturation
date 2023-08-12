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
                                    <h6>Nos professeurs</h6>
                                    <h3>{{$total_profs}}</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{ asset('images/proff.png') }}" alt="Dashboard Icon"  height="80px" width="80px">
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
                                    <h6>Facture payé</h6>
                                    <h3>{{session('countPayees')}}</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{ asset('images/facture.png') }}" alt="Dashboard Icon" height="80px" width="80px">
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
                                    <h6>Facture en attente</h6>
                                    <h3>{{session('countEnAttente')}}</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{ asset('images/invoice_951764.png') }}" alt="Dashboard Icon"  height="80px" width="80px">
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
                                    <h6>Departement</h6>
                                    <h3>3</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{ asset('images/departement.png') }}" alt="Dashboard Icon" height="80px" width="80px">
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
                                    <h5 class="card text-primary"><span class="badge bg-success fs-5">Bienvenue!</h5>
                                    <p class="mb-4">
                                        Nous vous souhaitons la bienvenue dans votre espace de travail ! 🌟.
                                    </p>

                                    <a href="javascript:;" class="btn btn-sm btn-outline-warning">Voir onglets</a>
                                </div>
                            </div>
                            <div class="col-sm-5 text-center text-sm-left">
                                <div class="card-body pb-0 px-0 px-md-4">
                                    <img src="{{ asset('images/teachers.png') }}" height="160" alt="View Badge User"
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
                                        <div class="card-body">
                                            <h5 class="card text-primary">Google Agenda</h5>
                                            <a href="https://www.google.com/calendar/render?action=TEMPLATE" target="_blank" class="btn btn-sm btn-outline-warning">Agenda</a>
                                        </div>
                                        <div class="card-body pb-0 px-0 px-md-4">
                                            <img src="{{ asset('images/google.png') }}" height="130 px" width="130px" alt="View Badge User"
                                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                                data-app-light-img="illustrations/man-with-laptop-light.png">
                                        </div>
                                        <br>
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
                                <h5 class="card-header m-0 me-2 pb-3">Statistique de facturation</h5>
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
                                

                                
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <!--/ Total Revenue -->
                <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">


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
                                    <h2 class="mb-2">500</h2>
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
                                            <h6 class="mb-0">Reussite</h6>
                                            
                                        </div>
                                        <div class="user-progress">
                                            <small class="fw-semibold">480</small>
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
                                            <h6 class="mb-0">Explusion</h6>
                                            
                                        </div>
                                        <div class="user-progress">
                                            <small class="fw-semibold">5</small>
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
                                            <h6 class="mb-0">Redoublant</h6>
                                            
                                        </div>
                                        <div class="user-progress">
                                            <small class="fw-semibold">15</small>
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
                            
                        </div>
                        <div class="card-body">
                            <ul class="p-0 m-0">
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src={{"images/bni.png"}} alt="User"
                                            class="rounded" />
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <small class="text-muted d-block mb-1">BNI Madagascar</small>
                                            <h6 class="mb-0">Transactions</h6>
                                        </div>
                                        
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src={{"images/bfv.png"}} alt="User"
                                            class="rounded" />
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <small class="text-muted d-block mb-1">Societé Generale</small>
                                            <h6 class="mb-0">Transactions</h6>
                                        </div>
                                        
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src={{"images/boa.png"}} alt="User"
                                            class="rounded" />
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <small class="text-muted d-block mb-1">BOA</small>
                                            <h6 class="mb-0">Transactions</h6>
                                        </div>
                                        
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src={{"images/baobab.png"}} alt="User"
                                            class="rounded" />
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <small class="text-muted d-block mb-1">Baobab</small>
                                            <h6 class="mb-0">Transactions</h6>
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
