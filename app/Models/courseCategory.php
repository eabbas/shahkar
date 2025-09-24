<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class courseCategory extends Model
{
    protected $fillable = ['title'];
    public function courses()
    {
        return $this->hasMany(course::class);
    }
}
