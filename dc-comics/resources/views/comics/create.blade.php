@extends('layout.main')

@section('content')
    <h3>CREATE</h3>

    <form action="{{ route('comics.store') }}" method="POST">
        <div class="mb-3">
            <label for="src" class="form-label"> Path Img</label>
            <input name="src" type="text" class="form-control" id="src">
        </div>



    </form>
@endsection
