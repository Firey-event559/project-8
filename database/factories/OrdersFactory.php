<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\orders;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\orders>
 */
class OrdersFactory extends Factory
{

    protected $model = orders::class;
    public function definition(): array
    {

        $delivery_options = [
            'Pickup',
            'Delivery',
        ];
        return [
            'amount' => $this->faker->unique()->numberBetween(1000, 9999),
            'delivery_options' => $this->faker->randomElement($delivery_options),
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
