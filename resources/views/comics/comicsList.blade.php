@extends('layout.app')

@section('page_title', 'Comics List')

@section('content')
<div class="container">
    <a class="btn btn-create" href="{{route('comics.create')}}">Aggiungi Articolo</a>
</div>
<div class="container">
        <table>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Price</th>
                <th>Series</th>
                <th>Sale Date</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
            @foreach ($comics as $comic)
                <tr>
                    <th>{{$comic->id}}</th>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td>
                        <a class="btn btn-show" href="{{route('comics.show', ['comic'=>$comic->id])}}">Show</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
