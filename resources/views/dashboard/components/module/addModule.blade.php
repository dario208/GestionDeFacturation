@extends('layouts.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4>


        <!-- HTML5 Inputs -->
        <div class="card mb-4">
            <h5 class="card-header">HTML5 Inputs</h5>
            <div class="card-body">
                <form method="post" action="{{route('module.store')}}">
                    @csrf
                    <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label ">Nom</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="nom" id="nom" />
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="heure_globale" class="col-md-2 col-form-label">H-Globale</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="heure_globale" id="heure_globale" />
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="classe" class="col-md-2 col-form-label">Classe</label>
                        <div class="col-md-10">
                            <select name="classe_id" id="classe" class="form-select">
                                <option>Default select</option>
                                @foreach ($classes as $classe)
                                    <option value="{{ $classe->id }}">{{ $classe->niveau }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md mb-3">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Type</label>

                        <div class="form-check form-check-inline mt-3">
                            <input class="form-check-input" type="radio" name="type" id="type" value="base"
                                checked />
                            <label class="form-check-label" for="inlineRadio1">Matière de base</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="type"
                                value="complementaire" />
                            <label class="form-check-label" for="inlineRadio2">Complementaire</label>
                        </div>

                    </div>

                    <div class="mb-3 row">
                        <label for="tarif" class="col-md-2 col-form-label">Tarif</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" id="tarif" name="cout_horaire" readonly />
                            <input type="hidden" id="tarif_id" name="tarif_id" >
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="prof" class="col-md-2 col-form-label">Prof</label>
                        <div class="col-md-10">
                            <select name="prof_id" id="prof" class="form-select">
                                <option>Default select</option>

                                @foreach ($profs as $prof)
                                    <option value="{{ $prof->id }}">{{ $prof->nom }} {{ $prof->prenom }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
            </div>
        </div>

        <div class="text-start">
            <button type="submit" class="btn btn-dark">Créer le module</button>
        </div>


        </form>


    </div>


    <!-- JavaScript pour la mise à jour du tarif -->
    <script>
        $(document).ready(function() {
            $('#type, #classe').on('change', function() {
                var type = $('input[name="type"]:checked').val();
                var classe = $('#classe').val();

                // Requête Ajax pour obtenir le tarif en fonction du type et de la classe
                $.ajax({
                    method: 'GET',
                    url: '{{ route('get-tarif') }}', // URL de la route qui renvoie le tarif
                    data: {
                        type: type,
                        classe: classe
                    },
                    success: function(data) {
                        $('#tarif').val(data.tarif);
                        $('#tarif_id').val(data.tarif_id); // Mettez à jour l'ID du coût horaire

                         // Affichage des valeurs dans la console
                        console.log('Tarif mis à jour : ' + data.tarif);
                        console.log('ID du coût horaire mis à jour : ' + data.tarif_id);
                    }
                });
            });
        });
    </script>
@endsection
