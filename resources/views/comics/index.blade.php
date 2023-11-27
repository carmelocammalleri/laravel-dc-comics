@extends('layouts.main')

@section('content')

    <h1 class="w-100 text-center">Ci sono a tua disposizione {{count($comics)}} fumetti</h1>
    <div class="container d-flex flex-wrap justify-content-between">

        @foreach ($comics as $comic )
            <div class="card m-2" style="width: 18rem;">
                <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                <div class="card-body">
                <h5 class="card-title">{{$comic->title}}</h5>
                <p class="card-text">Serie: {{$comic->series}}</p>
                <p class="card-text">Uscita: {{$comic->sale_date}}</p>
                <a href="{{ route('comics.show', $comic->id)}}" class="btn btn-success">Dettagli</a>
                </div>
            </div>
        @endforeach
    </div>



@endsection
