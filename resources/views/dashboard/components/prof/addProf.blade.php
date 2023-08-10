@extends('layouts.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Enregistrement de Professeur</h4>
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-4">Professeur</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Nom</label>
                                <input type="text" class="form-control" name="nom" id="nom"
                                    placeholder="Entrez votre nom" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Prenom</label>
                                <input type="text" class="form-control" name="prenom" id="prenom"
                                    placeholder="Entrez votre prénom" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-phone">Téléphone</label>
                                <input type="text" name="telephone" id="telephone" class="form-control phone-mask"
                                    placeholder="+261 32 00 000 00" />
                            </div>
                    </div>
                </div>
            </div>

            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header text-center">
                        <h5 class="mb-4">Registration</h5>
                    </div>

                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Nom complet</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-user"></i></span>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="John Doe" aria-label="John Doe"
                                    aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-email">E-mail</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="john.doe" aria-label="john.doe"
                                    aria-describedby="basic-icon-default-email2" />
                                <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-phone">Mot de passe</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text"><i
                                        class="bx bx-lock-alt"></i></span>
                                <input type="password" name="password" id="password" class="form-control phone-mask"
                                    placeholder="***********" aria-label="658 799 8941"
                                    aria-describedby="basic-icon-default-phone2" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-start">
            <button type="submit" class="btn btn-dark">Envoyer</button>
        </div>
        </form>
    </div>
    </div>
@endsection
