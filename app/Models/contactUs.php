<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contactUs extends Model
{
    protected $fillable = ['user_id', 'name', 'family', 'email', 'phoneNum', 'description'];
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
