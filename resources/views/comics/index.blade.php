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
                    <a href="{{ route('comics.show', ['comic' => $item->id]) }}"><button class="btn btn-primary">Details</button></a>
                    <a href="{{ route('comics.edit', ['comic' => $item->id]) }}"><button class="btn btn-warning">Edit</button></a>
                    <form action="{{ route('comics.destroy', ['comic' =>  $item->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
