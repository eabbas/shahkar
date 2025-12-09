<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\course;
use App\Models\lesson;

class courseseason extends Model 
{
    protected $fillable=['title','description','price','order','course_id','free'];

    public function course(){
        return $this -> belongsTo(course::class);
    }
    public function lessons(){
        return $this -> hasMany(lesson::class);
    }
}
