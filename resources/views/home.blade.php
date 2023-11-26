@extends('layouts.main')

@section('content')
    <main class="container">

        <h1>ciao sono la home</h1>
        <a href="{{ route('comics.create')}}" class="btn btn-primary">Aggiungi un fumetto</a>
    </main>

@endsection
