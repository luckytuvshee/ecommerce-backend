<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasketItem extends Model
{
    public function basket()
    {        
        return $this->belongsTo('App\Basket', 'id');
    }

    public function product_registration()
    {        
        return $this->hasOne('App\ProductRegistration', 'id', 'product_registration_id');
    }
}
