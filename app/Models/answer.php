<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    protected $fillable = ['text', 'question_id', 'parent_id', 'user_id'];
    public function question()
    {
        return $this->belongsTo(question::class);
    }
    public function parent()
    {
        return $this->belongsTo(answer::class);
    }
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
