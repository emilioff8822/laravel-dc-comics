@extends('layout.main')

@section('content')
    <div class="col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch my-5">
        <div class="card flex-fill">
            <img src="{{ $comic->thumb }}" class="card-img-top img-fluid" alt="{{ $comic->title }}">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title mb-auto">{{ $comic->title }}</h5>
                <p class="card-text">{{ $comic->description }}</p>

            </div>
            <ul class="list-group list-group-flush mt-auto">
                <li class="list-group-item"><strong>ID: </strong> {{ $comic->id }}</li>
                <li class="list-group-item"><strong>Writers: </strong>{{ $comic->writers }}</li>
                <li class="list-group-item"><strong>Sale date: </strong>{{ $comic->sale_date }}</li>
                <li class="list-group-item"><strong>Type: </strong>{{ $comic->type }}</li>
                <td><a href="{{ route('comics.edit', $comic) }}" class="btn btn-primary">Modifica</a></td>
                <form action="{{ route('comics.destroy', $comic) }} " method="POST"
                    onsubmit=" return confirm ('Vuoi eliminare il comic {{ $comic->title }} ?')" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" href="{{ route('comics.destroy', $comic) }}"
                        class="btn btn-danger">Elimina</button>

                </form>

            </ul>
        </div>
    </div>
@endsection
