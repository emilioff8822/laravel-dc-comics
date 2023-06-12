@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">

            @foreach ($comics as $comic)
                <div class="col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch my-5">
                    <div class="card flex-fill border-info">
                        <img src="{{ $comic->thumb }}" class="card-img-top img-fluid" alt="{{ $comic->title }}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-auto">{{ $comic->title }}</h5>
                        </div>
                        <ul class="list-group list-group-flush mt-auto">
                            <li class="list-group-item"><strong>ID: </strong> {{ $comic->id }}</li>
                            <li class="list-group-item"><strong>Series: </strong>{{ $comic->series }}</li>
                            <li class="list-group-item"><strong>Price: </strong>{{ $comic->price }}</li>
                            <li class="list-group-item"><strong>Artists: </strong>{{ $comic->artists }}</li>
                            <li class="list-group-item"><a href="{{ route('comics.show', $comic->id) }}"
                                    class="btn btn-info">INFO</a></li>
                        </ul>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="d-flex justify-content-center">
            {{ $comics->links() }}
        </div>
    </div>
@endsection
