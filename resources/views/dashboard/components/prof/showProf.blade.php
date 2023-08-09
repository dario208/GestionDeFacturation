@extends('layouts.template')
@section('content')
    <div class="container mt-4">

        <div class="text-center">
            <h3>Details du Professeur</h3>
        </div>

        <ul class="list-group list-group-light">
            <li class="list-group-item px-3 border-0 rounded-3 list-group-item-info  mb-2 fw-bold">ID: <span
                    class="fw-normal ms-3">{{ $prof->id }}</span></li>
            <li class="list-group-item px-3 border-0 rounded-3 list-group-item-info  mb-2 fw-bold">Nom: <span
                    class="fw-normal ms-3">{{ $prof->nom }}</span></li>
            <li class="list-group-item px-3 border-0 rounded-3 list-group-item-secondary mb-2 fw-bold">Prenom: <span
                    class="fw-normal ms-3">{{ $prof->prenom }}</span></li>
            <li class="list-group-item px-3 border-0 rounded-3 list-group-item-success mb-2 fw-bold">E-mail: <span
                    class="fw-normal ms-3">{{ $prof->user->email }}</span></li>
            <li class="list-group-item px-3 border-0 rounded-3 list-group-item-danger mb-2 fw-bold">Telephone: <span
                    class="fw-normal ms-3">{{ $prof->telephone }}</span></li>
        </ul>

        <div class="text-center mt-4">
            <h3>Module enseignée</h3>
        </div>

        <div class="row mb-5">
            @foreach ($prof->modules as $module)
                <div class="col-md-6 col-lg-4">
                    <div class="card text-center mb-3">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">{{ $module->nom }}</h4>
                            <p class="card-text">{{ $module->classe->niveau }}</p>
                            <h5 class="card-text"><span>20</span>/<span>{{ $module->heure_globale }}</span></h5>
                            <a href="{{ route('module.historique') }}" class="btn btn-secondary">Historique</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
