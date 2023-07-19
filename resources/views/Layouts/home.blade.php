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
                <li class="my-3">
                    <a href="{{ route('show', $comic -> id) }}">
                        {{ $comic -> title }}
                    </a>
                    <br>
                    <a class="btn btn-primary mx-3" href="{{ route('edit', $comic -> id) }}">
                        EDIT
                    </a>
                    <form
                        class="d-inline"
                        method="POST"
                        action="{{ route('delete', $comic -> id) }}"
                        onsubmit="return formSend(event)"
                    >

                        @csrf
                        @method("DELETE")

                        <input type="submit" class="btn btn-primary mx-3" value="DELETE">
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

    <script>
        function formSend(e) {
            if (window.confirm("Do you really want to delete this comic?"))
                return;

            e.preventDefault();
        }
    </script>

@endsection