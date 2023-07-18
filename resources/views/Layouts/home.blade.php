@extends("layouts.main-layout")

@section("content")

    <div class="text-center">
        <h1>
            Available comics
            <a href="{{ route('create') }}">
                +
            </a>
        </h1>

        <ul class="list-unstyled">
            @foreach ($comics as $comic)
                <li>
                    <a href="{{ route('show', $comic -> id) }}">
                        {{ $comic -> title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

@endsection