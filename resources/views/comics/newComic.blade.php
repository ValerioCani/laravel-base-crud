@extends('layout.app')

@section('page_title', 'Insert New Comic')

@section('content')
   <div class="container">
        <form action="{{route('comics.store')}}" method="POST">

            @csrf

            <div class="input">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" />
            </div>
            <div class="input">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="70" rows="10"></textarea>
            </div>
            <div class="input">
                <label for="thumb">Src Thumb</label>
                <input type="text" id="thumb" name="thumb" />
            </div>
            <div class="input">
                <label for="price">Price</label>
                <input type="text" id="price" name="price" />
            </div>
            <div class="input">
                <label for="series">Series</label>
                <input type="text" id="series" name="series" />
            </div>
            <div class="input">
                <label for="sale_date">Sale_date</label>
                <input type="text" id="sale_date" name="sale_date" />
            </div>
            <div class="input">
                <label for="type">Type</label>
                <input type="text" id="type" name="type" />
            </div>

            <button type="submit">Save New Comic</button>
        </form>
   </div>
@endsection
