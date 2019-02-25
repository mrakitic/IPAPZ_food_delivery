<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $guarded = [];

    public function scopeSearch($query, $q){
        return $query->where('name','LIKE','%'.$q.'%')->orWhere('price','LIKE','%'.$q.'%');

    }
}
