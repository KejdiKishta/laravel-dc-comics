@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($comicsArray as $item)        
            <div class="card col-3 p-2 border-0">
                <img src="{{ $item->thumb }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <small>
                        {{ $item->series }} <br>
                        type: {{ $item->type }}
                    </small>
                    <p class="card-text">{{ $item->description }}</p>
                    <p>price: {{ $item->price }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
