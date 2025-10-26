<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bigTile extends Model
{
    protected $fillable = ['header', 'title', 'text', 'btn1_content', 'btn1_href', 'btn2_content', 'btn2_href', 'img', 'bg_img'];
}
