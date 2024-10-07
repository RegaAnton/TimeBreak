@extends('dashboard.app')

@section('content')
    <h1>EDIT EVENT</h1>
    <form action="{{ route('update.event', $event->id) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')

        <label for="event_name">Event Name:</label>
        <input type="text" class="form-control" name="event_name" value="{{ $event->event_name }}" required>

        <label for="description">Description:</label>
        <input type="text" class="form-control" name="description" value="{{ $event->description }}" required>

        <label for="event_date">Event Date:</label>
        <input type="date" class="form-control" name="event_date" value="{{ $event->event_date }}" required>

        <label for="event_time">Event Time:</label>
        <input type="time" class="form-control" name="event_time" value="{{ $event->event_time }}" required>
        
        <label for="city_id">City:</label>
        <select class="form-select" aria-label="Default select example" name="city_id">
            <option value="{{ $event->city->id }}" selected>{{ $event->city->city_name }}</option>
            @foreach ($cities as $item)
                <option value="{{ $item->id }}">{{ $item->city_name }}</option>  
            @endforeach
        </select>


        <label for="location">Location:</label>
        <input type="text" class="form-control" name="location" value="{{ $event->location }}" required>

        <label for="gmaps_link">Google Maps:</label>
        <input type="url" class="form-control" name="gmaps_link" value="{{ $event->gmaps_link }}" required>

        <label for="registration_link">Registrasi Link:</label>
        <input type="url" class="form-control" name="registration_link" value="{{ $event->registration_link }}">

        <label for="image">Image:</label>
        <input type="file" class="form-control" name="image">
        
        <label for="replay">Replay Link:</label>
        <input type="url" class="form-control" name="replay" value="{{ $event->replay }}">

        <label for="photo">Photo Link:</label>
        <input type="url" class="form-control" name="photo" value="{{ $event->photo }}">

        <button type="submit" class="btn btn-success mt-3">SAVE</button>

    </form>
@endsection