@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
        <h1 class="my-4">New Comic</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            @if ($errors->any())
                
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>                        
                    @endforeach
                </div>

            @endif
    
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Image path</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>
            <button type="submit" class="btn btn-success">Save</button>
    
        </form>

    </div>
</div>
@endsection
