<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Duration>
 */
class DurationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->unique()->randomElement(['Monthly','Yearly','2Yearly','5Yearly']);
        $slug = Str::slug($name, '-');
        return [
            'name'	=> $name,
            'slug' => $slug,
        ];
    }
}
