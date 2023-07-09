<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'logo' => $this->faker->imageUrl(240,300),
            'favicon' => $this->faker->imageUrl( 90,60),
             'mobile' => $this->faker->e164PhoneNumber, 
             'address' => $this->faker->address(), 
             'email' => $this->faker->safeEmail(),
             'facebook' => $this->faker->url,
              'twitter' => $this->faker->url,
              'instagram' =>$this->faker->url,

    'footer_img_one' => $this->faker->imageUrl(300,200),
     'footer_img_two' => $this->faker->imageUrl(300,200),
    'footer_img_three' => $this->faker->imageUrl( 300,200),
    'footer_img_four' => $this->faker->imageUrl(300,200),
     'powered' => "devmujibur12@gmail.com",
     'about' => $this->faker->text(200),
    	'use_link' => '<h1><span style="color: rgb(0, 71, 178); background-color: rgb(61, 20, 102);">fgufdioiifrodiorfd</span></h1>',
     'home_feature_title' => $this->faker->text(40),
      'home_feature_description' => $this->faker->text(100),
      'home_package_title' => $this->faker->text(40),
      'home_package_description' => $this->faker->text(100),

      'home_premium_title' => $this->faker->text(40),
       'home_premium_description' => $this->faker->text(600),
       'home_premium_image' => $this->faker->imageUrl(400,300)
        ];
    }
}
