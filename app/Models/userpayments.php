<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class userpayments extends Model
{
    protected $fillable=["user_id","payment","meta_id","value" , "status"];

}
