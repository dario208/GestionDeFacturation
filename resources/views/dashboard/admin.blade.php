@extends('layouts.template')
@section('content')
    @if (Session::has('success'))
        <script>
            toastr.options = {
              "progressBar" : true,  
            };
            toastr.success("{{ session::get('success') }}");
        </script>
    @endif
@endsection
