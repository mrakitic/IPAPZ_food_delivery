<?php

namespace App;

class Cart
{
    public $items=null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if($oldCart)
        {
            $this->items =$oldCart->items;
            $this->totalQty =$oldCart->totalQty;
            $this-> totalPrice =$oldCart->totalPrice;
        }
    }

    public function add($meal , $id)
    {
        $storedMeal = ['qty' =>0, 'price' => $meal->price, 'meal' => $meal];
        if($this->items){
            if(array_key_exists($id,$this->items)){
                $storedMeal=$this->items[$id];
            }

        }
        $storedMeal['qty']++;
        $storedMeal['price'] = $meal->price * $storedMeal['qty'];
        $this->items[$id] = $storedMeal;
        $this->totalQty++;
        $this->totalPrice += $meal->price;
    }
}
