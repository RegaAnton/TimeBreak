@extends('dashboard.app')

@section('content')
    <h1>JUMBOTRON</h1>
    <a href="{{ route('create.jumbotron') }}" class="btn btn-success">Add Jumbotron</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Images</th>
                <th>Opsi</th>
            </tr>
        </thead>
        @foreach ($jumbotron as $item)
        <tbody>
            <tr>
                <td>{{ $item->title }}</td>
                <td><a href="{{ $item->image_url }}">View</a></td>
                <td>
                    <a href="{{ route('edit.jumbotron', $item->id) }}" class="btn btn-warning"> EDIT
                    </a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
@endsection