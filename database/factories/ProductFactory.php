<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**

 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->sentence(),
            'description'=>$this->faker->sentence(rand(1,3),true),
            'image'=>$this->faker->imageUrl(),
            'price'=>rand(1000,15000),
            'active'=>$this->faker->boolean(80)
        ];
    }
}
