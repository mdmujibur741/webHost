<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->unique()->randomElement(['Gold','Silver','Bronze','normal']);
        $slug = Str::slug($name, '-');
        return [
             'name' => $name,
             'slug' => $slug,
             'priority' => $this->faker->unique()->numberBetween(1,10),
        ];
    }
}
