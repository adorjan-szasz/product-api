<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Fashion;
use App\Models\Music;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Fashion::factory()->count(25)->create();
        Book::factory()->count(25)->create();
        Music::factory()->count(25)->create();
    }
}
