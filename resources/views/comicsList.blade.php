@extends('layouts.main')

@section('content')


    @foreach ($comics as $comic )
        <div class="card" style="width: 18rem;">
            <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
            <div class="card-body">
            <h5 class="card-title">{{$comic->title}}</h5>
            <p class="card-text">{{$comic->description}}</p>
            <p>{{$comic->price}}</p>
            <a href="#" class="btn btn-primary">dettagli</a>
            </div>
        </div>
    @endforeach



@endsection
