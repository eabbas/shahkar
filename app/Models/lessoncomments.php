<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\lesson;  
use App\Models\User;  

class lessoncomments extends Model
{
    protected $fillable=[
        "user_id" ,
        "lesson_id",
        "comment",
        "status"
    ];

    public function lesson(){
        return $this->belongsTo(Lesson::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
