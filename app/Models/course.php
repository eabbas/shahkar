<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $fillable = ['title', 'description', 'courseCategory_id'];
    public function courseCategory()
    {
        return $this->belongsTo(courseCategory::class, 'courseCategory_id');
    }
}
