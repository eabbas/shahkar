<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class footerFormMedia extends Model
{
    protected $fillable = ['footer_column_id', 'path', 'alt', 'link'];
}
