@extends('layouts.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span>Historique</h4>

        <div class="card">
            <h5 class="card-header">Responsive Table</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr class="text-nowrap">
                            <th>Date</th>
                            <th>H-Début</th>
                            <th>H-Fin</th>
                            <th>Tolal-H</th>
                        </tr>


                    </thead>
                    <tbody>
                        @foreach ($historiques as $historique)
                            <tr>
                                <td>{{ $historique->date }}</td>
                                <td>{{ $historique->heure_de_debut }}</td>
                                <td>{{ $historique->heure_de_fin }}</td>
                                <td>{{ $historique->total_heure }}</td>
                            </tr>

                           
                        @endforeach
                    </tbody>
                </table>
            </div>

 
                   


        </div>

    </div>
@endsection
