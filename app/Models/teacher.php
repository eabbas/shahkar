<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    protected $fillable=[
        'name',
        'bio',
        'profile_img',
        'expertise',
        'phone',
        'socila_media'
    ];
    
    public function courses(){
        return $this->belongsToMany(course::class,'teacher_courses');
    }
}
