<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function brand()
    {   
        // to specify foreign key use 3rd parameter
        // return $this->hasOne('App\ProductBrand', 'foreign_key', 'local_key');
        return $this->hasOne('App\ProductBrand', 'id', 'product_brand_id');
    }

    public function type()
    {
        return $this->hasOne('App\ProductType', 'id', 'product_type_id');
    }

    public function product_registration()
    {        
        return $this->belongsTo('App\ProductRegistration');
    }
}
