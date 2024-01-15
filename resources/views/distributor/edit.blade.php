@extends('main')

@section('content')
<div class="container">
    <h1>Edit Distributor</h1>

    <form method="post" action="{{ route('distributor.update', $distributor->id) }}">
        @csrf
        @method('PUT') {{-- Use the appropriate method (PUT/PATCH) for updating --}}

        <div class="form-group">
            <label for="name">Distributor Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $distributor->name }}" required>
        </div>

        <div class="form-group">
            <label for="city">City</label>
            <input type="text" name="city" id="city" class="form-control" value="{{ $distributor->city }}" required>
        </div>

        <div class="form-group">
            <label for="region">State/Region</label>
            <input type="text" name="region" id="region" class="form-control" value="{{ $distributor->region }}" required>
        </div>

        <div class="form-group">
            <label for="country">Country</label>
            <select name="country" id="country" class="form-control" required>
                @foreach ($countries as $country)
                    <option value="{{ $country['name']['common'] }}" {{ $country['name']['common'] == $distributor->country ? 'selected' : '' }}>
                        {{ $country['name']['common'] }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $distributor->phone }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $distributor->email }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
