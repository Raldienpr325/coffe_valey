@extends('main')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold">Manage Distributors</h6>
        <a href="{{ route('upload.create') }}" class="btn btn-add btn-sm shadow-sm" style="color: white">
           Add Data
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover m-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Document File</th>
                        <th>Author</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->title }}</td>
                            <td>
                                @if ($item->document_file)
                                    @php
                                        $extension = pathinfo($item->document_file, PATHINFO_EXTENSION);
                                    @endphp

                                    @if (in_array($extension, ['pdf']))
                                        <embed src="{{ asset('storage/' . $item->document_file) }}" type="application/pdf" width="100%" height="200px" />
                                    @else
                                        <img src="{{ asset('storage/' . $item->document_file) }}" alt="Document Image" width="100">
                                    @endif
                                @else
                                    No File
                                @endif
                            </td>
                            <td>{{ $item->Author }}</td>

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
