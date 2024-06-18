@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="row g-3" action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title', $comic->title) }}">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb">Thumb link</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb"
                    name="thumb" value="{{ old('thumb', $comic->thumb) }}">
                @error('thumb')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series">Series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series"
                    name="series" value="{{ old('series', $comic->series) }}">
                @error('series')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type">Type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                    value="{{ old('type', $comic->type) }}">
                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price">Price</label>
                <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror"
                    id="price" name="price" value="{{ old('price', str_replace("$", '', $comic->price)) }}">
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date">Sale Date</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                    name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
                @error('sale_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>Description:</div>
            <textarea name="description" class="@error('description') is-invalid @enderror" id="description" rows="6">
                {{ old('description', $comic->description) }}
            </textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror


            <div class="col-12">
                <button type="submit" class="btn btn-warning">Edit</button>
            </div>
        </form>

    </div>
@endsection
