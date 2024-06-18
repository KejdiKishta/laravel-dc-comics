@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>Add a new Comic</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="row g-3" action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title">Title *</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="thumb">Thumb link</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
            <div class="mb-3">
                <label for="series">Series *</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
            <div class="mb-3">
                <label for="type">Type</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>
            <div class="mb-3">
                <label for="price">Price *</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label for="sale_date">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date">
            </div>

            <div>Description:</div>
            <textarea name="description" id="description" rows="6"></textarea>

            <div class="col-12">
                <button type="submit" class="btn btn-success">Add</button>
            </div>
        </form>
    </div>
@endsection
