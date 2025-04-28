<?php

namespace Database\Factories;

use App\Models\Fashion;
use Illuminate\Database\Eloquent\Factories\Factory;

class FashionFactory extends Factory
{
    protected $model = Fashion::class;

    /**
     * @inheritDoc
     */
    public function definition()
    {
        return [
            'type' => 'FASHION',
            'name' => $this->faker->words(rand(1, 3), true),
            'size' => $this->faker->randomElement(['XS', 'S', 'M', 'L', 'XL']),
            'gallery' => json_encode([
                $this->faker->imageUrl(300, 300),
                $this->faker->imageUrl(300, 300),
                $this->faker->imageUrl(300, 300),
            ]),
            'brand' => rand(0, 1) ? $this->faker->word() : null,
            'price' => $this->faker->randomFloat(2, 10, 500),
            'discount' => rand(0, 1) ? $this->faker->randomFloat(2, 0, 1) : null,
            'quantity' => $this->faker->numberBetween(0, 100),
        ];
    }
}
