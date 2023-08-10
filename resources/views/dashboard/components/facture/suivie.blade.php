@extends('layouts.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Suivie de Facture</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card p-3">
            <h5 class="card-header badge bg-info fs-4">Suivie de Facture</h5>
            <div class="table-responsive text-nowrap">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr class="bg-primary">
                            <th class="text-white fs-7">ID</th>
                            <th class="text-white fs-7">Nom</th>
                            <th class="text-white fs-7">Prenom</th>
                            <th class="text-white fs-7">Montant</th>
                            <th class="text-white fs-7">Status</th>
                            <th class="text-white fs-7">Facturer</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profs as $prof)
                            <tr>
                                <td>{{ $prof->id }}</td>
                                <td>{{ $prof->nom }}</td>
                                <td>{{ $prof->prenom }}</td>
                                <td>{{ $prof->solde_actuelle }} </td>
                                <td><span class="badge bg-success">Payé</span></td>
                                <td>
                                    <a class="text-secondary"
                                        href="{{ route('facture.facturation', ['id' => $prof->id]) }}"><i
                                            class="bx bx-info-circle"></i></a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
