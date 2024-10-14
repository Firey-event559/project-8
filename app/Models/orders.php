<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 
use App\Models\OrderItems;

class orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'delivery_options',

    ];

    public function items()
    {
        return $this->hasMany(OrderItems::class, 'orders_id');
    }

    
        // Relationship to User
        public function user()
        {
            return $this->belongsTo(User::class);
        }
    
        // Relationship to OrderItems
        public function orderItems()
        {
            return $this->hasMany(OrderItem::class);
        }
}
