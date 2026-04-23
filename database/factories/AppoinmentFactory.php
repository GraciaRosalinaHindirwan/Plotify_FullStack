<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appoinment>
 */
class AppoinmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'property_name' => fake()->words(3, true),
            'property_address' => fake()->address(),
            'actual_time_schedule' => fake()->optional()->dateTime(),
            'is_approved_by_agen' => fake()->boolean(),
        ];
    }
}
