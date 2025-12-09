<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\coursecategory;
use App\Models\teacher;
use App\Models\level;
use App\Models\status;
use App\Models\User;
use App\Models\userCourse;
use App\Models\courseseason;


class course extends Model
{
    protected $fillable=['title','description','summary','price','discount','img','video','free','show_in_home','duration','progress','category_id','level_id','status_id'];

    public function categories()
    {
        return $this->belongsTo(coursecategory::class,'category_id');
    }

    public function teachers(){
        return $this->belongsToMany(teacher::class,'teacher_courses');
    }
    public function levels(){
        return $this->belongsTo(courselevel::class,'level_id');
    }
    public function statuses(){
        return $this->belongsTo(coursestatus::class,'status_id');
    }

    public function users(){
        return $this->belongsToMany(User::class,'user_courses');
    }
    public function userCourses(){
        return $this -> hasMany(userCourse::class);
    }

    public function seasons(){
        return $this -> hasMany(courseseason::class);
    }
}
