<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $fillable = ['text', 'product_id', 'user_id', 'active'];
}
