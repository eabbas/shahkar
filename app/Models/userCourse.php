<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\course;

class userCourse extends Model
{
    protected $fillable=['title',
    'user_id',
    'course_id',
    'progress',
    'status'];
    public function comments(){
          return $this->hasMany(comment::class)->chaperOne();
    }

    public function user(){
        return $this -> belongsTo(user::class);
    }

    public function course(){
        return $this -> belongsTo(course::class);
    }
   
}
