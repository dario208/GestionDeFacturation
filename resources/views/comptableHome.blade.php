@extends('layouts.app')
@section('content')

<h1>bonjour je suis comptable lelena ty</h1>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="dropdown-item">Logout</button>
</form>


@endsection