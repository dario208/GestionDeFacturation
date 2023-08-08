@extends('layouts.template')
@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Module Entry Form</h2>
        <div class="form-container">
            <form>
                <div class="mb-3">
                    <label for="module_name" class="form-label">Module Name</label>
                    <input type="text" class="form-control" id="module_name" name="module_name" required>
                </div>
                <div class="mb-3">
                    <label for="module_number" class="form-label">Module Number</label>
                    <input type="text" class="form-control" id="module_number" name="module_number" required>
                </div>
                <div class="mb-3">
                    <label for="assigned_professors" class="form-label">Professors Assigned</label>
                    <input type="text" class="form-control" id="assigned_professors" name="assigned_professors" required>
                </div>
                <div class="mb-3">
                    <label for="total_hours" class="form-label">Total Hours for this Module</label>
                    <input type="number" class="form-control" id="total_hours" name="total_hours" required min="1">
                </div>
                <div class="mb-3">
                    <label for="price_per_hour" class="form-label">Price per Hour</label>
                    <input type="number" class="form-control" id="price_per_hour" name="price_per_hour" required
                        min="0">
                </div>
                <div class="mb-3">
                    <label for="total_price" class="form-label">Total Price for this Module</label>
                    <input type="number" class="form-control" id="total_price" name="total_price" readonly>
                </div>
                <div class="mb-3">
                    <label for="module_category" class="form-label">Module Category</label>
                    <select class="form-select" id="module_category" name="module_category" required>
                        <option value="" selected disabled>Select Module Category</option>
                        <option value="base">Module de base</option>
                        <option value="complementary">Module complémentaire</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script>
        // Calculate the total price when price per hour or total hours change
        document.getElementById('price_per_hour').addEventListener('input', updateTotalPrice);
        document.getElementById('total_hours').addEventListener('input', updateTotalPrice);

        function updateTotalPrice() {
            const pricePerHour = parseFloat(document.getElementById('price_per_hour').value);
            const totalHours = parseFloat(document.getElementById('total_hours').value);
            const totalPrice = pricePerHour * totalHours;
            document.getElementById('total_price').value = totalPrice.toFixed(2);
        }
    </script>
@endsection
