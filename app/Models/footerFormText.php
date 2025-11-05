<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class footerFormText extends Model
{
    protected $fillable = ['footer_column_id', 'text', 'placeholder'];
}
