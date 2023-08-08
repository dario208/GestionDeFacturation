@extends('layouts.template')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card mb-4">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label class="form-label" for="input-date">Date:</label>
                                <input type="date" class="form-control" id="input-date" aria-label="Date" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="input-start-time">Heure de Début:</label>
                                <input type="time" class="form-control" id="input-start-time"
                                    aria-label="Heure de Début" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="input-end-time">Heure de Fin:</label>
                                <input type="time" class="form-control" id="input-end-time" aria-label="Heure de Fin" />
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
