<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class defaultComment extends Model
{
    protected $fillable = [
        'userName',
        'comment'
    ];
}
