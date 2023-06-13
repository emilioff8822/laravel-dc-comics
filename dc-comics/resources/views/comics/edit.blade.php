@extends('layout.main')

@section('content')


    <h3>Edita: {{ $comic->title }}</h3>
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.update', $comic) }}" method="POST">@csrf @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                value="{{ old('title', $comic->title) }}" placeholder="Inserisci il titolo">
        </div>
        @error('title')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description"
                placeholder="Inserisci la descrizione">{{ old('description', $comic->description) }}</textarea>
        </div>
        @error('description')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input name="thumb" type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb"
                value="{{ old('thumb', $comic->thumb) }}" placeholder="Inserisci l'URL della thumbnail">
        </div>
        @error('thumb')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input name="price" type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                value="{{ old('price', $comic->price) }}" placeholder="Inserisci il prezzo">
        </div>
        @error('price')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input name="series" type="text" class="form-control @error('series') is-invalid @enderror" id="series"
                value="{{ old('series', $comic->series) }}" placeholder="Inserisci la serie">
        </div>
        @error('series')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di Vendita</label>
            <input name="sale_date" type="date" class="form-control @error('sale_date') is-invalid @enderror"
                value="{{ old('sale_date', $comic->sale_date) }}" id="sale_date">
        </div>
        @error('sale_date')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input name="type" type="text" class="form-control @error('type') is-invalid @enderror" id="type"
                value="{{ old('type', $comic->type) }}" placeholder="Inserisci il tipo">
        </div>
        @error('type')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <div class="mb-3">
            <label for="artists" class="form-label">Artists</label>
            <input name="artists" type="text" class="form-control @error('artists') is-invalid @enderror" id="artists"
                value="{{ old('artists', $comic->artists) }}" placeholder="Inserisci gli artisti (separati da virgola)">
        </div>
        @error('artists')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <div class="mb-3">
            <label for="writers" class="form-label">Scrittori</label>
            <input name="writers" type="text" class="form-control @error('writers') is-invalid @enderror" id="writers"
                value="{{ old('writers', $comic->writers) }}" placeholder="Inserisci gli scrittori (separati da virgola)">
        </div>
        @error('writers')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
@endsection
