<?php

namespace App\Models;

class Fashion extends Product
{
    protected $table = 'products';

    protected $fillable = ['type', 'name', 'size', 'gallery', 'brand', 'price', 'discount', 'quantity'];
}
