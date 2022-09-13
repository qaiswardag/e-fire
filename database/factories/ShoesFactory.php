<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shoes>
 */
class ShoesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'person_id' => rand(1, 30),
            'brand' => fake()->firstNameFemale(),
            'farve' => fake()->unique()->colorName(),
            'størrelse' => rand(32, 38),
        ];
    }
}
