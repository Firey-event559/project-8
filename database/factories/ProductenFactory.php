<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\producten;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\producten>
 */
class ProductenFactory extends Factory
{
    protected $model = producten::class;

    public function definition(): array
    {
        // Predefined sample images array
        $images = [
            'images/Seeder.png',
        ];
        $productname = [
            'Surface Pro 9',
            'MacBook Air M1',
            'Dell XPS 13',
            'HP Spectre x360',
            'Asus ZenBook 14',
            'Lenovo ThinkPad X1',
            'Google Pixelbook',
            'Samsung Galaxy',
            'Acer Swift 3',
            'Razer Blade Stealth',
        ];

        return [
            'Name' => $this->faker->randomElement($productname),
            'Productnumber' => $this->faker->unique()->numberBetween(1000, 9999),
            'Stock' => $this->faker->numberBetween(1, 100),
            'Price' => $this->faker->numberBetween(1000, 10000),
            'Description' => $this->faker->sentence,
            'Image' => $this->faker->randomElement($images),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
