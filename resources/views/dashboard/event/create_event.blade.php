@extends('dashboard.app')

@section('content')
    <h1>CREATE EVENT</h1>
    <form action="{{ route('post.event') }}" method="POST" enctype="multipart/form-data">

    @csrf

        <div class="mb-3">
            <label for="event_name">Event Name:</label>
            <input type="text" class="form-control" name="event_name" required>
        </div>

        <div class="mb-3">
            <label for="description">Description:</label>
            <input type="text" class="form-control" name="description" required>
        </div>

        <div class="mb-3">
            <label for="event_date">Event Date:</label>
            <input type="date" class="form-control" name="event_date" required>
        </div>

        <div class="mb-3">
            <label for="event_time">Event Time:</label>
            <input type="time" class="form-control" name="event_time" required>
        </div>
        
        <div class="mb-3">
            <label for="city_id">City:</label>
            <select class="form-select" aria-label="Default select example" name="city_id">
                <option value="" selected>Open this select city</option>
                @foreach ($cities as $city)                
                    <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                @endforeach
            </select>
        </div>


        <div class="mb-3">
            <label for="location">Location:</label>
            <input type="text" class="form-control" name="location" required>
        </div>

        <div class="mb-3">
            <label for="gmaps_link">Google Maps:</label>
            <input type="url" class="form-control" name="gmaps_link" required>
        </div>

        <div class="mb-3">
            <label for="registration_link">Registrasi Link:</label>
            <input type="url" class="form-control" name="registration_link">
        </div>

        <div class="mb-3">
            <label for="image">Image:</label>
            <input type="file" class="form-control" name="image" required>
        </div>
        
        <div class="mb-3">
            <label for="replay">Replay Link:</label>
            <input type="url" class="form-control" name="replay">
        </div>

        <div class="mb-3">
            <label for="photo">Photo Link:</label>
            <input type="url" class="form-control" name="photo">
        </div>

        <button type="submit" class="btn btn-success">SAVE</button>
                        
    </form>
@endsection