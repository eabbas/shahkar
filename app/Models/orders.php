<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $fillable = [
        'address_id',
        'user_id',
        'product_id',
        'order_status_id',
        'order_code'
    ];
}
