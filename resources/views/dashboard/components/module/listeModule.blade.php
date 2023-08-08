@extends('layouts.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>
        <div class=" text-end mb-4">
            <a class="btn btn-primary" href="{{ route('module.add') }}">ajouter</a>
        </div>
        <!-- Basic Bootstrap Table -->
        <div class="card p-3">
            <h5 class="card-header">Module</h5>
            <div class="table-responsive text-nowrap">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>H-Globale</th>
                            <th>Type</th>
                            <th>Classe</th>
                            <th>Tarif</th>
                            <th>Prof</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($modules as $module)
                            <tr>
                                <td>{{ $module->nom }}</td>
                                <td>{{ $module->heure_globale }}</td>
                                <td>{{ ($module->tarif)->type }}</td>
                                <td>{{ ($module->classe)->niveau }}</td>
                                <td>{{ ($module->tarif)->cout_horaire }}</td>
                                <td>{{ ($module->prof)->nom }} {{ ($module->prof)->prenom }}</td>

                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href=""><i class="bx bx-edit-alt me-1"></i>
                                                Edit</a>

                                            <a class="dropdown-item" href=""><i
                                                    class="bx bx-edit-alt me-1"></i>Show</a>

                                            <form method="POST" action="" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item"><i
                                                        class="bx bx-trash me-1"></i>Delete</button>
                                            </form>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>
@endsection
