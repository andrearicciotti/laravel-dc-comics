@extends('layouts.app')

@section('content')
    <h1>{{ $comic->title }}</h1>
    <img src="{{ $comic->thumb }}" alt="">
    <p><strong>Price: </strong>{{ $comic->price }}</p>
    <p><strong>Series: </strong>{{ $comic->series }}</p>
    <p><strong>Sale date: </strong>{{ $comic->sale_date }}</p>
    <p><strong>Type: </strong>{{ $comic->type }}</p>
    <h3>Description</h3>
    <p>{{ $comic->description }}</p>
@endsection
