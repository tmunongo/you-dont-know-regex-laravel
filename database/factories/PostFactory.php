<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        return [
            //
            'title' => fake()->sentence(3),
            'slug' => fake()->regexify('^[a-z]{4}(-[a-z]{4}){2}$'),
            'category' => fake()->randomElement(['Programming', 'Design', 'Marketing', 'Writing']),
            'content' => fake()->text(),
        ];
    }
}
