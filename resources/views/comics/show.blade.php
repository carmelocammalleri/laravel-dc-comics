@extends('layouts.main')

@section('content')

        <h1>{{$comic->title}}</h1>
        <div class="d-flex">
            <img src="{{$comic->thumb}}" class="card-img-top w-50 mx-2" alt="{{$comic->title}}">
            <div>
                <p>{{$comic->description}}</p>
                <p>Price: {{$comic->price}}</p>
            </div>
        </div>

@endsection
