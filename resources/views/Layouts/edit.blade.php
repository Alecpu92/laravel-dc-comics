@extends("layouts.main-layout")

@section("content")

    <div class="text-center py-2">
        <h1>CREATE NEW COMIC</h1>
        <form method="POST" action="{{ route('update', $comic -> id) }}" class="py-3">

            @csrf
            @method("PUT")

            <label for="title">Title</label>
            <br>
            <input type="text" name="title" id="title" value="{{ $comic['title'] }}">
            <br>
            <label for="description">Description</label>
            <br>
            <textarea type="text" name="description" id="description" rows="5" style="width: 400px" >
                {{ $comic['description'] }}
            </textarea>
            <br>
            <label for="thumb">Thumb</label>
            <br>
            <input type="text" name="thumb" id="thumb" value="{{ $comic['thumb'] }}">
            <br>
            <label for="price">Price</label>
            <br>
            <input type="text" name="price" id="price" value="{{ $comic['price'] }}">
            <br>
            <label for="series">Series</label>
            <br>
            <input type="text" name="series" id="series" value="{{ $comic['series'] }}">
            <br>
            <label for="sale_date">Sale Date</label>
            <br>
            <input type="date" name="sale_date" id="sale_date" value="{{ $comic['sale_date'] }}">
            <br>
            <label for="type">Type</label>
            <br>
            <input type="text" name="type" id="type" value="{{ $comic['type'] }}">
            <br>

            <input class="mt-4 px-5 rounded" type="submit" value="UPDATE">
        </form>
    </div>

@endsection