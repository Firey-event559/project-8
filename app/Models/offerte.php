<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offerte extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phonenumber',
        'serialnumber',
        'details',
    ];
}

