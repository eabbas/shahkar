<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['title', 'description', 'parent_id', 'image'];
    public function products()
    {
        return $this->hasMany(product::class);
    }
    public function children()
    {
        return $this->hasMany(category::class, 'parent_id')->with('children');
    }
}
