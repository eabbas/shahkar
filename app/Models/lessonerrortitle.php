<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Error;   

class lessonerrortitle extends Model
{
    protected $fillable=["title"];
    
    public function errors(){
        return $this->hasMany(Error::class);
    }
}
