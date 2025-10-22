<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class courseCategory extends Model
{
    protected $fillable = ['title', 'parent_id'];
    public function courses()
    {
        return $this->hasMany(course::class);
    }
    public function children()
    {
        return $this->hasMany(courseCategory::class, 'parent_id')->with('children');
    }
}
