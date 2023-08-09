@extends('layouts.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span>Historique</h4>

        <div class="container mt-5">
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>H-Début</th>
                        <th>H-Fin</th>
                        <th>Tolal-H</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($historiques as $historique)
                        <tr>
                            <td>{{$historique->date}}</td>
                            <td>{{$historique->heure_de_debut}}</td>
                            <td>{{$historique->heure_de_fin}}</td>
                            <td>{{$historique->total_heure}}</td>
                        </tr>
 
                    @endforeach
                    
                    <tr>

                        <td colspan="3"class="borderless"></td>
                        <td><span>{{$heure_effectue}} heures </span> sur <span>{{$heure_globale}}</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection
