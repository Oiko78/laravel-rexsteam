<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        return [
            'short_description' => fake()->text(fake()->numberBetween(100, 500)),
            'long_description' => fake()->text(fake()->numberBetween(500, 2000)),
            'developer' => fake()->name(),
            'publisher' => fake()->name(),
            'price' => fake()->numberBetween(),
            'trailer' => fake()->imageUrl(1920, 1080, "game"),
            'adult' => fake()->boolean(),
            'release_date' => fake()->date(),
        ];
    }
}
