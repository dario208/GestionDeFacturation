@extends('layouts.template')
@section('content')

<div class="container">

    <div class="text-center">
        <h1>Details du Professeur</h1>
    </div>

    <ul class="list-group list-group-light">
        <li class="list-group-item px-3 border-0 rounded-3 list-group-item-info  mb-2 fw-bold">ID: <span class="fw-normal ms-3">{{$prof->id}}</span></li>
        <li class="list-group-item px-3 border-0 rounded-3 list-group-item-info  mb-2 fw-bold">Nom: <span class="fw-normal ms-3">{{$prof->nom}}</span></li>
        <li class="list-group-item px-3 border-0 rounded-3 list-group-item-secondary mb-2 fw-bold">Prenom: <span class="fw-normal ms-3">{{$prof->prenom}}</span></li>
        <li class="list-group-item px-3 border-0 rounded-3 list-group-item-success mb-2 fw-bold">E-mail: <span class="fw-normal ms-3">{{($prof->user)->email}}</span></li>
        <li class="list-group-item px-3 border-0 rounded-3 list-group-item-danger mb-2 fw-bold">Telephone: <span class="fw-normal ms-3">{{$prof->telephone}}</span></li>
    </ul>

</div>

@endsection