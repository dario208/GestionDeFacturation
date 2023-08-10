@extends('layouts.template')
@section('content')
   
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Suivie de Facture</h4>

            <!-- Basic Bootstrap Table -->
            <div class="card p-3">
                <h5 class="card-header badge bg-info fs-4">Suivie de Facture</h5>
                <div class="table-responsive text-nowrap">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr class="bg-primary">
                                <th class="text-white fs-7">Nom</th>
                                <th class="text-white fs-7">Prenom</th>
                                <th class="text-white fs-7">Montant Payé</th>
                                <th class="text-white fs-7">Montant Restant</th>
                                <th class="text-white fs-7">Status</th>
                                <th class="text-white fs-7">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                   
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td> <span class="badge bg-success fs-6">120 000 Ar</span></td>
                                    <td> <span class="badge bg-warning fs-6">0 Ar</span></td>
                                    <td><span class="badge bg-success">Payé</span></td>

                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href=""><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>

                                                <a class="dropdown-item"
                                                    href=""><i
                                                        class="bx bx-edit-alt me-1"></i>Show</a>

                                                <form method="POST"
                                                    action=""
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
                           


                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    @endsection
