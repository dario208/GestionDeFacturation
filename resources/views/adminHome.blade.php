@extends('layouts.app')
@section('content')

<h1>Bonjour je suis admin</h1>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="dropdown-item">Logout</button>
</form>


@endsection