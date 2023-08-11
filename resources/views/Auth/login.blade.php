@extends('layouts.app')
@section('content')
    @if (Session::has('error'))
        <script>
            toastr.options = {
                "progressBar": true,
            };
            toastr.error("{{ session::get('error') }}");
        </script>
    @endif
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="#" class="app-brand-link">
                                <span class="app-brand-logo demo">
                                    <img class="img-fluid"
                                        src="{{ asset('images/Capture_d_écran__6_-removebg-preview.png') }}"
                                        alt=""style="width: 40px; height: 40px;">
                                </span>
                                <span class="app-brand-text demo menu-text fw-bolder ms-1 text-uppercase text-lead"
                                    style="font-size: 23px; color:rgb(86, 86, 86)">DENARIAN</span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="text" class="form-control" name="email" id="email"
                                    placeholder="Entrez votre E-mail" autofocus />
                            </div>

                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Mot de passe</label>
                                    <a href="#">
                                        <small>Mot de passe oublié?</small>
                                    </a>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-5"></div>


                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Connexion</button>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>

    <!-- / Content -->
@endsection
