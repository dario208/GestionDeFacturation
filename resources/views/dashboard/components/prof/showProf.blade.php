@extends('layouts.template')
@section('content')
    <div class="container">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-2 mb-4"><span class="text-muted fw-light"></span>Details du professeur</h4>
            <div class=" text-end mb-4">
                <a class="btn btn-warning" href="">Retour</a>
            </div>
            <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Professeur</h5>
                </div>
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <strong>ID:</strong> <span class="ms-3">{{ $prof->id }}</span>
                    </li>
                    <li class="list-group-item">
                      <strong>Nom:</strong> <span class="ms-3">{{ $prof->nom }}</span>
                    </li>
                    <li class="list-group-item">
                      <strong>Prénom:</strong> <span class="ms-3">{{ $prof->prenom }}</span>
                    </li>
                    <li class="list-group-item">
                      <strong>E-mail:</strong> <span class="ms-3">{{ $prof->user->email }}</span>
                    </li>
                    <li class="list-group-item">
                      <strong>Téléphone:</strong> <span class="ms-3">{{ $prof->telephone }}</span>
                    </li>
                  </ul>
                </div>
              </div>

            <div class="text-center mt-4">
                <h4 class="fw-bold py-2 mb-4"><span class="text-muted fw-light"></span>Module enseignée</h4>
            </div>

            <div class="row mb-5">

                @foreach ($prof->modules as $module)
                    <div class="col-md-6 col-lg-4">
                        <div class="card text-center mb-3">
                            <div class="card-body">
                                <h4 class="card-title fw-bold">{{ $module->nom }}</h4>
                                <p class="card-text">{{ $module->classe->niveau }}</p>
                                <h5 class="card-text"><span>{{ $module->heureEffectuee }}</span>h sur
                                    <span>{{ $module->heure_globale }}</span></h5>
                                <a href="{{ route('historique.listes', ['id' => $module->id]) }}"
                                    class="btn btn-secondary">Historique</a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
    @endsection
