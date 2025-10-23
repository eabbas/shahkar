<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable = ['user_id', 'product_id', 'comment', 'parent_id'];
    public function user(){
        return $this->belongsTo(user::class);
    }
}
