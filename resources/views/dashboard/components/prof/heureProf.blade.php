@extends('layouts.template')
@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label class="form-label" for="input-date">Date:</label>
                                <input type="date" class="form-control" name="date" id="input-date" aria-label="Date" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="input-start-time">Heure de Début:</label>
                                <input type="time" class="form-control" name="heure_de_debut" id="input-start-time"
                                    aria-label="Heure de Début" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="input-end-time">Heure de Fin:</label>
                                <input type="time" class="form-control" name="heure_de_fin"  id="input-end-time" aria-label="Heure de Fin" />
                                <input type="hidden" class="form-control" name="module_id" value="{{e($module_id)}}" />
                            </div>
                            <!-- Autres champs de saisie ici -->
                            <button type="submit" class="btn btn-success">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
