@extends('main')

@section('content')

<div class="container">
    <form method="post" action="{{ route('upload.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="document_file">Document File</label>
            <input type="file" name="document_file" id="document_file" class="form-control-file" required>
        </div>

        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

@endsection
