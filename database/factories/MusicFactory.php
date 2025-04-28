<?php

namespace Database\Factories;

use App\Models\Music;
use Illuminate\Database\Eloquent\Factories\Factory;

class MusicFactory extends Factory
{
    protected $model = Music::class;

    /**
     * @inheritDoc
     */
    public function definition()
    {
        return [
            'type' => 'MUSIC',
            'name' => $this->faker->words(rand(1, 5), true),
            'artist' => $this->faker->words(rand(1, 5), true),
            'media' => rand(0, 1) ? $this->faker->randomElement(['CD', 'DVD', 'Vinyl']) : null,
            'image' => rand(0, 1) ? $this->faker->imageUrl(300, 300) : null,
            'price' => $this->faker->randomFloat(2, 10, 500),
            'discount' => rand(0, 1) ? $this->faker->randomFloat(2, 0, 1) : null,
            'quantity' => $this->faker->numberBetween(0, 100),
        ];
    }
}
