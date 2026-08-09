<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class consultRequest extends Model
{
    protected $fillable = [
        'name',
        'family',
        'phoneNumber',
        'email',
        'subject',
        'text',
        'is_completed'
    ];
}
