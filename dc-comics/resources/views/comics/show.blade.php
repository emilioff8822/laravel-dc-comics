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
                <li class="list-group-item"><strong>Series: </strong>{{ $comic->series }}</li>
                <li class="list-group-item"><strong>Price: </strong>{{ $comic->price }}</li>
                <li class="list-group-item"><strong>Artists: </strong>{{ $comic->artists }}</li>
                <td> <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-info">INFO</a></td>
            </ul>
        </div>
    </div>
@endsection
