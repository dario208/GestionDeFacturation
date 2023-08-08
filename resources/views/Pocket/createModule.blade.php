<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('template/') }}" data-template="vertical-menu-template-free">

<head>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
        <title>Document</title>
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('template/img/favicon/favicon.ico') }}" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet" />
        <!-- Icons. Uncomment required icon fonts -->
        <link rel="stylesheet" href="{{ asset('template/vendor/fonts/boxicons.css') }}" />
        <!-- Core CSS -->
        <link rel="stylesheet" href="{{ asset('template/vendor/css/core.css') }}"
            class="template-customizer-core-css" />
        <link rel="stylesheet" href="{{ asset('template/vendor/css/theme-default.css') }}"
            class="template-customizer-theme-css" />
        <link rel="stylesheet" href="{{ asset('template/css/demo.css') }}" />
        <!-- Vendors CSS -->
        <link rel="stylesheet" href="{{ asset('template/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
        <link rel="stylesheet" href="{{ asset('template/vendor/libs/apex-charts/apex-charts.css') }}" />
        <!-- Page auth -->
        <link rel="stylesheet" href="{{ asset('template/vendor/css/pages/page-auth.css') }}" />


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>




<body>
   
    <body>
        <form method="POST" action="{{ route('store.module') }}" class="p-3 border rounded shadow-sm">
            
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nom du module:</label>
                <input type="text" name="nom" id="nom" class="form-control">
            </div>
        
            <div class="mb-3">
                <label class="form-label">Type:</label>
                <div class="form-check">
                    <input type="radio" name="type" value="base" id="type" class="form-check-input">
                    <label class="form-check-label">Base</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="type" value="complementaire" id="type" class="form-check-input">
                    <label class="form-check-label">Complémentaire</label>
                </div>
            </div>
        
            <div class="mb-3">
                <label for="classe" class="form-label">Classe:</label>
                <select name="classe_id" id="classe" class="form-select">
                    @foreach ($classes as $classe)
                        <option value="{{$classe->id}}">{{ $classe->niveau }}</option>
                    @endforeach
                </select>
            </div>
        
            <div class="mb-3">
                <label for="heure_globale" class="form-label">Heure Globale:</label>
                <input type="text" name="heure_globale" id="heure_globale" class="form-control">
            </div>
        
            <div class="mb-3">
                <label for="prof" class="form-label">Prof:</label>
                <select name="prof_id" id="prof" class="form-select">
                    @foreach ($profs as $prof)
                        <option value="{{ $prof->id }}">{{ $prof->nom }} {{ $prof->prenom }}</option>
                    @endforeach
                </select>
                
            </div>

            <div class="mb-3">
                <label for="tarif" class="form-label">Tarif:</label>
                <input type="text" id="tarif" name="cout_horaire" readonly class="form-control">
                <input type="hidden" id="tarif_id" name="tarif_id">
            </div>
    
            <button type="submit" class="btn btn-primary">Créer le module</button>
        </form>
    
        <!-- JavaScript pour la mise à jour du tarif -->
        <script>
            $(document).ready(function () {
                $('#type, #classe').on('change', function () {
                    var type = $('input[name="type"]:checked').val();
                    var classe = $('#classe').val();
    
                    // Requête Ajax pour obtenir le tarif en fonction du type et de la classe
                    $.ajax({
                        method: 'GET',
                        url: '/get-tarif', // URL de la route qui renvoie le tarif
                        data: { type: type, classe: classe },
                        success: function (data) {
                            $('#tarif').val(data.tarif);
                            $('#tarif_id').val(data.tarif_id); // Mettez à jour l'ID du coût horaire
                        }
                    });
                });
            });
        </script>
</body>

</html>
