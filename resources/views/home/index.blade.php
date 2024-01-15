@extends('main')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold">List bean (sale_price >= 0)</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover m-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Bean Of The Day</th>
                        <th>Sale Price</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>$ {{ $item->daily_bean->sale_price }}</td>
                            <td>{{ $item->description }}</td>

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
