<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class courseanswer extends Model
{
    protected $fillable = [
        "user_id",
        "question_id",
        "answer",
        "status",
        "parent_id"
    ];

    public function question()
    {
        return $this->belongsTo(coursequestion::class, 'question_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function parent()
    {
        return $this->belongsTo(courseanswer::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(courseanswer::class, 'parent_id');
    }

    public function reactions()
    {
        return $this->hasMany(courseanswerreaction::class);
    }
}
