@extends('layouts.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Liste des professeurs</h4>
        <div class=" text-end mb-4">
            <a class="btn btn-primary" href="{{ route('prof.add') }}">ajouter</a>
        </div>
        <!-- Basic Bootstrap Table -->
        <div class="card p-3">
            <h5 class="card-header">Professeur</h5>
            <div class="table-responsive text-nowrap">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>E-mail</th>
                            <th>Numero</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profs as $prof)
                            <tr>
                                <td>{{ $prof->nom }}</td>
                                <td>{{ $prof->prenom }}</td>
                                <td>{{ $prof->user->email }}</td>
                                <td>{{ $prof->telephone }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('prof.edit', ['id' => $prof->id]) }}"><i
                                                    class="bx bx-edit-alt me-1"></i> Editer</a>

                                            <a class="dropdown-item" href="{{ route('prof.show', ['id' => $prof->id]) }}"><i
                                                    class="bx bx-edit-alt me-1"></i>Voir</a>

                                            <form method="POST" action="{{ route('prof.delete', ['id' => $prof->id]) }}"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item"><i
                                                        class="bx bx-trash me-1"></i>Supprimer</button>
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

