<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class phoneCode extends Model
{
    protected $fillable = [
        'phoneNumber',
        'code'
    ];
}
