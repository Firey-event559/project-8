<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producten;

class OrderItem extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Producten::class, 'product_id'); 


    }
    

    public function order()
    {
        return $this->belongsTo(Orders::class);
    }
}
