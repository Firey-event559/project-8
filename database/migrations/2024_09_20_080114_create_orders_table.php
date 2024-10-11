<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 10, 2)->default(0.00); // Order amount
            $table->string('delivery_options')->default('DHL'); // Delivery options
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key for user
            $table->timestamps(); // Created_at and updated_at timestamps
        });
        
         
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
