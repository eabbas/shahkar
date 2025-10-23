<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class media extends Model
{
    protected $fillable = ['product_id', 'path', 'type', 'is_main'];
    public function product(){
        return $this->belongsTo(product::class);
    }
}
