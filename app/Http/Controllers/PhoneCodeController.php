<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhoneCodeController extends Controller
{
    protected $fillable = [
        'phoneNumber',
        'code'
    ];
}
