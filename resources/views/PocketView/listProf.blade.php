<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
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
</head>
<body>
    
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>E-mail</th>
                <th>Numéro</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        @foreach ( $profs as $prof )
            
        
            <tr>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $prof->nom }}</strong></td>
                <td>{{ $prof->prenom }}</td>
                <td>
                    {{ ($prof->user)->email }}
                </td>
                <td>
                    <span>{{ $prof->telephone }}</span>
                </td>
                <td><span class="badge bg-label-primary me-1">Active</span></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                            data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('editProf',['id' =>($prof->id)]) }}"><i
                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                        <form action="{{ route('deleteProf',['id' =>($prof->id)]) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                            <button type="submit" class="dropdown-item"><i class="bx bx-trash me-1"></i> Delete</button>
                        </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>




    
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('template/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('template/js/config.js') }}"></script>

    <script src="{{ asset('template/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('template/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('template/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('template/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('template/vendor/js/menu.js') }}"></script>
    <!-- Vendors JS -->
    <script src="{{ asset('template/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('template/js/main.js') }}"></script>
    <!-- Page JS -->
    <script src="{{ asset('template/js/dashboards-analytics.js') }}"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>


</body>
</html>