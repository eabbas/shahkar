<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\lessonerror;   

class lessonerrortitle extends Model
{
    protected $fillable=["title"];
    
    public function errors(){
        return $this->hasMany(lessonerror::class);
    }
}
