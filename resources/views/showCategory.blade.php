@extends('layouts.app')

@section('title')
    {{$category -> name}}
@endsection

@section('content')

    <h1 style="text-align: center">{{$category -> name}}</h1>
    <h3 style="text-align: right">
        @if(Auth::user() && Auth::user()->role==1)
            <a href="/category/{{$category -> id}}/edit">Edit category</a>
        @endif
    </h3>

    <div>
        @foreach($category->meals as $meal)
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="caption">
                        <h3><a href="/meal/{{$meal -> id}}">{{ $meal -> name }}</a></h3>
                        <div class="clearfix">
                            <div class="pull left-price"> {{$meal->price}} kn</div>
                            @if(Auth::user())
                            <a href="{{route('addToCart', ['id' => $meal->id])}}" class="btn btn-success pull-right" role="button">Add to order</a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>








@endsection