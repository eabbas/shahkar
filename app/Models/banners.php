<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class banners extends Model
{
    protected $fillable = ['sectionName', 'image', 'title', 'link_content', 'link_href'];
}
