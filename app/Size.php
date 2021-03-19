<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public function product_registration()
    {        
        return $this->belongsTo('App\ProductRegistration');
    }
}
