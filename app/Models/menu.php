<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $fillable = ['title', 'description', 'link', 'icon', 'image', 'priority', 'active', 'parent_id'];
    public function parent()
    {
        return $this->belongsTo(menu::class);
    }
    public function children()
    {
        return $this->hasMany(menu::class, 'parent_id');
    }
}
