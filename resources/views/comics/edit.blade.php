@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="row g-3" action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
            </div>
            <div class="mb-3">
                <label for="thumb">Thumb link</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>
            <div class="mb-3">
                <label for="series">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
            </div>
            <div class="mb-3">
                <label for="type">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
            </div>
            <div class="mb-3">
                <label for="price">Price</label>
                <input type="number" step="0.01" class="form-control" id="price"
                    name="price" value="{{ str_replace("$", "", $comic->price) }}">
            </div>
            <div class="mb-3">
                <label for="sale_date">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
            </div>

            <div>Description:</div>
            <textarea name="description" id="description" rows="6">
                {{ $comic->description }}
            </textarea>

            <div class="col-12">
                <button type="submit" class="btn btn-warning">Edit</button>
            </div>
        </form>

    </div>
@endsection
