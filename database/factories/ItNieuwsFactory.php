<?php

namespace Database\Factories;
use App\Models\ItNieuws;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ItNieuws>
 */
class ItNieuwsFactory extends Factory
{
    protected $model = ItNieuws::class;
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
            'description' => $this->faker->sentence(50),
            'Image' => $this->faker->randomElement($images),
            'created_at' => now(), 
            'updated_at' => now(),
        ];
    }
}
