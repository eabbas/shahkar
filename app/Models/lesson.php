<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\courseattachment;
use App\Models\lessoncomments;
use App\Models\Error;
use App\Models\Suggestion;
use App\Models\coursequestion;
use App\Models\courseseason;

class lesson extends Model
{
    protected $fillable = [
        "course_id",
        "title",
        "description",
        "price",
        "order",
        "free",
        "season_id",
        "duration",
        "video_path",
        "video_type"
    ];

    public function attachments()
    {
        return $this->hasMany(courseattachment::class);
    }

    public function lessoncomments()
    {
        return $this->hasMany(lessoncomments::class);
    }

    public function errors()
    {
        return $this->hasMany(Error::class);
    }

    public function suggestions()
    {
        return $this->hasMany(lessonsuggestion::class);
    }

    public function questions()
    {
        return $this->hasMany(coursequestion::class);
    }

    public function season()
    {
        return $this->belongsTo(courseseason::class, 'season_id');
    }
}
