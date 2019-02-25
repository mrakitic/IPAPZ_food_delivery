@extends('layouts.app')

@section('title')
   Edit {{$meal->name}}
@endsection

@section('content')

<div class="form-group row">
    <label for="meal_name" class="col-md-4 col-form-label text-md-right">Ime Jela:</label>

    <div class="col-md-6">
        <input id="meal_name" type="text" class="form-control{{ $errors->has('meal_name') ? ' is-invalid' : '' }}" name="meal_name" value="{{$meal->name}}">
    </div>
</div>

<div class="form-group row">
    <label for="meal_price" class="col-md-4 col-form-label text-md-right">Cijena:</label>

    <div class="col-md-6">
        <input id="meal_price" type="text" class="form-control{{ $errors->has('meal_price') ? ' is-invalid' : '' }}" name="meal_price" value="{{$meal->price}}">kn
    </div>
</div>

@if(Auth::user() && Auth::user()->role==1)
<a href="/meal/{{$meal->id}}/edit" class="btn btn-success pull-right" role="button">Edit meal</a>
@endif

    @endsection