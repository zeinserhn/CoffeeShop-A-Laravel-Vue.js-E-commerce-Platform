<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Journale>
 */
class JournaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'title' => $this->faker->sentence(),
        'description' => $this->faker->paragraph(),
        'date' => $this->faker->date(),
        'category' => $this->faker->randomElement(['Coffee', 'Education', 'Lifestyle', 'Community']),
        'imageArticle'=>$this->faker->imageUrl()
        ];
    }
}
