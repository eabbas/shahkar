<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class coursecategory extends Model
{
    protected $fillable=['title',
        'description',
        'parent_id',
        'img',
        'show_in_home'
    ];

    public function courses(){
        return $this->hasMany(course::class)->chaperOne();
    }

    public function parent(){
        return $this->belongsTo(coursecategory::class, 'parent_id');
    }
}
