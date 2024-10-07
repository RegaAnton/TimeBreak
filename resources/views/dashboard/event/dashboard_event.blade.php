@extends('dashboard.app')

@section('content')
    <h1>EVENT</h1>
    <a href="{{ route('create.event') }}" class="btn btn-success">Add Event</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Event Name</th>
                <th>Event Date</th>
                <th>Event Time</th>
                <th>Opsi</th>
            </tr>
        </thead>
        @foreach ($events as $item)
        <tbody>
            <tr>
                <td>{{ $item->event_name }}</td>
                <td>{{ $item->event_date }}</td>
                <td>{{ $item->event_time }}</td>
                <td>
                    <a href="" class="btn btn-warning"> EDIT </a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
@endsection