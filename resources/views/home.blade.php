@extends('layouts.main')

@section('content')
    <main class="container w-100 text-center">

        <h1 class="my-5">Qui puoi trovare tutti i fumetti che cerchi</h1>
        <a href="{{ route('comics.create')}}" class="btn btn-primary">Aggiungi un fumetto</a>
    </main>

@endsection
