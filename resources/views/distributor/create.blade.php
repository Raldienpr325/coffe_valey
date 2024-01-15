@extends('main')

@section('content')

    <div class="container">
        <form method="post" action="{{ route('distributor.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">Distributor Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" id="city" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="region">State/Region</label>
                <input type="text" name="region" id="region" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="country">Country</label>
                <select name="country" id="country" class="form-control" required>
                    <option value="">Select Country</option>
                </select>
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            $.get('https://restcountries.com/v3.1/all', function (data) {
                var countryDropdown = $('#country');
                $.each(data, function (index, country) {
                    countryDropdown.append('<option value="' + country.name.common + '">' + country.name.common + '</option>');
                });
            });
        });
    </script>

@endsection
