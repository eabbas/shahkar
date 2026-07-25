<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class header extends Model
{
    protected $fillable = [
        'img',
        'mobileImg',
        'title',
        'subTitle',
        'rightBtnText',
        'rightBtnLink',
        'rightBtnIcon',
        'leftBtnText',
        'leftBtnLink',
        'leftBtnIcon'
    ];
}
