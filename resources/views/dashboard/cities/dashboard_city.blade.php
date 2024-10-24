@extends('dashboard.app')

@section('content')
    <h1>CITY</h1>
    <a href="{{ route('create.city') }}" class="btn btn-success my-3">Add City</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Opsi</th>
            </tr>
        </thead>
        @foreach ($cities as $item)
        <tbody>
            <tr>
                <td>{{ $item->city_name }}</td>
                <td>
                    <a href="{{ route('edit.city', $item->id) }}" class="btn btn-warning"> EDIT </a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
@endsection