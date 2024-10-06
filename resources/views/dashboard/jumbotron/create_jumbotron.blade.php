@extends('dashboard.app')

@section('content')
    <h1>CREATE JUMBOTRON</h1>
    <form action="{{ route('post.jumbotron') }}" method="POST" enctype="multipart/form-data">

    @csrf

        <label for="title">Title:</label>
        <input type="text" class="form-control" name="title" required>

        <label class="mt-3" for="image_url">Image:</label>
        <input type="file" class="form-control" name="image_url" required>

        <button type="submit" class="btn btn-success mt-3">SAVE</button>
                        
    </form>
@endsection