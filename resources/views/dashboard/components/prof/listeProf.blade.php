@extends('layouts.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>
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
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>

                                            <a class="dropdown-item" href="{{ route('prof.show', ['id' => $prof->id]) }}"><i
                                                    class="bx bx-edit-alt me-1"></i>Show</a>

                                            <form method="POST" action="{{ route('prof.delete', ['id' => $prof->id]) }}"
                                                style="display:inline;">
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
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title badge bg-secondary fs-5">Facture</h2>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <h6> 
                                <span class="badge bg-info fs-6">Professeur</span> <span class="fs-5">: Ranaivoson Juan</span>
                                
                            </h6>
                            <p><span class="badge bg-info fs-6">Email</span> <span class="fs-5">: juan@gmail.com</span></p>
                            <p><span class="badge bg-info fs-6">Téléphone</span> <span class="fs-5">: 032 98 933 12</span></p>
                        </div>
                        <table class="table">
                            <thead>
                                <tr class="bg-primary">
                                    <th class="text-white fs-7">Date</th>
                                    <th class="text-white fs-7">Heure de Début</th>
                                    <th class="text-white fs-7">Heure de Fin</th>
                                    <th class="text-white fs-7">Module</th>
                                    <th class="text-white fs-7">Niveau</th>
                                    <th class="text-white fs-7">Heures</th>
                                    <th class="text-white fs-7">Montant</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2023-08-01</td>
                                    <td>08:00 AM</td>
                                    <td>10:00 AM</td>
                                    <td>Mathématiques</td>
                                    <td>L1</td>
                                    <td>2H</td>
                                    <td ><span class=" badge bg-success fs-6"> 40 000 Ar</span></td>
                                </tr>
                                <tr>
                                    <td>2023-08-03</td>
                                    <td>09:00 AM</td>
                                    <td>11:00 AM</td>
                                    <td>Science</td>
                                    <td>L1</td>
                                    <td>2H</td>
                                    <td><span class=" badge bg-success fs-6"> 40 000 Ar</span></td>
                                </tr>
                                <tr>
                                    <td>2023-08-05</td>
                                    <td>10:00 AM</td>
                                    <td>12:00 PM</td>
                                    <td>Histoire</td>
                                    <td>L1</td>
                                    <td>2H</td>
                                    <td><span class=" badge bg-success fs-6"> 40 000 Ar</span></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6" class="text-end"><strong class="fs-4">Total:</strong></td>
                                    <td><strong class="badge bg-success fs-5">120 000 Ar</strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success  fs-5">Marquer comme Payé</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Suivie de Facture</h4>
        
        <!-- Basic Bootstrap Table -->
        <div class="card p-3">
            <h5 class="card-header">Suivie de Facture</h5>
            <div class="table-responsive text-nowrap">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr class="bg-primary">
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Montant Payé</th>
                            <th>Montant Restant</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profs as $prof)
                            <tr>
                                <td>{{ $prof->nom }}</td>
                                <td>{{ $prof->prenom }}</td>
                                <td b>120 000 Ar</td>
                                <td>0 Ar</td>
                                <td><span class="badge bg-success">Payé</span></td>

                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('prof.edit', ['id' => $prof->id]) }}"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>

                                            <a class="dropdown-item" href="{{ route('prof.show', ['id' => $prof->id]) }}"><i
                                                    class="bx bx-edit-alt me-1"></i>Show</a>

                                            <form method="POST" action="{{ route('prof.delete', ['id' => $prof->id]) }}"
                                                style="display:inline;">
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

    
    
@endsection
