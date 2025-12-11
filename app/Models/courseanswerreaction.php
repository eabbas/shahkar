<?php

namespace App\Models;

use App\Models\User;
use App\Models\answer;

use Illuminate\Database\Eloquent\Model;

class courseanswerreaction extends Model
{
    protected $fillable = ['user_id', 'courseanswer_id', 'reaction'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function answer()
    {
        return $this->belongsTo(answer::class);
    }
}
