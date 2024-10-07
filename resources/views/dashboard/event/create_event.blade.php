@extends('dashboard.app')

@section('content')
    <h1>CREATE EVENT</h1>
    <form action="{{ route('post.event') }}" method="POST" enctype="multipart/form-data">

    @csrf

        <label for="event_name">Event Name:</label>
        <input type="text" class="form-control" name="event_name" required>

        <label for="description">Description:</label>
        <input type="text" class="form-control" name="description" required>

        <label for="event_date">Event Date:</label>
        <input type="date" class="form-control" name="event_date" required>

        <label for="event_time">Event Time:</label>
        <input type="time" class="form-control" name="event_time" required>
        
        <label for="city_id">City:</label>
        <select class="form-select" aria-label="Default select example" name="city_id">
            <option value="" selected>Open this select city</option>
            @foreach ($cities as $city)                
                <option value="{{ $city->id }}">{{ $city->city_name }}</option>
            @endforeach
        </select>


        <label for="location">Location:</label>
        <input type="text" class="form-control" name="location" required>

        <label for="gmaps_link">Google Maps:</label>
        <input type="url" class="form-control" name="gmaps_link" required>

        <label for="registration_link">Registrasi Link:</label>
        <input type="url" class="form-control" name="registration_link">

        <label for="image">Image:</label>
        <input type="file" class="form-control" name="image" required>
        
        <label for="replay">Replay Link:</label>
        <input type="url" class="form-control" name="replay">

        <label for="photo">Photo Link:</label>
        <input type="url" class="form-control" name="photo">

        <button type="submit" class="btn btn-success mt-3">SAVE</button>
                        
    </form>
@endsection