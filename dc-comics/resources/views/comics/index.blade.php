@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">

            @foreach ($comics as $comic)
                <div class="col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch my-3">
                    <div class="card flex-fill">
                        <img src="{{ $comic->thumb }}" class="card-img-top img-fluid" alt="{{ $comic->title }}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-auto">{{ $comic->title }}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's
                                content.</p>
                        </div>
                        <ul class="list-group list-group-flush mt-auto">
                            <li class="list-group-item"><strong>ID: </strong> {{ $comic->id }}</li>
                            <li class="list-group-item"><strong>Series: </strong>{{ $comic->series }}</li>
                            <li class="list-group-item"><strong>Price: </strong>{{ $comic->price }}</li>
                            <li class="list-group-item"><strong>Artist: </strong>{{ $comic->artist }}</li>
                            <td><button class="btn  btn-primary">VAI</button></td>
                        </ul>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
