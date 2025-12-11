<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\question; 
use App\Models\answerreaction; 

class courseanswer extends Model
{
    protected $fillable=[
        "user_id", 
        "question_id",
        "answer", 
        "status" ,
        "parent_id"
    ];

    public function question(){
        return $this->belongsTo(Question::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function parent(){
        return $this->belongsTo(answer::class, 'parent_id');
    }

    public function children(){
        return $this->hasMany(answer::class, 'parent_id');
    }

    public function reactions(){
        return $this->hasMany(answerreaction::class);
    }


}
