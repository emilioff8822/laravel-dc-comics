@extends('layout.main')

@section('content')
    <h3>CREATE</h3>

    <form action="{{ route('comics.store') }}" method="POST">@csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Inserisci il titolo">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" class="form-control" id="description" placeholder="Inserisci la descrizione"></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input name="thumb" type="text" class="form-control" id="thumb"
                placeholder="Inserisci l'URL della thumbnail">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input name="price" type="text" class="form-control" id="price" placeholder="Inserisci il prezzo">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input name="series" type="text" class="form-control" id="series" placeholder="Inserisci la serie">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di Vendita</label>
            <input name="sale_date" type="date" class="form-control" id="sale_date">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input name="type" type="text" class="form-control" id="type" placeholder="Inserisci il tipo">
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">Artists</label>
            <input name="artists" type="text" class="form-control" id="artists"
                placeholder="Inserisci gli artisti (separati da virgola)">
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">Scrittori</label>
            <input name="writers" type="text" class="form-control" id="writers"
                placeholder="Inserisci gli scrittori (separati da virgola)">
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
@endsection
