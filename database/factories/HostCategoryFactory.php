<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HostCategory>
 */
class HostCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->unique()->randomElement(['Dedicated Server','Shared Hosting','Reseller Hosting','Cloud Vps Server','Hosted Dialer','Windows Vps','ASP.NET','VPS SPECIAL','Blog Hosting','cPanel Hosting','Student Web Hosting','Boost Web Hosting','Non Profit Hosting']);
        $slug = Str::slug($name, '-');

        return [
        'name' => $name,
        'slug' => $slug,
        'home_show'	=> 1,
        'description' => $this->faker->text(300),
        'priority' => $this->faker->unique()->numberBetween(1,100),
         'user_id' => 1, 
         'image' => $this->faker->imageUrl(400,250) 
        ];
    }
}
