@extends('layouts.main')

@section('content')

        <h1 class=" text-center w-100">{{$comic->title}}</h1>
        <div class="d-flex">
            <img src="{{$comic->thumb}}" class="card-img-top w-50 mx-3" alt="{{$comic->title}}">
            <div class="w-100">
                <p>{{$comic->description}}</p>
                <p>Price: € {{$comic->price}}</p>
            </div>
        </div>

@endsection
