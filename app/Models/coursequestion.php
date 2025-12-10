<?php

namespace App\Models;
use App\Models\lesson; 
use App\Models\User; 
use App\Models\answer; 

use Illuminate\Database\Eloquent\Model;

class coursequestion extends Model
{
   protected $fillable = [
        'user_id',
        'lesson_id',
        'question',
        'status'
    ];

    public function lesson(){
        return $this->belongsTo(Lesson::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function answers(){
        return $this->hasMany(answer::class);
    }
}
