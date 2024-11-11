<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\offerte;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\offerte>
 */
class OfferteFactory extends Factory
{
    protected $model = offerte::class;

    public function definition(): array
    {

        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phonenumber' => $this->faker->phoneNumber,
            'productnumber' => $this->faker->numberBetween(1030221, 1134556),
            'details' => $this->faker->sentence,
        ];
    }

}
