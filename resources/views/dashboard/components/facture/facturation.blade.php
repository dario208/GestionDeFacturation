@extends('layouts.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Facturation</h4>

        <div class="card">
            <div class="card-body">
                <div class="container mb-5 mt-3">
                    <div class="row d-flex align-items-baseline">

                        <div class="col-xl-3 float-end">
                            <a href="{{ route('facture.print', ['id' => $prof->id]) }}"
                                class="printPage btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark">
                                <i class='bx bx-printer' style='color:#388ff9'></i>
                                Print
                            </a>
                            <a class="btn btn-light text-capitalize" data-mdb-ripple-color="dark"><i class='bx bxs-file-pdf'
                                    style='color:#f96262'></i> Export</a>
                        </div>
                        <hr>
                    </div>

                    <div class="container">
                        <form method="post"
                            action="{{ route('facture.store', ['montant' => $prof->solde_actuelle, 'prof_id' => $prof->id]) }}">
                            @csrf
                            <div class="row">
                                <div class="col-xl-8">
                                    <ul class="list-unstyled">
                                        <li class="text-muted">A: <span style="color:#5d9fc5 ;">{{ $prof->prenom }}</span>
                                        </li>
                                        <li class="text-muted">{{ $prof->user->email }}</li>
                                        <li class="text-muted"><i class="fas fa-phone"></i>{{ $prof->telephone }}</li>
                                    </ul>
                                </div>
                                <div class="col-xl-4">
                                    <ul class="list-unstyled">
                                        <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                                class="fw-bold">ID:</span>{{ $prof->id }}</li>
                                        <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                                class="fw-bold">Creation Date: </span></li>
                                        <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                                class="me-1 fw-bold">Status:</span><span
                                                class="badge bg-warning text-black fw-bold">
                                                Unpaid</span></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row my-2 mx-1 justify-content-center">
                                <table class="table table-striped table-borderless">
                                    <thead style="background-color:#84B0CA ;" class="text-white">
                                        <tr>
                                            <th scope="col">Module</th>
                                            <th scope="col">Niveau</th>
                                            <th scope="col">H-Globale</th>
                                            <th scope="col">cout horaire</th>
                                            <th scope="col">Montant</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($prof->modules as $module)
                                            <tr>
                                                <th scope="row">{{ $module->nom }}</th>
                                                <td>{{ $module->classe->niveau }}</td>
                                                <td>{{ $module->heure_globale }}</td>
                                                <td>{{ $module->tarif->cout_horaire }}</td>
                                                <td>{{ $module->montant_total }}</td>
                                            </tr>
                                        @endforeach

                                    </tbody>

                                </table>
                            </div>
                            <div class="row">
                                <div class="col-xl-8"></div>


                                <div class="col-xl-3">

                                    <p class="text-black float-start"><span class="text-black me-3"> Total
                                            Montant</span><span
                                            style="font-size: 25px;">{{ $prof->solde_actuelle }}</span>MGA</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-xl-10"> </div>

                                <div class="col-xl-2">
                                    <button type="submit" type="button" class="btn btn-primary text-capitalize"
                                        style="background-color:#60bdf3 ;">Pay Now</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
