<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class coursestatus extends Model
{
    protected $fillable=['title'];

    public function courses(){
        return $this->hasMany(course::class)->chaperOne();
    }
}
