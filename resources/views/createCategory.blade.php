@extends('layouts.app')

@section('title')
Kreiranje Kategorije
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Napravi novu kategoriju') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/category">
                            @csrf

                            <div class="form-group row">
                                <label for="category_name" class="col-md-4 col-form-label text-md-right">Ime kategorije:</label>

                                <div class="col-md-6">
                                    <input id="category_name" type="text" class="form-control{{ $errors->has('category_name') ? ' is-invalid' : '' }}" name="category_name" required>
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