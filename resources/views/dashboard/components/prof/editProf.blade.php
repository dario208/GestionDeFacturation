@extends('layouts.template')
@section('content')
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Professeur</h5>
                <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('prof.update', ['id' => $prof->id]) }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Nom</label>
                        <input type="text" class="form-control" name="nom" id="nom"
                            value="{{ $prof->nom }}" />

                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-company">Prenom</label>
                        <input type="text" class="form-control" name="prenom" id="prenom"
                            value="{{ $prof->prenom }}" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-phone">Téléphone</label>
                        <input type="text" name="telephone" id="telephone" class="form-control phone-mask"
                            value="{{ $prof->telephone }}" />
                    </div>
            </div>
        </div>

    </div>


    <div class="text-start">
        <button class="btn btn-danger" type="submit">Update</button>
    </div>
@endsection
