@extends('layout.app')

@section('page_title', 'Edit Comic')

@section('content')
    <div class="container">
        <form action="{{route('comics.update', ['comic' => $comic->id])}}" method="POST">

            @csrf
            @method('PATCH')

            <div class="input">
                <label for="title">Title</label>
                <input type="text" id="title" name="title"value="{{$comic->title}}"/>
            </div>
            <div class="input">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="70" rows="10">{{$comic->description}}</textarea>
            </div>
            <div class="input">
                <label for="thumb">Src Thumb</label>
                <input type="text" id="thumb" name="thumb" value="{{$comic->thumb}}"/>
            </div>
            <div class="input">
                <label for="price">Price</label>
                <input type="text" id="price" name="price" value="{{$comic->price}}"/>
            </div>
            <div class="input">
                <label for="series">Series</label>
                <input type="text" id="series" name="series" value="{{$comic->series}}"/>
            </div>
            <div class="input">
                <label for="sale_date">Sale_date</label>
                <input type="text" id="sale_date" name="sale_date" value="{{$comic->sale_date}}"/>
            </div>
            <div class="input">
                <label for="type">Type</label>
                <input type="text" id="type" name="type" value="{{$comic->type}}"/>
            </div>

            <button type="submit">Save New Comic</button>
        </form>
    </div>
    <div class="container">
        <a href="{{route('comics.index')}}" class="btn btn-create">Back to the List</a>
    </div>
@endsection
