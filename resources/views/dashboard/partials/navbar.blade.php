<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Rechercher..."
                    aria-label="Search..." />
            </div>
        </div>
        <!-- /Search -->

        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Place this tag where you want the button to render. -->
            <li class="nav-item lh-1 me-3">

            </li>

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    @if (auth()->check())
                        <div class="fw-bolder"> {{ auth()->user()->name }}
                            @if (Auth::user()->type == 'admin')
                                <img src="{{ asset('images/secretaire.png') }}" alt="Dashboard Icon" width="50px"
                                    height="50px">
                            @elseif(Auth::user()->type == 'comptable')
                                <img src="{{ asset('images/compta.png') }}" alt="Dashboard Icon" width="50px"
                                    height="50px">
                            @elseif(Auth::user()->type == 'prof')
                                <img src="{{ asset('images/prof.png') }}" alt="Dashboard Icon" width="50px"
                                    height="50px">
                            @endif
                        </div>
                    @endif
                </a>
                <ul class="dropdown-menu dropdown-menu-end">

                    @auth
                        @if (auth()->user()->type == 'prof')
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="bx bx-user me-2"></i>
                                    <span class="align-middle">Mon Profil</span>
                                </a>
                            </li>
                        @endif
                    @endauth

                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bx bx-cog me-2"></i>
                            <span class="align-middle">Paramètre</span>
                        </a>
                    </li>

                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="bx bx-power-off me-2"></i>
                            <span class="align-middle">Deconnexion</span>
                        </a>
                        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </li>

                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>
