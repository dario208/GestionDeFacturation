<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../template" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Dashboard</title>
    <meta name="description" content="" />

    @include('dashboard.partials.head')

</head>

<body>
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
                    @yield('content')
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

    @include('dashboard.partials.footerScript')

    <script>
        new DataTable('#example');

        document.addEventListener("DOMContentLoaded", function() {
            const payNowButton = document.getElementById("payNowButton");
            const paymentStatus = document.getElementById("paymentStatus");

            payNowButton.addEventListener("click", function(event) {
              // Empêcher le comportement par défaut du bouton
                payNowButton.style.display = "none"; // Masquer le bouton
                paymentStatus.textContent = "Paid"; // Mettre à jour le statut
                paymentStatus.classList.remove("bg-warning"); // Changer la couleur du statut si nécessaire
                paymentStatus.classList.add(
                    "bg-success"); // Changer la couleur en vert pour indiquer le paiement réussi
            });
        });

      
    </script>
</body>

</html>
