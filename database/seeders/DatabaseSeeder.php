<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use Illuminate\Database\Seeder;
use App\Models\producten;
use App\Models\User;
use App\Models\offerte;
use App\Models\orders;



// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        producten::factory()->count(100)->create();
        User::factory()->count(100)->create();
        offerte::factory()->count(100)->create();
        orders::factory()->count(100)->create();
        OrderItem::factory()->count(100)->create();
    
    }
}
