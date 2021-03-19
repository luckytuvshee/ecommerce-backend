<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    public function product_registration()
    {        
        return $this->belongsTo('App\ProductRegistration');
    }
}
