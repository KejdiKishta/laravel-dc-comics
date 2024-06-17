@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('comics.create') }}">Add a new comic</a>
        <div class="row">
            @foreach ($comicsArray as $item)        
            <div class="card col-3 p-2 border-0">
                <img src="{{ $item->thumb }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <div>
                        <small>{{ $item->series }}</small>
                    </div>
                    <a href="{{ route('comics.show', ['comic' => $item->id]) }}">Details</a>
                    <a href="{{ route('comics.edit', ['comic' => $item->id]) }}">Edit</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
