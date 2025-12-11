<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\lesson;
use App\Models\lessonerrortitle;

class lessonerror extends Model
{
    protected $fillable = [
        "user_id",
        "lesson_id",
        "error",
        "status",
        "errortype",
    ];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function errortitle()
    {
        return $this->belongsTo(lessonerrortitle::class, "errortype");
    }
}
