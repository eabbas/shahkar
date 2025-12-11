<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\lesson;  

class courseattachment extends Model
{
    protected $fillable = [
                            'lesson_id', 'type', 'file_path'
                        ];

    public function lesson(){
        return $this->belongsTo(Lesson::class);
    }
}
