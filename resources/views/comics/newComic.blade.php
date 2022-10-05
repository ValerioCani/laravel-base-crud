@extends('layout.app')

@section('page_title', 'Insert New Comic')

@section('content')
    <div>

    </div>
    <div class="container">
        <form action="{{route('comics.store')}}" method="POST">

            @csrf

            <div class="input">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="@error('title') is-invalid @enderror" value="{{old('title')}}"/>
                @error('title')
                    <div class='invalid-feedback'>
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="input">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="70" rows="10" class="@error('description') is-invalid @enderror">{{old('description')}}</textarea>
                @error('description')
                    <div class='invalid-feedback'>
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="input">
                <label for="thumb">Src Thumb</label>
                <input type="text" id="thumb" name="thumb" class="@error('thumb') is-invalid @enderror" value="{{old('thumb')}}"/>
                @error('thumb')
                    <div class='invalid-feedback'>
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="input">
                <label for="price">Price</label>
                <input type="text" id="price" name="price" class="@error('price') is-invalid @enderror" value="{{old('price')}}"/>
                @error('price')
                    <div class='invalid-feedback'>
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="input">
                <label for="series">Series</label>
                <input type="text" id="series" name="series" class="@error('series') is-invalid @enderror" value="{{old('series')}}"/>
                @error('series')
                    <div class='invalid-feedback'>
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="input">
                <label for="sale_date">Sale Date</label>
                <input type="text" id="sale_date" name="sale_date" class="@error('sale_date') is-invalid @enderror" value="{{old('sale_date')}}"/>
                @error('sale_date')
                    <div class='invalid-feedback'>
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="input">
                <label for="type">Type</label>
                <input type="text" id="type" name="type" class="@error('type') is-invalid @enderror" value="{{old('type')}}"/>
                @error('type')
                    <div class='invalid-feedback'>
                        {{$message}}
                    </div>
                @enderror
            </div>

            <button type="submit">Save New Comic</button>
        </form>
    </div>
    <div class="container">
        <a href="{{route('comics.index')}}" class="btn btn-create">Back to the List</a>
    </div>
@endsection
