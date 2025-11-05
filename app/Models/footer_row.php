<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class footer_row extends Model
{
    protected $fillable = ['footer_column_id', 'row_content', 'row_href'];
}
