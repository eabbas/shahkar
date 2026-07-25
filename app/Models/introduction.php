<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class introduction extends Model
{
    protected $fillable = [
        'video',
        'videoCover',
        'firstBoxText',
        'firstBoxNumber',
        'firstBoxIcon',
        'secondBoxText',
        'secondBoxNumber',
        'secondBoxIcon',
        'thirdBoxText',
        'thirdBoxNumber',
        'thirdBoxIcon'
    ];
}
