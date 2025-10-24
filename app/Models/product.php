<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['title', 'description', 'is_in_home', 'summary', 'category_id'];
    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function comments()
    {
        return $this->hasMany(comment::class);
    }
    public function medias()
    {
        return $this->hasMany(media::class);
    }
}
