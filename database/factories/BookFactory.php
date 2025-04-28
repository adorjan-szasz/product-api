<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition()
    {
        return [
            'type' => 'BOOK',
            'name' => $this->faker->words(rand(1, 3), true),
            'author' => $this->faker->name(),
            'image' => $this->faker->imageUrl(300, 300),
            'excerpt' => rand(0, 1) ? $this->faker->text(200) : null,
            'publisher' => rand(0, 1) ? $this->faker->words(rand(1, 3), true) : null,
            'price' => $this->faker->randomFloat(2, 10, 500),
            'discount' => rand(0, 1) ? $this->faker->randomFloat(2, 0, 1) : null,
            'quantity' => $this->faker->numberBetween(0, 100),
        ];
    }
}
