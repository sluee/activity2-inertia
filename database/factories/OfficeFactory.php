<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Office>
 */
class OfficeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'           =>fake()->company ,
            'office_head'    =>rand(1,30),
            'building'       => fake()->randomElement(['B1', 'B2', 'B3', 'B4']),
        ];
    }
}
