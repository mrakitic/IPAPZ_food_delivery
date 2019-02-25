@extends('layouts.app')
@section('title')
    Edit meal
@endsection

@section('content')



    <div class="card-body">
        <form method="post" action="/meal/{{$meal -> id}}">
            <h1 style="text-align: center">Edit Meal</h1>
            {{method_field('PATCH')}}
            {{csrf_field()}}

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

            <div class="form-group row">
                <label for="category" class="col-md-4 col-form-label text-md-right">Kojoj vrsti hrane pripada:</label>

                <div class="col-md-6">
                    <select class="form-control" id="category" name="category">
                        @foreach($categories as $cat)
                            <option value="{{$cat -> id}}">{{$cat->name}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn-outline-dark">Update Meal</button>
                </div>
            </div>

        </form>

        <form method="post" action="/meal/{{$meal -> id}}">

            @method('DELETE')
            @csrf
            <div class="field">
                <div class="control">
                    <button type="submit" class="btn-danger">Delete meal</button>
                </div>
            </div>
        </form>
    </div>

@endsection