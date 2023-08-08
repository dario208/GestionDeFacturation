@extends('layouts.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4>


        <!-- HTML5 Inputs -->
        <div class="card mb-4">
            <h5 class="card-header">HTML5 Inputs</h5>
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

        <div class="text-start">
            <button type="submit" class="btn btn-dark">Submit</button>
        </div>
        </form>
    </div>
@endsection
