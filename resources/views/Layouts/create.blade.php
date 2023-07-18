@extends("layouts.main-layout")

@section("content")

    <div class="text-center py-2">
        <h1>CREATE NEW COMIC</h1>
        <form method="POST" action="{{ route('store') }}" class="py-3">

            @csrf
            @method("POST")

            <label for="title">Title</label>
            <br>
            <input type="text" name="title" id="title">
            <br>
            <label for="description">Description</label>
            <br>
            <input type="text" name="description" id="description">
            <br>
            <label for="thumb">Thumb</label>
            <br>
            <input type="text" name="thumb" id="thumb">
            <br>
            <label for="price">Price</label>
            <br>
            <input type="text" name="price" id="price">
            <br>
            <label for="series">Series</label>
            <br>
            <input type="text" name="series" id="series">
            <br>
            <label for="sale_date">Sale Date</label>
            <br>
            <input type="date" name="sale_date" id="sale_date">
            <br>
            <label for="type">Type</label>
            <br>
            <input type="text" name="type" id="type">
            <br>

            <input class="mt-4 px-5 rounded" type="submit" value="CREATE">
        </form>
    </div>

@endsection