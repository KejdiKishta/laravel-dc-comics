@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>Add a new Comic</h1>
        <form class="row g-3" action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="title" name="title" placeholder="title">
                <label for="title">Title</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Password">
                <label for="thumb">Thumb link</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="series" name="series" placeholder="Password">
                <label for="series">Series</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="type" name="type" placeholder="Password">
                <label for="type">Type</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Password">
                <label for="price">Price</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Password">
                <label for="sale_date">Sale Date</label>
            </div>

            <div>Description:</div>
            <textarea name="description" id="description" rows="6"></textarea>
            
            <div class="col-12">
                <button type="submit" class="btn btn-success">Add</button>
            </div>
        </form>
    </div>
@endsection
