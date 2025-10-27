<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product_price extends Model
{
    protected $fillable = ['product_id', 'product_attribute_id', 'price', 'discount', 'quantity'];
    public function product_attributes(){
        return $this->hasMany('product_attributes');
    }
}
