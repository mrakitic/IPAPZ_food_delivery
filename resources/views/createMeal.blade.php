@extends('layouts.app')

@section('title')
    Novo jelo
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Napravi novo jelo') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/meal">
                            @csrf

                            <div class="form-group row">
                                <label for="meal_name" class="col-md-4 col-form-label text-md-right">Ime Jela:</label>

                                <div class="col-md-6">
                                    <input id="meal_name" type="text" class="form-control{{ $errors->has('meal_name') ? ' is-invalid' : '' }}" name="meal_name" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="meal_price" class="col-md-4 col-form-label text-md-right">Cijena:</label>

                                <div class="col-md-6">
                                    <input id="meal_price" type="text" class="form-control{{ $errors->has('meal_price') ? ' is-invalid' : '' }}" name="meal_price" required>kn
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
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-secondary">
                                    Kreiraj!
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection