<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    
   
    protected $model = User::class;
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       return [
            'name' => $this->faker->name, // Random name
            'phonenumber' => $this->faker->phoneNumber, // Random phone number
            'email' => $this->faker->unique()->safeEmail, // Unique random email
            'adress' => $this->faker->address, // Random address
            'password' => bcrypt('password'), // Default password (hashed)
            'role' => 1, // Set role to 1
            'created_at' => now(), // Current timestamp for created_at
            'updated_at' => now(), // Current timestamp for updated_at
        ];
        
    }
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
