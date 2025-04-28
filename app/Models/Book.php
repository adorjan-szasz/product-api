<?php

namespace App\Models;

class Book extends Product
{
    protected $table = 'products';

    protected $fillable = ['type', 'name', 'author', 'image', 'excerpt', 'publisher', 'price', 'discount', 'quantity'];
}
