<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'name', 'price', 'discount', 'quantity'];

    protected $casts = [
        'gallery' => 'array',
    ];

    public static function generateRandomProduct(): self
    {
        $types = [Fashion::class, Book::class, Music::class];

        return $types[array_rand($types)]::factory()->make();
    }

    // Overrides the Model's toArray() function to return only the fields with existing values
    public function toArray()
    {
        return array_filter(parent::toArray(), function ($value) {
            return !is_null($value);
        });
    }
}
