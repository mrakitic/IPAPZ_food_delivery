@extends('layouts.app')
@section('title')
    Narucivanje
@endsection


@section('content')


<h1 style="text-align: center">Izaberi izmedu ponudenih kategorija hrane</h1>

    @foreach($category as $key)
        <ul style="font-size: 500%">
            <li><a href="/category/{{$key -> id}}">{{$key->name}}</a></li>
        </ul>
    @endforeach
    <div class="text-center">
        {{$category->links()}}
    </div>

@endsection