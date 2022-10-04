@extends('layout.app')

@section('page_title', 'Article Details')

@section('content')
    <div class="container">
        <section class="show">
            <div><strong>ID:</strong>{{$comic->id}}</div>
            <div><strong>Title:</strong></strong>{{$comic->title}}</div>
            <div><strong>Description:</strong>{{$comic->description}}</div>
            <div><strong>Thumb:</strong>{{$comic->thumb}}</div>
            <div><strong>Price:</strong>{{$comic->price}}</div>
            <div><strong>Series:</strong>{{$comic->series}}</div>
            <div><strong>Sale Date:</strong>{{$comic->sale_date}}</div>
            <div><strong>Type:</strong>{{$comic->type}}</div>
        </section>
        <section class="show show-image">
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
        </section>
    </div>
    <div class="container">
        <a href="{{route('comics.index')}}" class="btn btn-create">Back to the List</a>
    </div>
@endsection

