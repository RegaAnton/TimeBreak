@extends('dashboard.app')

@section('content')
    <h1>FORM JUMBOTRON</h1>
    <form action="{{ route('update.jumbotron', $data->id) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')

        <label for="title">Title:</label>
        <input type="text" class="form-control" name="title" value="{{ $data->title }}" required>

        <label class="mt-3" for="image_url">Image:</label>
        <input type="file" class="form-control" name="image_url" required>

        <button type="submit" class="btn btn-success mt-3">SAVE</button>
                        
    </form>
    <div class="text-center">
        <img src="{{ asset($data->image_url) }}" class="rounded" alt="{{ $data->title }}" style="width: 40%">
    </div>
@endsection