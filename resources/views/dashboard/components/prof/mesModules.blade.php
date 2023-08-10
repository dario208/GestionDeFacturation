@extends('layouts.template')
@section('content')
    <div class="container mt-4">
        <div class="row mb-5">
            @foreach ($modules as $module)
                <div class="col-md-6 col-lg-4">
                    <div class="card text-center mb-3">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">{{ $module->nom }}</h4>
                            <p class="card-text">{{ $module->classe->niveau }}</p>
                            <h5 class="card-text"><span>20</span>/<span>{{ $module->heure_globale }}</span></h5>
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
@endsection
