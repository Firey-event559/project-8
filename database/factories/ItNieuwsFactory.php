<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\it_nieuws;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\it_nieuws>
 */
class ItNieuwsFactory extends Factory
{
    protected $model = it_nieuws::class;
    public function definition(): array
    {
        $images = [
            'images/Seeder.png',
        ];
        $titles = [
            'voorbeeld 1',
            'voorbeeld 2',
            'voorbeeld 3',
            ];

        return [
            'title' => $this->faker->randomElement($titles),
            'description' => $this->faker->sentence,
            'Image' => $this->faker->randomElement($images),
            'created_at' => now(), 
            'updated_at' => now(),
        ];
    }
}


