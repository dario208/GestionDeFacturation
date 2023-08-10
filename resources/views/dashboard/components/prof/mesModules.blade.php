@extends('layouts.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Mes Modules </h4>
        
        <div class="container mt-4">
            <div class="row mb-5">
                @foreach ($modules as $module)
                    <div class="col-md-6 col-lg-4">
                        <div class="card text-center mb-3">
                            <div class="card-body">
                                <h4 class="card-title fw-bold">{{ $module->nom }}</h4>
                                <p class="card-text">{{ $module->classe->niveau }}</p>
                                <h5 class="card-text"><span>{{ $module->historiques->sum('total_heure') }}</span>h sur <span>{{ $module->heure_globale }}</span></h5>
                                <a href="{{ route('historique.liste', ['id' => $module->id]) }}"
                                    class="btn btn-secondary">Historique</a>
                                <a href="{{ route('historique.saisie', ['id' => $module->id]) }}"
                                    class="btn btn-success">Enregistrer</a>

                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
