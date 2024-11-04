<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ProductenSeeder;
use App\Models\producten;
use App\Models\User;



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
        

    }
}
