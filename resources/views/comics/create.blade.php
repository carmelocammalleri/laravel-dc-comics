@extends('layouts.main')

@section('content')
<div>
    <h1>Aggiungi fumetto</h1>

 <div class="row">
    <div class="col">
        <form action="{{ route('comics.store') }}" method="POST">

            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Nome Fumetto</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea class="form-control" id="description" name="description" style="height: 200px"></textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" >
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="price" class="form-control" id="price" name="price" >
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="series" class="form-control" id="series" name="series" >
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">sale_date</label>
                <input type="sale_date" class="form-control" id="sale_date" name="sale_date" >
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="type" class="form-control" id="type" name="type" >
            </div>

            <button type="submit" class="btn btn-secondary">Invia</button>
            <button type="reset" class="btn btn-danger">Annulla</button>

        </form>
    </div>
 </div>
</div>


@endsection
