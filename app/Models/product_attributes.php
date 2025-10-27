<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product_attributes extends Model
{
    protected $fillable = ['product_id', 'attribute_id', 'attribute_value'];
    public function product_price()
    {
        return $this->belongsTo(product_price::class);
    }
}
