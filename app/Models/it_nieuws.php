<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class it_nieuws extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];
}
