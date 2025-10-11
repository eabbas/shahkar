<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $fillable = ['text', 'product_id', 'user_id', 'active'];
    public function product()
    {
        return $this->belongsTo(product::class);
    }
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    public function answers()
    {
        return $this->hasMany(answer::class);
    }
}
