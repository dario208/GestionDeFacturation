@extends('layouts.app2')
@section('content')
    <main>
        <!-- Header Start -->
        <header>
            <nav class="nav container">
                <div class="app-brand demo">
                    <a href="#" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="{{ asset('images/Capture_d_écran__6_-removebg-preview.png') }}"
                                alt=""style="width: 40px; height: 40px; margin-bottom:-9px">
                        </span>
                        <span class="app-brand-text demo menu-text fw-bold ms-1 text-uppercase text-lead"
                            style="font-size: 23px; font-weight: 600">DENARIAN</span>
                    </a>
                </div>

                <ul class="menu_items">
                    <img src="{{ asset('images/times.svg') }}" alt="timesicon" id="menu_toggle" />
                    <li><a href="#" class="nav_link">Accueil</a></li>
                    <li><a href="#" class="nav_link">A propos </a></li>
                    <li><a href="#" class="nav_link">Service</a></li>
                    <li><a href="#" class="nav_link">Contact</a></li>
                </ul>
                <img src="{{ asset('images/bars.svg') }}" alt="timesicon" id="menu_toggle" />
            </nav>
        </header>
        <!-- Header End -->

        <!-- Hero Start -->
        <section class="hero">
            <div class="row container">
                <div class="column">
                    <h2>projet est <span></span></h2>
                    <p>Créez instantanément des factures détaillées, suivez les paiements en direct et adaptez facilement
                        les
                        tarifs. Simplifiez la gestion financière pour vous concentrer sur l'épanouissement des élèves et des
                        enseignants.</p>
                    @if (Route::has('login'))
                        <div class="buttons">
                            @auth
                                @if (Auth::user()->type == 'admin')
                                    <a href="{{ route('dashboard.Admin') }}" class="btn">Dashboard</a>
                                @elseif (Auth::user()->type == 'comptable')
                                    <a href="{{ route('dashboard.Comptable') }}" class="btn">Dashboard</a>
                                @elseif (Auth::user()->type == 'prof')
                                    <a href="{{ route('dashboard.Prof') }}" class="btn">Dashboard</a>
                                @endif
                            @else
                                <a href="{{ route('login') }}" class="btn">Connexion</a>
                            @endauth
                        </div>
                    @endif

                </div>
                <div class="column">
                    <img src="{{ asset('images/login.png') }}" alt="heroImg" class="hero_img" />
                </div>
            </div>
            <img src="{{ asset('images/bg-bottom-hero.png') }}" alt="" class="curveImg" />
        </section>
        <!-- Hero End-->
    </main>
@endsection
