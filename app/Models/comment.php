<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable = ['user_id', 'product_id', 'comment', 'parent_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function product()
    {
        return $this->belongsTo(product::class);
    }
    public function parent()
    {
        return $this->belongsTo(comment::class);
    }
    public function children()
    {
        return $this->hasMany(comment::class, 'parent_id');
    }
}
