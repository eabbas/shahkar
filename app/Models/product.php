<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'title',
        'description',
        'summary',
        'category_id',
        'brand',
        'is_in_home',
    ];
    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function comments()
    {
        return $this->hasMany(comment::class)->chaperone();
    }
    public function medias()
    {
        return $this->hasMany(media::class);
    }
    public function price()
    {
        return $this->hasOne(product_price::class);
    }
    public function attributes()
    {
        return $this->hasMany(product_attributes::class)->chaperone();
    }
}
