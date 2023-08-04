@extends('dashboard.template')
@section('content')

  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

      <!-- Menu -->
      @include('dashboard.partials.sidebar')
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        @include('dashboard.partials.navbar')
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          @include('dashboard.partials.contenu')
          <!-- / Content -->

          <!-- Footer -->
          @include('dashboard.partials.footer')
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>


  <form method="POST" action="{{ route('logout') }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="dropdown-item">Logout</button>
  </form>

@endsection