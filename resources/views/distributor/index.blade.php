@extends('main')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold">Manage Distributors</h6>
        <a href="{{ route('distributor.create') }}" class="btn btn-add btn-sm shadow-sm" style="color: white">
           Add Data
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover m-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Distributor Name</th>
                        <th>City</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->city }}</td>
                            <td>
                                <a href="{{ route('distributor.edit', $item->id) }}" class="btn btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path d="M12.78 0a2 2 0 0 1 1.41.59l1.5 1.5a2 2 0 0 1 0 2.83l-8.47 8.47a1 1 0 0 1-.32.2l-3.61.9a1 1 0 0 1-1.26-1.26l.9-3.61a1 1 0 0 1 .2-.32L11.2 1.8a2 2 0 0 1 2.83 0l1.5 1.5A2 2 0 0 1 12.78 0zM11.36 1.64L1.15 11.85l-.48 1.92 1.92-.48L14.7 3.56 11.36 1.64zM2 13h10v2H2v-2z"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" style="text-align: center">No data available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
