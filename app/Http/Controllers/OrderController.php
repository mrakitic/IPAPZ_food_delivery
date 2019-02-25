<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Meal;
use Illuminate\Http\Request;
use Session;

class OrderController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        $meal = Meal::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($meal,$meal->id);

        $request->session()->put('cart',$cart);
        return redirect('/category');
    }

    public function getCart()
    {
        $meals = Meal::all();
        if(!Session::has('cart'))
        {
            return view('orderCart', ['meals' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('orderCart', ['meals' => $cart->items, 'totalPrice' => $cart->totalPrice]);

    }
}
