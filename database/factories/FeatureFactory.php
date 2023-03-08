<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feature>
 */
class FeatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->unique()->randomElement(['DDOS PROTECTION','DATA BACKUP','DOMAIN FREE','SSL CERTIFICATE','MANAGED VPS','SECURITY OPTIMIZE']);
        $slug = Str::slug($title, '-');

        return [
        'title' => $title,
        'slug' => $slug,
        'description' => $this->faker->text(70),
        'priority' => $this->faker->unique()->numberBetween(1,100),
         'user_id' => 1,  
         'hostCategory_id' => $this->faker->numberBetween(0,12),
        ];
    }
}
