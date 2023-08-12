<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="#" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img class="img-fluid" src="{{ asset('images/Capture_d_écran__6_-removebg-preview.png') }}"
                    alt=""style="width: 40px; height: 40px;">
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-1 text-uppercase text-lead"
                style="font-size: 23px; color:rgb(86, 86, 86)">DENARIAN</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        @auth
            @if (Auth::user()->type == 'admin')
                <li class="menu-item {{ active(['dashboardAdmin']) }}">
                    <a href="{{ route('dashboard.Admin') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Tableau de bord</div>
                    </a>
                </li>
            @elseif(Auth::user()->type == 'comptable')
                <li class="menu-item {{ active(['dashboardComptable']) }}">
                    <a href="{{ route('dashboard.Comptable') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Tableau de bord</div>
                    </a>
                </li>
            @elseif(Auth::user()->type == 'prof')
                <li class="menu-item {{ active(['dashboardProf']) }}">
                    <a href="{{ route('dashboard.Prof') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Tableau de bord</div>
                    </a>
                </li>
            @endif
        @endauth
        @if (Auth::check() && Auth::user()->type === 'admin')
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Onglets</span>
            </li>
            <li class="menu-item {{ active_open(['prof/liste', 'prof/add']) }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-dock-top"></i>
                    <div data-i18n="Account Settings">Professeur</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ active(['prof/liste']) }}">
                        <a href="{{ route('prof.liste') }}" class="menu-link">
                            <div data-i18n="Account">Liste</div>
                        </a>
                    </li>
                    <li class="menu-item {{ active(['prof/add']) }}">
                        <a href="{{ route('prof.add') }}" class="menu-link">
                            <div data-i18n="Notifications">Ajout</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item {{ active_open(['module/liste', 'module/add']) }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-detail"></i>
                    <div data-i18n="Account Settings">Module</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ active(['module/liste']) }}">
                        <a href="{{ route('module.liste') }}" class="menu-link">
                            <div data-i18n="Account">Consulter</div>
                        </a>
                    </li>
                    <li class="menu-item {{ active(['module/add']) }}">
                        <a href="{{ route('module.add') }}" class="menu-link">
                            <div data-i18n="Notifications">Créer</div>
                        </a>
                    </li>
                </ul>
            </li>
        @elseif (Auth::check() && Auth::user()->type === 'comptable')
            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Onglets</span></li>
            <!-- Extended components -->
            <li class="menu-item {{ active_open(['facture/suivie', 'facture/facturation']) }}">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-copy"></i>
                    <div data-i18n="Extended UI">Facture</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ active(['facture/suivie']) }}">
                        <a href="{{ route('facture.suivie') }}" class="menu-link">
                            <div data-i18n="Perfect Scrollbar">Suivie</div>
                        </a>
                    </li>
                    {{-- <li class="menu-item {{ active(['facture/facturation']) }}">
                        <a href="{{ route('facture.facturation') }}" class="menu-link">
                            <div data-i18n="Text Divider">Facturation</div>
                        </a>
                    </li> --}}
                </ul>
            </li>
        @else
            <!-- Forms & Tables -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Onglets</span></li>
            <!-- Forms -->
            <li class="menu-item {{ active_open(['module/voir']) }} ">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-detail"></i>
                    <div data-i18n="Form Elements">Mes modules</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ active(['module/voir']) }}">
                        <a href="{{ route('module.showByProf') }}" class="menu-link">
                            <div data-i18n="Basic Inputs">liste</div>
                        </a>
                    </li>

                </ul>
            </li>
        @endif
    </ul>
</aside>
