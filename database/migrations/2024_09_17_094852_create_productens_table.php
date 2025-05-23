<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productens', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->integer('Productnumber');
            $table->integer('Stock');
            $table->integer('Price');
            $table->longText('Description');
            $table->string('Image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productens');
    }
};
