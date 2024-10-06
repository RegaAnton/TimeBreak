@extends('dashboard.app')

@section('content')
    <h1>CREATE CITY</h1>
    <form action="{{ route('store.city') }}" method="POST">

    @csrf

        <label for="title">City Name:</label>
        <input type="text" class="form-control" name="city_name" required>

        <button type="submit" class="btn btn-success mt-3">SAVE</button>
                        
    </form>
@endsection