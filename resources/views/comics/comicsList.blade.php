@extends('layout.app')

@section('page_title', 'Comics List')

@section('content')
<div class="container">
    <a class="btn btn-create" href="{{route('comics.create')}}">Add Article</a>
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
                    <td class="buttons-column">
                        <a class="btn btn-show" href="{{route('comics.show', ['comic'=>$comic->id])}}">Show</a>
                        <a class="btn btn-edit" href="{{route('comics.edit', ['comic'=>$comic->id])}}">Edit</a>
                        <form action="{{route('comics.destroy', ['comic'=>$comic->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-cancel">!Cancel</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
