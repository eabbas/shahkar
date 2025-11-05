<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class footer_column extends Model
{
    protected $fillable = ['section_number', 'section_title'];
    public function rows()
    {
        return $this->hasMany(footer_row::class);
    }
    public function images()
    {
        return $this->hasMany(footerFormMedia::class);
    }
    public function texts()
    {
        return $this->hasMany(footerFormText::class);
    }
}
