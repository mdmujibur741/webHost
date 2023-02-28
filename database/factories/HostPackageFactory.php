<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HostPackage>
 */
class HostPackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       $title = $this->faker->unique()->text(20);
          $slug = Str::slug($title, '-');
        return [
            
         'title' => $title,
         'slug'	 => $slug,
         'price' => $this->faker->randomNumber(2),
       'priority' => $this->faker->numberBetween(1,100),	
       'description' => $this->faker->text(35),	
       'icon_class'	=> 'fa-solid fa-check',
       'opportunityOne'	=> $this->faker->text(25),
       'opportunityTwo'	=>$this->faker->text(25),
       'opportunityThree' =>$this->faker->text(25),	
       'opportunityFour' =>$this->faker->text(25),	
       'opportunityFive' => $this->faker->text(25),	
       'opportunitySix' => $this->faker->text(25),	
       'opportunitySeven' =>$this->faker->text(25),	
       'opportunityEight' =>$this->faker->text(25),	
       'opportunityNine' => $this->faker->text(25),	
       'opportunityTen' => $this->faker->text(25),
       'opportunityEleven' => $this->faker->text(25),
       'opportunityTwelve' => $this->faker->text(25),
       'hostCategory_id' => $this->faker->numberBetween(1,6),	
       'plan_id' => $this->faker->numberBetween(1,3),	
        'duration_id' => $this->faker->numberBetween(1,3),	
        'user_id' => 1,
        ];
    }
}
