<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductRegistration extends Model
{
    public function color()
    {        
        return $this->hasOne('App\Color', 'id', 'color_id');
    }

    public function size()
    {        
        return $this->hasOne('App\Size', 'id', 'size_id');
    }

    public function employee()
    {        
        return $this->hasOne('App\Employee', 'id', 'employee_id');
    }

    public function product()
    {        
        return $this->hasOne('App\Product', 'id', 'product_id');
    }

    public function basket_item()
    {        
        return $this->belongsTo('App\BasketItem');
    }
}
