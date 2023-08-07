<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
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
    </head>
    <title>Document</title>
</head>
<body>
    <form class="mx-1 mx-md-4" method="post" action="">
        @csrf

        
           <!-- Formulaire pour le professeur -->
          <div class="mb-3">
            <label for="nom" class="form-label">Nom :</label>
            <input type="text" name="nom"  class="form-control" value="{{ $prof->nom}}" required>
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prenom :</label>
            <input type="text" name="prenom"  class="form-control" value="{{ $prof->prenom}}" required>
        </div>
        <div class="mb-3">
            <label for="telephone" class="form-label">Téléphone</label>
            <input type="text" name="telephone"  class="form-control"  value="{{ $prof->telephone}}" required>
        </div>   

        <div class="d-flex  justify-content-start mx-4 mb-3 mb-lg-4">
            <button type="submit" class="btn btn-primary btn-lg">Modifier</button>
        </div>

    </form>


    
</body>
</html>