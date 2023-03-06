<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'office_id'         =>rand(1,30),
            'name'              =>fake()->word,
            'description'       =>fake()->sentence,
            'value'             =>fake()->randomFloat(100,2),
            'status'            =>fake()->randomElement(['good', 'lost', 'out of delivery', 'lost', 'damage']),
            'date_acquired'     =>fake()->dateTime,
        ];
    }
}
