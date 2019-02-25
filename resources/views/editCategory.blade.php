@extends('layouts.app')
@section('title')
    Edit category
@endsection

@section('content')



    <div class="card-body">
        <form method="post" action="/category/{{$category -> id}}">
            <h1 style="text-align: center">Edit Category</h1>
            {{method_field('PATCH')}}
            {{csrf_field()}}

            <div class="form-group row">
                <label for="category_name" class="col-md-4 col-form-label text-md-right">Ime kategorije:</label>

                <div class="col-md-6">
                    <input id="category_name" type="text" class="form-control{{ $errors->has('category_name') ? ' is-invalid' : '' }}" name="category_name" value="{{$category->name}}">
                </div>
                <button type="submit" class="btn-outline-dark">Update category</button>
            </div>
        </form>

        <form method="post" action="/category/{{$category -> id}}">

            @method('DELETE')
            @csrf
            <div class="field">
                <div class="control">
                    <button type="submit" class="btn-danger">Delete category</button>
                </div>
            </div>
        </form>
    </div>

@endsection