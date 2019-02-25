@extends('layouts.app')
@section('title')
Narudžba
@endsection


@section('content')
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($meals as $key)
                        <li class="list-group-item">
                            <span class="badge">{{$key['qty']}}</span>
                                    <strong>{{$key['meal']['name']}}</strong>
                                    <span class="label label-success">{{$key['price']}} kn</span>

                        </li>
                    @endforeach

                </ul>

            </div>

        </div>
        <div class="row">
          <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
              <strong>Total; {{$totalPrice}} kn</strong>
          </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <button type="button" class="btn btn-success">Checkout</button>
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No Items In The Order</h2>
            </div>
        </div>
@endif
@endsection