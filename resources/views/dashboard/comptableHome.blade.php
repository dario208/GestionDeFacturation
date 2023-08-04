<form method="POST" action="{{ route('logout') }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="dropdown-item">Logout</button>
</form>


