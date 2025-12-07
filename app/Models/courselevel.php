<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class courselevel extends Model
{
    protected $fillable=['title'];
    
    public function courses(){
        return $this->hasMany(course::class)->chaperOne();
    }
}
