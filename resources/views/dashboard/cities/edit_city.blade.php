@extends('dashboard.app')

@section('content')
    <h1>EDIT CITY</h1>
    <form action="{{ route('update.city', $city->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <label for="city_name">City Name:</label>
        <input type="text" class="form-control" name="city_name" value="{{ $city->city_name }}" required>

        <button type="submit" class="btn btn-success mt-3">SAVE</button>
                        
    </form>
@endsection