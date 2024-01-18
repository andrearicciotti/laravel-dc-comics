@extends('layouts.app')

@section('content')
    <h1 class="text-center my-4">Comics</h1>

    <div class="container">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image path</th>
                    <th>Price</th>
                    <th>Series</th>
                    <th>Sale date</th>
                    <th>Type</th>
                    <th>Details</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->title }}</td>
                        <td>{{ substr($comic->description, 0, 20) }}</td>
                        <td>{{ substr($comic->thumb, 0, 20) }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td><a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">Details</a></td>
                        <td><a class="btn btn-danger">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
