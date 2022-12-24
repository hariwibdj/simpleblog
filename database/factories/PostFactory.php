<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->text(100);
        return [
            'user_id'=> $this->faker->randomDigitNotNull(),
            'title'=> $title,
            'slug'=> Str::slug($title),
            'description' => $this->faker->paragraph(),
        ];
    }
}
