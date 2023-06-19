<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostTranslation>
 */
class PostTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'post_id' => NULL,
            'locale' => $this->faker->randomElement(['id', 'en']),
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(2),
        ];
    }
}
