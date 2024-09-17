<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producten extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name',
        'Productnumber',
        'Stock',
        'Price',
        'Description',
        'Image',
    ];
}
